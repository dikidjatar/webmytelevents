<?php
if (!isset($_SESSION["admin"])) {
  header("Location: login.php");
}

require 'function.php';

$id = $_GET["id"];

if (hapusDataGoogle($id) > 0) {
  header("Location: djatar-admin.php");
}
?>