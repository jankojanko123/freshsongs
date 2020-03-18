<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require 'style.php' ?>
    <title>freshyfreshy</title>
</head>
<body>

<h1>New Fresh Songs</h1>
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
$uri = 'spotify:playlist:1zheEQFBAwxMNG9Gxvz51g';

explode(':', $uri);
$id = (explode(':', $uri))[2];
$res = getSpotifySongs($id);

$itemCount = count($res['items']) - 1;

echo '<div class="playlist">

<iframe src="https://open.spotify.com/embed/playlist/1zheEQFBAwxMNG9Gxvz51g" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>

</div>';


for ($i =  $itemCount; $i >= 0; $i--) {

    $trackName = $res['items'][$i]['track']['name'];
    $artistName = $res['items'][$i]['track']['album']['artists'][0]['name'];
    $album = $res['items'][$i]['track']['album']['name'];
    $popularity = $res['items'][$i]['track']['popularity'];
    $trackId = $res['items'][$i]['track']['id'];

    if (array_key_exists(1, $res['items'][$i]['track']['album']['images'])){
        $pic = (string)$res['items'][$i]['track']['album']['images'][1]['url'];
    }
    //var_dump($pic);

    echo '
<div class="songs">
    
    <h8>'.$artistName.' - '.$trackName.'</h8><br>
    <h9>Popularity - '.$popularity.'</h9><br>

    <img src=' . $pic . '><br>
    
    <iframe src="https://open.spotify.com/embed/track/'.$trackId.'" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
</div>';
}


//spotify integration
//echo '<iframe src="https://open.spotify.com/embed/playlist/' . $id . '" width="298" height="378" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>';

?>

</body>
</html>



