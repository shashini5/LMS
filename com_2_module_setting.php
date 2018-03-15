<?php
 //get values passe from form in module settings

$user=$_POST['us'];
$pass=$_POST['ps'];
$no=$_POST['ns'];
$a=$_POST['modcode'];
$b=$_POST['modname'];
$c=$_POST['type'];
//connect to the server and select database

$link=mysqli_connect('localhost','root','','web_lms');

//query the database for user

$result=mysqli_query($link,"SELECT user_name,pasword FROM admin_details WHERE user_name='$user' AND pasword='$pass'") OR die("falied to query database".mysql_error());

$row=mysqli_fetch_array($result);

if($row[0]==$user && $row[1]==$pass && $user!=null && $pass!=null)
{
	$ins= "INSERT INTO modules_com_2 (module_no,module_name,module_code,degree_type) VALUES('$no','$b','$a','$c')";
	$insqury=mysqli_query($link,$ins);
	//Response
	if($insqury==1)
	{
		echo '<h3>Data Stored!</h3>';
	}
	else
	{
		echo 'Error...Try Again';
	}
}
else
{
	echo"falied to do the settings!!!";
}
?>


