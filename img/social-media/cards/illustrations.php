<?php
$data = array();

function is_image($path)
{
    $a = getimagesize($path);
    $image_type = $a[2];

    if (in_array($image_type, array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
        return true;
    }
    return false;
}

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/";
$dir = new DirectoryIterator(".");
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        if (is_image($fileinfo->getFilename())) {
            if (strpos($fileinfo->getFilename(), '-text') !== false) {// only if it contains the string '-text'
                array_push($data, $url.$fileinfo->getFilename());
            }

        }
    }
}

$selection = array_slice($data, 0, 5);

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/text');
echo json_encode(array_values($selection));