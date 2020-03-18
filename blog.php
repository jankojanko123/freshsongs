<?php require_once('info/getInfo.php');?>
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
$wiki = getAlbumInfo('Gorillaz', 'Gorillaz');

if (array_key_exists('wiki', $wiki['album'])) {

    echo '<h2>' . (string)$wiki['album']['name'] . '</h2>';
    echo '<h3>' . (string)$wiki['album']['artist'] . '</h3>';


    echo '
    <div class="eatass">
    <img src=' . (getAlbumArt((string)$wiki['album']['name']))[3] . 'alt="Albumbanalbum">
    </div>';

    /*
        //nevermind = PLdEiuPxBVWSjfPRLIdxP71365ef8jv5IL
        $playlist = 'PLdEiuPxBVWSjfPRLIdxP71365ef8jv5IL';


        echo '

        <iframe src="https://www.youtube.com/embed/videoseries?list=' . $playlist . '" </iframe>

        ';
    */

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
