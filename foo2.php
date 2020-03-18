<?php

  function getSong($mood){

    require 'C:\xampp\htdocs\oopsandbox\musicmood/conn.php';



    $sqlUrl = "SELECT url FROM ".$mood." ORDER BY RAND() LIMIT 1";

     $resultUrl = mysqli_query($connSong,$sqlUrl);
     $int = 0;

     if (mysqli_num_rows($resultUrl) > 0) {
         $rowUrl = mysqli_fetch_assoc($resultUrl);
         //echo "Song: " . $rowUrl["url"] . "<br>";
         $song = $rowUrl["url"];

         return $song;

     }
     else {
       echo "0 results";
     }
     mysqli_close($connSong);


}



  ?>
