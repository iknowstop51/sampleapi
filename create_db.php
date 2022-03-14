<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn)
{
  die("Sorry we failed to connect:".mysqli_connect_error().'<br>');
}
else {
  echo "Connection was Successful<br>";
}

$sql = "CREATE DATABASE sampleapi";
$result = mysqli_query($conn,$sql);
if ($result){
  echo "The db was created successfully<br>";
}
else {
  echo "The db was not created successfully because of this error ". mysqli_error($conn).'<br><br>';
}
?>