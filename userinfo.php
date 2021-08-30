<?php

$con = mysqli_connect('localhost', 'id17317927_abc','Rahul@8690686474', 'id17317927_mydb');

if ($con)
{
	echo "Connection Succcessful // ->>";
	
	echo " Your Information is Submitted //->> ";
	
	echo " Thanks for Contact us ...";
	
}else
{
	echo " No  Connection";
}


mysqli_select_db($con, 'id17317927_mydb'); 

$user = $_POST['user'];
$email = $_POST['email'];
$city = $_POST['city'];
$subject = $_POST['subject'];

$query =  " insert into userinfo ( User , Email , City , Subject ) values ( '$user','$email' ,'$city ','$subject ')";


mysqli_query($con, $query );


header('location:index.php');


?>