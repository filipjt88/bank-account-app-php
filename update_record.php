<?php

include('parts/init.php');

$id           = $_POST["id"];
$first_name   = $_POST["first_name"];
$last_name    = $_POST["last_name"];
$password     = $_POST["password"];
$email        = $_POST["email"];
$depozit      = $_POST["depozit"];
$credit_card  = $_POST["credit_card"];

$sql  = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', password = '$password', email = '$email', depozit = '$depozit', credit_card = '$credit_card' WHERE id = $id";
$query = mysqli_query($db,$sql);
header('Location: index.php');


