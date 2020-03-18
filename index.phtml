<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require 'style.php' ?>
    <title>freshyfreshy</title>
</head>
<body>

<h1>Fresh Songs</h1>
<div class="hyperlinks">
    <a href="index.php">FRONT PAGE</a>
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
$uri = 'spotify:playlist:1zheEQFBAwxMNG9Gxvz51g';
explode(':', $uri);
$id = (explode(':', $uri))[2];
$res = getSpotifySongs($id);
echo '
<div class="art">';
for ($i = 0; $i <= count($res['items']) - 1; $i++) {
    $name = $res['items'][$i]['track']['name'];
    $popularity = $res['items'][$i]['track']['popularity'];

    if (array_key_exists(1, $res['items'][$i]['track']['album']['images'])){
        $pic = (string)$res['items'][$i]['track']['album']['images'][1]['url'];
    }
    //var_dump($pic);

    echo '
<picture>
    <img src=' . $pic . '>
</picture>
';
}
echo '</div>';

//spotify integration
//echo '<iframe src="https://open.spotify.com/embed/playlist/' . $id . '" width="298" height="378" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>';

?>

</body>
</html>



