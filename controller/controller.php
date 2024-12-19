<?php
require_once "../module/module.php";
$product = $_POST["product"];
$desc = $_POST["descreption"];
$prix = $_POST["prix"];
addproduct($product,$desc,$prix);
?>