<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DropBox";
$conn = mysqli_connect($servername,$username,$password,$dbname) or die("Some error occurred during connection " . mysqli_error($conn));

?>