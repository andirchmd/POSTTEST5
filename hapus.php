<?php
require "config.php";

$id = $_GET["id"];

$result = mysqli_query($db, "DELETE FROM member WHERE id = $id");
$resultfile = mysqli_query($db, "DELETE FROM file_member WHERE id = $id");

if($result && $resultfile){
  header('Location: tampil.php');
} else{
  header('Location: tampil.php');
}