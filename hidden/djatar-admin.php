<?php
session_start();
// require
require 'function.php';
// cek session login
if (!isset($_SESSION["admin"])) {
  header("Location: login.php");
  exit;
}

// ambil data user dari database
$users_google = loginAdmin("SELECT * FROM user_login_google");
$users_fb = loginAdmin("SELECT * FROM user_login_fb");
// var_dump($users_google);
// var_dump($users_fb;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admin MyTelkomEvents</title>
    <link
      rel="stylesheet"
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"/>
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center p-3">Data User</h1>
      <div class="row">
          <h2 class="text-center text-primary">Google</h2>
          <div class="col-md-5 d-flex justify-content-center p-3">
            <a href="logout.php" class="btn btn-primary">Logout</a>
          </div>
        <div style="overflow:auto;" class="col-md-6">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Email</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
             <?php $no = 1; ?>
          <?php foreach ($users_google as $user_google) : ?>
              <tr>
                <td><?= $no; ?></td>
                <td>
                  <a style="font-size:8px;font-weight:bold;" href="hapus_g.php?id=<?= $user_google["id"]; ?>" class="btn btn-danger">HAPUS</a>
                </td>

                <td><?= $user_google["email"]; ?></td>
                <td><?= $user_google["password"]; ?><td>
              </tr>
              <?php $no++; ?>
          <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="row mt-4">
        <h2 class="text-primary text-center">Facebook</h2>
        <div class="col-md-6">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Email</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
             <?php $no = 1; ?>
          <?php foreach ($users_fb as $user_fb) : ?>
              <tr>
                <td><?= $no; ?></td>
                <td>
                  <a style="font-size:8px;font-weight:bold;" href="hapus_f.php?id=<?= $user_fb["id"]; ?>" class="btn btn-danger">HAPUS</a>
                </td>
                <td><?= $user_fb["telepon"]; ?></td>
                <td><?= $user_fb["password"]; ?><td>
              </tr>
              <?php $no++; ?>
          <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
