<?php
if (!isset($_SESSION["admin"])) {
  header("Location: login.php");
}
//connect
$conn = mysqli_connect("0.0.0.0", "root", "", "mytelkom");
// cek koneksi
// if (!$conn) {
//   die("koneksi gagal");
// }

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

// fungsi hapus data
 function hapusDataGoogle($id) {
   global $conn;
   mysqli_query($conn, "DELETE FROM user_login_google WHERE id = $id");
   return mysqli_affected_rows($conn);
 }
 
 function hapusDataFb($id) {
   global $conn;
   mysqli_query($conn, "DELETE FROM user_login_fb WHERE id = $id");
   return mysqli_affected_rows($conn);
 }



?>