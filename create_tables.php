<?php
include('create_db.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sampleapi";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "CREATE TABLE `users` (
`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`fname` VARCHAR( 255 ) NOT NULL ,
`lname` VARCHAR( 255 ) NOT NULL ,
`email` VARCHAR( 255 ) NOT NULL
) ";
$result = mysqli_query($conn, $sql);
if ($result){
  echo "The table was created successfully<br>";
}
else {
  echo "The table was not created successfully because of this error ". mysqli_error($conn).'<br>';
}

$sql_table = "INSERT INTO `users` (
`fname` ,
`lname` ,
`email`
)
VALUES (
'Mohit', 'sharma', 'mohit123@gmail.com'
), (
'Rohit ', 'pal', 'rohit456@gmail.com'
), (
'Reema', 'Debnath', 'reemaash@gmail.com'
), (
'Narendra ', 'Singh', 'nandu650@gmail.com'
), (
'Shivang ', 'Gupta', 'shivang541@gmail.com'
);
";

$res = mysqli_query($conn,$sql_table);
if ($res){
  echo "The records was created successfully<br>";
}
else {
  echo "The records was not created successfully because of this error ". mysqli_error($conn).'<br><br>';
}

$sql_display = "SELECT * FROM users";
$res_display = mysqli_query($conn, $sql_display);
$json_array = array();
while($row = mysqli_fetch_assoc($res_display))
  {
       $json_array[] = $row;
  }
 echo json_encode($json_array);
?>

