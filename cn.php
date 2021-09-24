<?php
  $dbhost = 'localhost';
  $database = 'tugas';
  $dbuser = 'root';
  $dbpass = '';
  $koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $database);

  if(! $koneksi ) {
    die('Gagal Koneksi: ' . mysqli_error());
  }
  
?>