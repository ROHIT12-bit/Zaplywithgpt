<?php 

// ✅ Database connection (fill with your own)
$conn = new mysqli("b4dsoywxryvkguc7uavy-mysql.services.clever-cloud.com", "uoi1eae1fi84rcok", "kd3stZ5giBeOwJwBwabd", "b4dsoywxryvkguc7uavy");

if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    echo("Database connection failed.");
}

// ✅ Website Information
$websiteTitle = "Zaply";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "zaplyteam@gmail.com";
$version = "1.0.2";

// ✅ Social Links
$discord = "https://discord.gg/zaply";
$github = "https://github.com/ROHIT12-bit/ROHITREDDY69";
$telegram = "https://t.me/ROHITREDDY69";
$instagram = "https://www.instagram.com/rohitreddy12345";

// ✅ API and Proxy setup
$zpi = "https://your-hosted-api.com/api"; // replace later
$proxy = $websiteUrl . "/src/ajax/proxy.php?url=";

// ✅ Banner
$banner = $websiteUrl . "/public/images/banner.png";

?>
