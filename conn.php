<?php
  $servername = "localhost";
  $username = "root";
  $password = "janju";
  $dbname = "songs";

  $connSong = mysqli_connect($servername, $username, $password, $dbname);

  if (!$connSong) {
    die("Connection failed: ".mysqli_connect_error());
  }
