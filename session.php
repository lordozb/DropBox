<?php
/**
 * Created by PhpStorm.
 * User: abhishek
 * Date: 01-04-17
 * Time: 05:06 PM
 */
session_start();
if(array_key_exists('name',$_SESSION) && !empty($_SESSION['name'])) {
}else{
        echo "<script> window.location = 'index.php';</script>";
}
?>