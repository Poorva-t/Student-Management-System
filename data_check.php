<?php 


$host="localhost";

$user="root";

$password="";

$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);


if($data===false)
{
	die("connection error");
}

?>