<?php
/**
 * Created by PhpStorm.
 * User: abhishek
 * Date: 27-04-17
 * Time: 12:23 PM
 */


if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password']) )
{
    $name=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    echo "name and pass set".$name.$pass.$email;
}
else
{
    echo "Invalid Credentials";
    echo "<script> window.location = 'index.php';</script>";
}

include 'connection.php';
$query = "INSERT INTO `register`(`username`, `email`, `password`) VALUES ('$name','$email','$pass')";
mysqli_query($conn, $query);
echo 'Registered Successfully';
session_start();
$_SESSION["name"]=$name;
$_SESSION["email"]=$email;
mkdir($email);
$newdir='Photos';
mkdir($email.'/'.$newdir, 0777, true);
$newdir='Music';
mkdir($email.'/'.$newdir, 0777, true);
$newdir='Documents';
mkdir($email.'/'.$newdir, 0777, true);
$newdir='Others';
mkdir($email.'/'.$newdir, 0777, true);
// Close the connection
mysqli_close($conn);
echo "<script> window.location = 'DropBox.php';</script>";
?>