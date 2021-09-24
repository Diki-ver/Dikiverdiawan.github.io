<?php
  session_start();
  include('cn.php');

  $password = $_POST['password'];
  $username = $_POST['username'];

  $sql = mysqli_query($koneksi, "SELECT * FROM users");

  if(mysqli_num_rows($sql)>0) {
    while($data = mysqli_fetch_array($sql)) {
      $id = $data["id"];
      if ($username == $data["username"]) {
        if ($password == $data["password"]) {
          echo 1;
          $_SESSION["login"] = true;
          $_SESSION["username"] = $data["username"];
        }
      }
    }
  }
?>