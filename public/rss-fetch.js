// public/rss-fetch.js
async function fetchRSS() {
    try {
        const response = await fetch('https://subsplease.org/rss/?t=rss'); // your RSS feed
        const xml = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(xml, 'text/xml');
        const items = xmlDoc.querySelectorAll('item');

        const animeList = [];
        items.forEach(item => {
            // Optional: Extract thumbnail from description if available
            const desc = item.querySelector('description').textContent;
            const imgMatch = desc.match(/<img.*?src="(.*?)"/);
            const thumbnail = imgMatch ? imgMatch[1] : 'https://via.placeholder.com/150x220?text=No+Image';

            animeList.push({
                title: item.querySelector('title').textContent,
                link: item.querySelector('link').textContent,
                pubDate: item.querySelector('pubDate').textContent,
                description: desc.replace(/<[^>]+>/g, '').substring(0, 100) + '...', // strip HTML
                thumbnail: thumbnail
            });
        });

        return animeList;
    } catch (error) {
        console.error('RSS Fetch Error:', error);
        return [];
    }
}

fetchRSS().then(animeList => {
    const animeContainer = document.getElementById('anime-list');
    animeContainer.innerHTML = ''; // Clear existing

    animeList.forEach(anime => {
        const animeCard = document.createElement('div');
        animeCard.classList.add('anime-card');
        animeCard.style.cssText = `
            display:flex; 
            margin-bottom:15px; 
            gap:10px; 
            border:1px solid #ccc; 
            padding:10px; 
            border-radius:5px;
            background:#1b1b1b;
            color:#fff;
        `;

        animeCard.innerHTML = `
            <div class="anime-thumb">
                <a href="${anime.link}" target="_blank">
                    <img src="${anime.thumbnail}" alt="${anime.title}" style="width:120px; height:auto; border-radius:5px;">
                </a>
            </div>
            <div class="anime-info">
                <h4 style="margin:0 0 5px;"><a href="${anime.link}" target="_blank" style="color:#ffd700; text-decoration:none;">${anime.title}</a></h4>
                <p style="margin:0 0 5px; font-size:14px;">${anime.description}</p>
                <small>Published on: ${new Date(anime.pubDate).toLocaleDateString()}</small>
            </div>
        `;

        animeContainer.appendChild(animeCard);
    });
});
