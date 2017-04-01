<?php
include_once('conn.php');
//inserting records into database
$name= $_POST["name"];
$surname= $_POST["surname"];
$age= $_POST["age"];
$username= $_POST["username"];
$password = $_POST["password"];
if(!empty($username) && !empty($password) && !empty($age) && !empty($name) && !empty($surname))
{
$query=" INSERT INTO MY_DATA (name,surname,age,username,password) VALUES('$name','$surname','$age','$username','$password')";
$result = mysqli_query($conn, $query);
if($result)
{
	echo "Registeration Successfull!.....Please login ";
}
else
{
	echo "not sucessful";
}
}
else
{
	echo "one or more field blank!!!!!";
}
mysqli_close($conn);
?>