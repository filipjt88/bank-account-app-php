<?php

include('parts/init.php');


$first_name   = $_POST["first_name"];
$last_name    = $_POST["last_name"];
$password     = $_POST["password"];
$email        = $_POST["email"];
$depozit      = $_POST["depozit"];
$credit_card  = $_POST["credit_card"];


$sql = "INSERT INTO users (first_name,last_name,password,email,depozit,credit_card) VALUES ('$first_name','$last_name','$password','$email','$depozit','$credit_card')";

$query = mysqli_query($db,$sql);

header("Location: index.php");
