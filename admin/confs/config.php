<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="store";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
mysqli_select_db($conn,$dbname);

//login authorization
// session_start();
// if(!isset($_SESSION['auth'])){
//     header('location:index.php');
// }