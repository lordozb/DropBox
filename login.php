<?php
if (isset($_POST['username']) and isset($_POST['password']) )
{
    $name=$_POST['username'];
    $pass=$_POST['password'];
    //echo "name and pass set".$name.$pass;
}
else
{
    echo "Invalid Credentials";
    echo "<script> window.location = 'index.php';</script>";
}

include 'connection.php';
$query = "SELECT name,password FROM Login";
$result = mysqli_query($conn, $query);
$flag=0;

while($row = mysqli_fetch_array($result))
{   if($row[0]==$name and $row[1]==$pass){
   // location.href(Dropbox.html);
//    echo "correct";
    $flag=1;
    session_start();
    $_SESSION["name"]=$name;
    echo "<script> window.location = 'DropBox.php';</script>";


}
}

// Close the connection
mysqli_close($conn);
if($flag==0) {
    echo "<script> window.location = 'index.php';</script>";
}

?>

