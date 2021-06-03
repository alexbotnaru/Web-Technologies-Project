<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "expert_auto";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname)){

    die("Nu s-a facut conectiunea cu baza de date");
}
?>