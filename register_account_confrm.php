<?php

 $user = $_POST['un'];
 $pass = $_POST['ps2'];
 $name1 = $_POST['fn'];
 $name2 = $_POST['ln'];
 $email = $_POST['email'];
 $no = $_POST['in'];
 $ct = $_POST['city'];
 $state = $_POST['cuntry'];
 
 $ins_data="INSERT INTO user_details (first_name,last_name,email_address,index_number,city_town,state,user_name,pasword) VALUES ('$name1','$name2','$email','$no','$ct','$state','$user','$pass')";

 $link=mysqli_connect('localhost','root','','web_lms');

 $run=mysqli_query($link,$ins_data);
 
 if($run==1)
 {
	 echo '<h1> data stored </h1>';
 }	 
 else
 {
	 echo'<h1> not stored </h1>';
 }
 
  var_dump($ins_data);
?>