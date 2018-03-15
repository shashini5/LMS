<?php
 //get values passe from form in module settings
$user=$_POST['us'];
$pass=$_POST['ps'];
$no=$_POST['ns'];
//connect to the server and select database

$link=mysqli_connect('localhost','root','','web_lms');

//query the database for user

$result=mysqli_query($link,"SELECT user_name,pasword FROM admin_details WHERE user_name='$user' AND pasword='$pass'") OR die("falied to query database".mysql_error());

$row=mysqli_fetch_array($result);

if($row[0]==$user && $row[1]==$pass && $user!=null && $pass!=null)
{
	$del= "DELETE FROM modules_com_1 WHERE module_no='$no'";
	$insqury=mysqli_query($link,$del);
	//Response
	if($insqury==1)
	{
		echo '<h3>Delete Successfuly!</h3>';
	}
	else
	{
		echo 'Error...Try Again';
	}
}
else
{
	echo"falied to do the delete!!!";
}
?>


