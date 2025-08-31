// Define a cache name
const CACHE_NAME = 'anipaca-cache-v1.01';

// ShareThis domains to bypass
const BYPASS_DOMAINS = [
    'platform-api.sharethis.com',
    'l.sharethis.com',
    'buttons-config.sharethis.com'
];

// List of URLs to cache (predefined assets only)
const urlsToCache = [
    '/index.php',
    '/src/assets/css/styles.min.css',
    '/src/assets/css/bootstrap.min.css',
    '/src/assets/js/app.min.js',
    '/public/logo/favicon.png',
    '/public/logo/logo.png',
    '/public/logo/favicon.ico',
    '/offline.html'
];

// On install: cache important files
self.addEventListener('install', event => {
    console.log('âœ… Service Worker: Installed');
    self.skipWaiting();
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => {
                console.log('âœ… Caching essential assets...');
                return cache.addAll(urlsToCache);
            })
            .catch(err => console.error('âŒ Caching failed:', err))
    );
});

// On activate: clean old caches
self.addEventListener('activate', event => {
    console.log('âœ… Service Worker: Activated');
    event.waitUntil(
        caches.keys().then(keys =>
            Promise.all(
                keys.map(key => {
                    if (key !== CACHE_NAME) {
                        console.log('ðŸ—‘ Removing old cache:', key);
                        return caches.delete(key);
                    }
                })
            )
        )
    );
});

// On fetch: serve cache-first for static files, network-first for dynamic
self.addEventListener('fetch', event => {
    const url = new URL(event.request.url);

    // Skip ShareThis scripts
    if (BYPASS_DOMAINS.some(domain => url.hostname.includes(domain))) return;

    const isStatic = urlsToCache.includes(url.pathname);

    if (isStatic) {
        // Cache-first for predefined assets
        event.respondWith(
            caches.match(event.request, { ignoreSearch: true }).then(cached => {
                if (cached) return cached;
                return fetch(event.request).then(response => {
                    return response;
                });
            })
        );
    } else {
        // Network-first for all others (dynamic)
        event.respondWith(
            fetch(event.request)
                .then(response => {
                    return response;
                })
                .catch(() => {
                    // Fallback if offline
                    if (event.request.headers.get('accept').includes('text/html')) {
                        return caches.match('/offline.html');
                    }
                    return new Response('âš ï¸ You are offline.');
                })
        );
    }
});
