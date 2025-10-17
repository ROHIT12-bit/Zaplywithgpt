<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?= $websiteTitle ?> - Official
        #Watch High Quality Anime Online Without Ads
    </title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="en" />
    <meta name="description"
        content="<?= $websiteTitle ?>: Stream the Best Anime Anytime, Anywhere! Dive into a Vast Library of Classic and New Anime Series, Movies, and More – All Just a Click Away on <?= $websiteTitle ?>!" />
    <meta name="keywords"
        content="anime streaming, watch anime online, free anime streaming, anime episodes, anime movies, anime series, HD anime, anime website, latest anime, popular anime, anime streaming site, dubbed anime, subbed anime, stream anime online, anime library, new anime releases, anime genres, anime in HD, anime with subtitles, online anime, An-Streamz, anime streaming platform" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $websiteUrl ?>" />
    <meta property="og:title"
        content="<?= $websiteTitle ?> - Official Watch High Quality Anime Online Without Ads" />
    <meta property="og:image" content="<?= $banner ?>" />
    <meta property="og:description"
        content="<?= $websiteTitle ?>: Stream the Best Anime Anytime, Anywhere! Dive into a Vast Library of Classic and New Anime Series, Movies, and More – All Just a Click Away on <?= $websiteTitle ?>!" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="apple-touch-icon" href="<?=$websiteUrl?>/favicon.png?v=<?=$version?>" />
    <link rel="shortcut icon" href="<?=$websiteUrl?>/favicon.png?v=<?=$version?>" type="image/x-icon"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css?v=<?= $version ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css?v=<?= $version ?>">
    <link rel="stylesheet" href="<?= $websiteUrl ?>/src/assets/css/landing.css?v=<?= $version ?>">
    <link rel="stylesheet" href="<?= $websiteUrl ?>/src/assets/css/styles.min.css?v=<?= $version ?>">
    <link rel="stylesheet" href="<?= $websiteUrl ?>/src/assets/css/search.css">
    <script src="<?=$websiteUrl?>/src/assets/js/search.js"></script>
</head>

<body>
    <div id="wrapper">
        <!-- Header omitted for brevity -->

        <!-- Begin: Main -->
        <div id="xmain-wrapper">
            <div class="container">
                <div class="mwb-2col">
                    <div class="mwb-left">
                        <h1 class="mw-heading">
                            <?= $websiteTitle ?> - The best site to watch anime online for Free
                        </h1>
                        <p>Do you know that according to Google, the monthly search volume for anime related topics is up to over 1 Billion times? Anime is famous worldwide and it is no wonder we've seen a sharp rise in the number of free anime streaming sites.</p>
                        
                        <!-- Latest Anime Episodes Section (Added) -->
                        <h2>Latest Anime Episodes</h2>
                        <div id="anime-list"></div>

                        <!-- Original Content continues -->
                        <h2>1/ What is <?= $websiteTitle ?>?</h2>
                        <p><?= $websiteTitle ?> is a free site to watch anime and you can even download subbed or dubbed anime in ultra HD quality without any registration or payment...</p>

                        <h2>2/ Is <?= $websiteTitle ?> safe?</h2>
                        <p>Yes we are, If you find any ads that are suspicious, please forward us the info and we will remove it.</p>

                        <h2>3/ So what make <?= $websiteTitle ?> the best site to watch anime free online?</h2>
                        <p>Before building <?= $websiteTitle ?>, we've checked many other free anime sites, and learnt from them...</p>
                        <!-- More content continues -->

                    </div>
                    <div class="mwb-right">
                        <!-- Sidebar content omitted for brevity -->
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- End: Main -->

        <!-- Footer omitted for brevity -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js?v=<?= $version ?>"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js?v=<?= $version ?>"></script>

    <!-- Search submit -->
    <script>
        document.getElementById('search-button').addEventListener('click', function() {
            document.getElementById('search-form').submit();
        });
    </script>

    <!-- RSS Fetch Script -->
    <script src="<?= $websiteUrl ?>/public/rss-fetch.js"></script>

</body>
</html>                                
