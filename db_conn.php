<?php

$sname = "localhost";
$uname = "id17317927_abc";
$password = "Rahul@8690686474";

$db_name = "id17317927_mydb";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn)
{
	echo "Connection Failed ";
	exit;
	
}else
{
  echo "Connection Successful//->> Your File is Submitted TO Us //->> Thanks for giving Your Time ...";
}

?>