<?php
$conn = mysqli_connect("0.0.0.0", "root", "", "mytelkom");
// require ke function
// require 'function.php';
session_start();
// cek jika user sudah login
if (isset($_SESSION["admin"])) {
  header("Location: djatar-admin.php");
}

// buat fungsi login ke admin
function loginAdmin($query) {
  global $conn;
  // query
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

$datas = loginAdmin("SELECT * FROM admin");

// cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
  foreach ($datas as $data) {
    // cek username
    if ($_POST["email"] == $data["email"]) {
      // cek password
      if ($_POST["password"] == $data["password"]) {
        $_SESSION["admin"] = true;
        header("Location: djatar-admin.php");
        exit;
      } 
    }
    $err = true;
  }
  
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container mt-5">
      <h2 class="text-center">Login Admin</h2>
      <div class="row mt-5">
       <div class="col-md-4 d-flex justify-content-center">
      <form action="" method="post">
        <?php if (isset($err)) : ?>
        <div id="emailHelp" class="form-text text-center text-danger pb-3">
            username / password salah!!
          </div>
          <?php endif ?>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Email address</label
          >
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            name="email"
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            name="password"
          />
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>
    </div>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
