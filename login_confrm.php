<?php
//get values passe from form in login.php

$user=$_POST['u'];
$pass=$_POST['p'];

//connect to the server and select database

$link=mysqli_connect('localhost','root','','web_lms');

//query the database for user    

$result=mysqli_query($link,"SELECT user_name,pasword FROM user_details WHERE user_name='$user' AND pasword='$pass'") OR die("falied to query database".mysql_error());

$row=mysqli_fetch_array($result);

if($row[0]==$user && $row[1]==$pass && $user!=null && $pass!=null)
{
	echo"login success!!! Welcome ".$row['user_name'];
}
else
{
	echo"falied to login!!!";
}

?>


