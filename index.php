<?php
require_once(__DIR__ . '/_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $websiteTitle ?> - Watch Anime Online in HD for Free</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon + Styling -->
    <link rel="apple-touch-icon" href="/favicon.png?v=<?= $version ?>">
    <link rel="shortcut icon" href="/favicon.png?v=<?= $version ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css?v=<?= $version ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css?v=<?= $version ?>">
    <link rel="stylesheet" href="/src/assets/css/landing.css?v=<?= $version ?>">
    <link rel="stylesheet" href="/src/assets/css/styles.min.css?v=<?= $version ?>">
    <link rel="stylesheet" href="/src/assets/css/search.css?v=<?= $version ?>">
</head>

<body>
    <div id="wrapper">
        <!-- HEADER -->
        <header class="navbar navbar-dark bg-dark p-3">
            <div class="container d-flex justify-content-between align-items-center">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <img src="<?= $websiteLogo ?>" alt="Logo" height="45" class="mr-2">
                    <span class="text-light font-weight-bold"><?= $websiteTitle ?></span>
                </a>
                <form id="search-form" class="form-inline" action="/search">
                    <input class="form-control mr-2" type="search" placeholder="Search anime..." name="q" required>
                    <button id="search-button" class="btn btn-outline-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </header>

        <!-- MAIN CONTENT -->
        <main class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="mb-3"><?= $websiteTitle ?> - The best site to watch anime online for Free</h1>
                    <p>Do you know that according to Google, the monthly search volume for anime-related topics is over 1 billion times? Anime’s global popularity is skyrocketing — and <?= $websiteTitle ?> is here to give you the best anime experience with no ads, no signup, and pure HD fun.</p>

                    <h2 class="mt-5">🔥 Latest Anime Episodes</h2>
                    <div id="anime-list" class="border rounded p-3 bg-dark text-light">
                        <p>Loading latest anime...</p>
                    </div>

                    <h2 class="mt-5">💡 What is <?= $websiteTitle ?>?</h2>
                    <p><?= $websiteTitle ?> is your go-to anime streaming site to watch and download subbed or dubbed anime in HD — all without registration or fees.</p>

                    <h2>🛡 Is <?= $websiteTitle ?> safe?</h2>
                    <p>Yes! <?= $websiteTitle ?> is 100% safe. We constantly review sources to make sure you get a smooth and secure viewing experience.</p>

                    <h2>🚀 What makes <?= $websiteTitle ?> the best?</h2>
                    <p>Before building <?= $websiteTitle ?>, we tested tons of free anime sites and learned what anime fans really want — speed, simplicity, and quality. Our site delivers exactly that.</p>
                </div>

                <!-- SIDEBAR -->
                <div class="col-md-4">
                    <div class="card bg-dark text-light mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Connect with Zaply</h5>
                            <ul class="list-unstyled">
                                <li><a href="<?= $telegram ?>" target="_blank" class="text-info"><i class="fab fa-telegram"></i> Telegram</a></li>
                                <li><a href="<?= $discord ?>" target="_blank" class="text-info"><i class="fab fa-discord"></i> Discord</a></li>
                                <li><a href="<?= $instagram ?>" target="_blank" class="text-info"><i class="fab fa-instagram"></i> Instagram</a></li>
                                <li><a href="<?= $github ?>" target="_blank" class="text-info"><i class="fab fa-github"></i> GitHub</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- FOOTER -->
        <footer class="bg-dark text-center text-light py-3 mt-4">
            <small>© <?= date('Y') ?> <?= $websiteTitle ?>. All rights reserved.</small>
        </footer>
    </div>

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js?v=<?= $version ?>"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js?v=<?= $version ?>"></script>
    <script src="/src/assets/js/search.js?v=<?= $version ?>"></script>
    <script src="/public/rss-fetch.js?v=<?= $version ?>"></script>
</body>
</html>
