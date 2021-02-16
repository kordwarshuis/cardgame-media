<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cartoons</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <script></script>
    <style>
        body {
            text-align: center;
        }

        div {
            display: inline-block;
            max-width: 500px;
            border: 1px solid #111;
            margin: 30px;
            padding: 20px;
        }
        .logo {
            width: 400px;
        }
        img {
            width: 100%;
        }

        textarea {
            border: 1px solid #111;
            width: 90%;
        }
    </style>
</head>

<body>
    <h1>Cartoons</h1>
    <h2>FREE TO USE!!</h2>
    <img class="logo" src="../../logo/cropped-header_bcb.png" alt="Blockchain Bird logo, a blue blocky bird">
    <p>You can use these images under the Creative Commons licence CC v4.0, https://creativecommons.org/licenses/by/4.0/</p>

    <?php
function is_image($path)
{
    $a = getimagesize($path);
    $image_type = $a[2];

    if (in_array($image_type, array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
        return true;
    }
    return false;
}

$dir = new DirectoryIterator(".");
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        if (is_image($fileinfo->getFilename())) {
            echo "<div>";
            echo "<img src='" . ($fileinfo->getFilename()) . "' alt='' />";
            echo "<textarea rows='3' cols='50' onclick='this.focus();this.select()' readonly='readonly'>https://blockchainbird.com/t/media/img/social-media/cards/" . $fileinfo->getFilename() . "</textarea>";
            echo "</div>";
        }
    }
}
?>
</body>
</html>