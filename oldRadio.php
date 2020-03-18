<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require_once 'style.php';
    require_once 'info/getInfo.php'
    ?>
    <title>freshyfreshy</title>
</head>
<body>

<h1>Old Radio</h1>
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
$playlistId = 'PLzVlnTZP79ikZFqDK2pmElTdPyRh4rdh3';

echo '
<div class="play">
    <iframe src="https://www.youtube.com/embed/videoseries?list='.$playlistId.'" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
</div>
';
?>
</body>
</html>

<?php

$playlistSongs = getPlaylistInfo($playlistId);//gets song names form yt
foreach ($playlistSongs as $item) {
    $songName = explode(' - ', $item);
    //print_r($songName);
    $art = getAlbumArt($songName[0]); // gets artwork from last.fm
    echo '
<picture>
    <img src=' . $art[3] . '>
</picture>';
}

/*
Notice: Undefined offset: 0 in C:\xampp\htdocs\www\FreshSongs\info\getInfo.php on line 14

Warning: count(): Parameter must be an array or an object that implements Countable in C:\xampp\htdocs\www\FreshSongs\info\getInfo.php on line 14
*/

?>


