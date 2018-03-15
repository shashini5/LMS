<?php
//get values passe from form in module settings

$user=$_POST['us'];
$pass=$_POST['ps'];
$no=$_POST['ns'];
$name=$_POST['ln'];
$a=$_POST['type'];
//connect to the server and select database
$link=mysqli_connect('localhost','root','','web_lms');

//query the database for user
$result=mysqli_query($link,"SELECT user_name,pasword FROM admin_details WHERE user_name='$user' AND pasword='$pass'") OR die("falied to query database".mysql_error());
$ins="INSERT INTO les (lesson_no,lesson_name,file_type) VALUES ('$no','$name','$a')";
mysqli_query($link,$ins);
$row=mysqli_fetch_array($result);
$fname=$_FILES["file1"]["name"];
$ftemp=$_FILES["file1"]["tmp_name"];
if($row[0]==$user && $row[1]==$pass && $user!=null && $pass!=null)
{
if($a=='zip')
{
	if($fname!='lesson1.zip')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo'<br> succes fully moved';
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='jpg')
{
	if($fname!='lesson1.jpg')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='png')
{
	if($fname!='lesson1.png')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='exe')
{
	if($fname!='lesson1.exe')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='docx')
{
	if($fname!='lesson1.docx')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='pdf')
{
	if($fname!='lesson1.pdf')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='pptx')
{
	if($fname!='lesson1.pptx')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='wmv')
{
	if($fname!='lesson1.wmv')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='mp3')
{
	if($fname!='lesson1.mp3')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='mp4')
{
	if($fname!='lesson1.mp4')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='html')
{
	if($fname!='lesson1.html')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='css')
{
	if($fname!='lesson1.css')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='txt')
{
	if($fname!='lesson1.txt')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='php')
{
	if($fname!='lesson1.php')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}
else if($a=='js')
{
	if($fname!='lesson1.js')
{
	echo"please change the file name to : lesson1 or check the file type";
}		
else
{
	$flag=move_uploaded_file($ftemp,"C:xampp/htdocs/lms/files/computer/year1/module_1/$no/$fname");
	if($flag)
	{
		echo"succes fully moved";
	}
	else
	{
		echo"coudn't move..";
	}
}
}

}
else
{
	echo"falied to do the Uploads!!!";
}
?>


