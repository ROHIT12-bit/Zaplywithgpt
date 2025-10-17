
<?php 

// Connect to Clever Cloud MySQL using environment variables
$conn = new mysqli(
    getenv('DB_HOST'), 
    getenv('DB_USER'), 
    getenv('DB_PASS'), 
    getenv('DB_NAME'),
    getenv('DB_PORT') ?? 3306
);

if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    echo("Database connection failed.");
    exit; // stop further execution if DB connection fails
}

// Website settings
$websiteTitle = "AniPaca";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "raisulentertainment@gmail.com";

$version = "1.0.2";

// Social links
$discord = "https://dcd.gg/anipaca";
$github = "https://github.com/PacaHat";
$telegram = "https://t.me/anipaca";
$instagram = "https://www.instagram.com/pxr15_"; 

// API and proxy settings
$zpi = "https://your-hosted-api.com/api"; // https://github.com/PacaHat/zen-api
$proxy = $websiteUrl . "/src/ajax/proxy.php?url=";

// Faster loading option
// $proxy = "https://your-hosted-proxy.com/proxy?url="; // https://github.com/PacaHat/shrina-proxy

// Banner image
$banner = $websiteUrl . "/public/images/banner.png";
