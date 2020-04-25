<?php
include_once 'db_connec_admin.php'; 
//Extract data:
$login = $_POST["login"];
$password = $_POST["password"];

//To avoid SQL injection:
$login = stripcslashes($login);
$password = stripcslashes($password);

//Query the database:
$sql = 'SELECT * FROM table1';
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
if($row['login']==$login && $row['password']==$password)
{
	include '../applications.php';
}
else
{
	echo "Incorrect Credentials";
}
?>
