<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require 'style.php' ?>
    <title>freshyfreshy</title>
</head>
<body>

<h1>Fresh Songs</h1>
<div class="hyperlinks">
    <a href="index.phtml">FRONT PAGE</a>
    <a href="songs.php">NEW FRESH SONGS</a>
    <a href="albums.php">NEW FRESH ALBUMS</a>
    <a href="bestAlbums.php">BEST ALBUMS</a>
    <a href="blog.php">BLOG</a>
    <a href="radio.php">ALTERNATIVE RADIO</a>
    <a href="oldRadio.php">OLD RADIO</a>
    <a href="concerts.php">CONCERTS</a>
</div>

<?php
require_once('info/getInfo.php');


$albums = array(
    0 => "nevemind",
    1 => "to pimp a butterfly",
    2 => "",
    3 => "black sabbath",
    4 => "abbey road",
    5 => "zappa",
    6 => "mac demarco",
    7 => "bob dylan",
    8 => "IGOR",
    9 => "rumors",
    10 => 'Space Oddity',
    11 => 'velvet underground',
    12 => 'netural milk hotel',
    13 => 'joy division',
    14 => 'gorillaz');

$count = count($albums) - 1;
for ($i = 0; $i <= $count; $i++) {
    $info = getAlbumArt($albums[$i]);
    echo '
<picture>
    <img src=' . $info[3] .'>
</picture>';
}
?>

<?php
$wiki = getAlbumInfo('metallica', 'Master of Puppets');

if (array_key_exists('wiki', $wiki['album'])) {

    echo '<h2>' . (string)$wiki['album']['name'] . '</h2>';
    echo '<h3>' . (string)$wiki['album']['artist'] . '</h3>';


    echo '
    <div class="eatass">
    <img src=' . (getAlbumArt((string)$wiki['album']['name']))[3] . 'alt="Albumbanalbum">
    </div>';



    echo '<h3>Summary</h3>';
    echo '<p>' . (string)$wiki['album']['wiki']['summary'] . '</p>';
    echo '<h3>Content</h3>';
    echo '<p>' . (string)$wiki['album']['wiki']['content'] . '</p>';

} else {
    echo '<h2>Fuck you haha</h2>';
}

?>

</body>
</html>
