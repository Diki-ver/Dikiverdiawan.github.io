<?php
  include('cn.php');
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = 2;

  $cek = mysqli_query($koneksi, "SELECT * FROM users");
  $temp = mysqli_num_rows($cek);
  $ul = 0;
  $i = 0;

  if(mysqli_num_rows($cek)>0) {
    while($data = mysqli_fetch_array($cek)) {
      if ($data["username"] == $username) {
        echo 0;
        exit();
      } else if ($data["username"] != $username) {
        $ul = 1;
      }
      $i++;
    }
  }

  if ($ul == 1 && $i == $temp) {
    $id = $temp + 1;
    $query = "INSERT INTO users VALUES ('$id', '$username', '$password', '$level')";
    $sql = mysqli_query($koneksi, $query);
    echo 1;
  }

?>