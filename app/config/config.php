<?php
//Setting up the BaseURL
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https";
} else {
    $url = "http";
}

$url .= "://{$_SERVER['HTTP_HOST']}";

//Defining the important url's
define("BASEURL", "{$url}/");
define("BASEURL_CMS", "{$url}/admin/");
define("BASEURL_CDN", "{$url}/cdn/");
define("DOCUMENT_ROOT", "{$_SERVER['DOCUMENT_ROOT']}");

if ($_SERVER['REQUEST_URI'] != "/") {
    define("CURRENT_PAGE", "{$url}{$_SERVER['REQUEST_URI']}");
} else {
    define("CURRENT_PAGE", "{$url}");
}

//Get config json file
$config = file_get_contents("{$url}/public/assets/json/config.json");
$config = json_decode($config, true);

//Get secrets from config.ini file
$secrets = parse_ini_file(DOCUMENT_ROOT . "/config.ini", true);

//Function for is a mobile device check
function isMobileDevice()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


?>

<!-- Pass the php define's to JavaScript -->
<script defer>
    const BASEURL = "<?= BASEURL ?>";
    const BASEURL_CMS = "<?= BASEURL_CMS ?>";
    const BASEURL_CDN = "<?= BASEURL_CDN ?>";
</script>