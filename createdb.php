<?php
$server="localhost";
$username="root";
$password="";

$conn= new mysqli($server,$username,$password);
if($conn->connect_error){
    die("Not conected to database". $conn->connect_error);
}
// echo "Alhamdulillah DB connected";

$sql="Create database dbfinal";

if ($conn->query($sql)===TRUE){
    echo"Database created";
}

echo "done"
$conn->close();
?>