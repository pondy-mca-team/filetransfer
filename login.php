<?php
include_once('conn.php');
$user_name= $_POST["user_name"];
$user_pass = $_POST["password"];
if(!empty($user_name) && !empty($user_pass))
{
$mysql_qry= "select * from my_data where username='$user_name' and password='$user_pass';";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result)>0)
{
echo " login successful ".$user_name."!!!!! ";
}
else
{
echo " login not successful..Please retry ";
}
}
else
{
echo "one or more field blank!!!!";
}
?>