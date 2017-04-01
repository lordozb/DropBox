<?php
if (isset($_POST['user']) and isset($_POST['pass']) )
{
    $name=$_POST['user'];
    $pass=$_POST['pass'];
    //echo "name and pass set".$name.$pass;
}
else
{
    echo "Invalid Credentials";
    echo "<script> window.location = 'index.php';</script>";
}

//echo $name . " ".$pass;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DropBox";

//Create the connection

$conn = mysqli_connect($servername,$username,$password,$dbname) or die("Some error occurred during connection " . mysqli_error($conn));

// Write query

$query = "SELECT name,password FROM Login";

// Execute the query.
$flag=0;
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result))
{   if($row[0]==$name and $row[1]==$pass){
   // location.href(Dropbox.html);
//    echo "correct";
    $flag=1;
    echo "<script> window.location = 'Dropbox.html';</script>";
    break;
}
}

// Close the connection
mysqli_close($conn);
if($flag==0) {
    echo "<script> window.location = 'index.php';</script>";
}
?>

