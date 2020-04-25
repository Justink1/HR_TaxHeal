<?php 
include_once 'db_connec_resume.php'; 
$name = $_POST["name"]; 
$email = $_POST["email"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$city = $_POST["city"];
$f1 = $_POST["Field1"];
$f2 = $_POST["Field2"];
$f3 = $_POST["Field3"];
$f4 = $_POST["Field4"];
$f5 = $_POST["Field5"];
$f6 = $_POST["Field6"];
$f7 = $_POST["Field7"];
$f8 = $_POST["Field8"];
$f9 = $_POST["Field9"];
$f10 = $_POST["Field10"];
$f11 = $_POST["Field11"];
$f12 = $_POST["Field12"];
$f13 = $_POST["Field13"];
$f14 = $_POST["Field14"];
$f15 = $_POST["Field15"];

//database connection
if($conn->connect_error)
{
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("INSERT INTO table1(name,email,gender,address,city,f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,f11,f12,f13,f14,f15) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssssssssssssssss",$name,$email,$gender,$address,$city,$f1,$f2,$f3,$f4,$f5,$f6,$f7,$f8,$f9,$f10,$f11,$f12,$f13,$f14,$f15);
	$stmt->execute();
	echo "Form was successfully filled!";
	$stmt->close();
	$conn->close();
}
?>
