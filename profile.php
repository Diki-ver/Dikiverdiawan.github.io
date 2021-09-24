<?php
    session_start();
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/profile.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Profile</title>
</head>
<body>
  <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
      <div class="card p-4">
          <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="" height="100" width="100" /></button> <span class="name mt-3"><?php echo $_SESSION["username"]; ?></span>
              
              
              <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button></div>              
          </div>
      </div>
  </div>
</body>
</html>