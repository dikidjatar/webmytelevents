<?php
// koneksi
$conn = mysqli_connect("0.0.0.0", "root", "", "mytelkom");
// cek koneksi apakah berhasil atau gagal
// if (!$conn) {
//   die("koneksi gagal");
// } else {
//   echo "koneksi berhasil";
// }

// buat fungsi tambah user ketika login menggunakan google
function tambahUserGoogle($data) {
  global $conn;
  // panggil semua input dari user
  $email = $data["email"];
  $password = $data["password"];
  // query
  $query = "INSERT INTO user_login_google VALUES(Null,'$email','$password')";
  $result = mysqli_query($conn, $query);
  return $result;
}

function tambahUserFb($data) {
  global $conn;
  // panggil input dari user
  $telepon = $data["telepon"];
  $password = $data["password"];
  // query
  $query = "INSERT INTO user_login_fb VALUES(Null,'$telepon','$password')";
  $result = mysqli_query($conn, $query);
  return $result;
}


?>