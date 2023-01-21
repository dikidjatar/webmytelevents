<?php
if (!isset($_SESSION["admin"])) {
  header("Location: login.php");
}
require 'function.php';

$id = $_GET["id"];

if (hapusDataFb($id) > 0) {
  header("Location: login.php");
}
?>