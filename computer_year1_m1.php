<html> 
<head>
<title> Faculty of Computing First Year Module 1 </title>
<link href="stl_faculty.css" rel="stylesheet" type="text/css">
<link href="stl_login_form.css" rel="stylesheet" type="text/css">
<link href="stl_faculty_year_lesson.css" rel="stylesheet" type="text/css">
<script src="java.js"></script>
<script src="java_faculty_year_lesson.js"></script>
</head>
<body>

<!-- LOGIN FORM CODE START -->
<div id="b">

<form action="login_confrm.php" method="POST">

<div id="a">

<div id="a_top">
<p> LOGIN TO YOUR ACCOUNT </p>
</div>

<div id="a_con">
<img src="pic.png" alt="pic1">
<br/>
<br/>
<label class="u"> Username </label>
<br/>
<input type="text" placeholder="Username" id="u" name="u" >
<br/>
<label class="u"> Password </label>
<br/>
<input type="password" placeholder="Password" id="p" name="p" >
<br/>
<input type="submit" value="LOGIN">
</div>

<div id="a_bot">
<input type="button" value="Cancle" onclick="can()">
<p> Forgot <a href="#">password?</a> </p>
</div>

</div>

</form>

</div>
<!-- LOGIN FORM CODE END -->
<!-- Button Code Start -->
<div id="btnm">
<button id="btndrp_am" onclick="home()"> Home </button> <script> function home() {window.open("home.php");} </script> 
</div>

<div class="btn" id="btn1">
<button class="btndrp"> Faculties </button>
<div class="btncnt">
<a href="faculty_of_computing.php"> Faculty of computing </a>
<a href="faculty_of_business.php"> Faculty of business </a>
<a href="faculty_of_engineering.php"> Faculty of engineering </a>
</div> 
</div>

<div class="btn" id="btn2">
<button class="btndrp"> About Us </button>
<div class="btncnt">
<a href="#"> link1 </a>
<a href="#"> link2 </a>
<a href="#"> link3 </a>
</div>
</div>

<div class="btn" id="btn3">
<button class="btndrp" onclick="facilities()" > Facilities </button> <script> function facilities(){window.open("facilities.php");}</script>
<div class="btncnt">
<a href="#"> Lecture Halls </a>
<a href="#"> Cafeteria </a>
<a href="#"> Laboratory </a>
<a href="#"> Library </a>
<a href="#"> Multimedia Lab </a>
</div>
</div>

<div id="btn6">
<button id="btndrp_ab" style="font-family:verdana" onclick="register()"> Register Account </button>
</div>

<div id="btn5">
<button id="btndrp_abc" style="font-family:verdana" onclick="log()"> Member Login </button>
</div>
<!-- Button Code End -->
<!-- LOGIN FORM display and close scripts START -->
<script>
function log(){
 var x = document.getElementById("b");
 x.style.display="block";
}
function can(){
 var y = document.getElementById("b");
 y.style.display="none";
}
</script>
<!-- LOGIN FORM display and close scripts END -->

<!-- Contant Code Start -->

<!-- Module Topic Code Start -->
<div id="lesson_topic">
<p style="font-weight:bold" > Faculty of Computing First Year </p> 
<?php $link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_name FROM modules_com_1 WHERE module_no=1";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:century gothic;margin-bottom:15px;color:#FF2E00">'.$data[0].'</p>'; 
?> 
</div>
<!-- Module Topic Code End -->

<!-- lesson 1 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:1 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/1" download="lesson1" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=1";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- lesson 1 Code End -->

<!-- Module Setting Code Start -->
<div class="lesson_upload">
<img src="pics/upload_icon.jpg" alt="setting_icon" onclick="les_up_open()" >
</div>
<!-- Module Setting Code End -->

<!-- Module Delete Code Start -->
<div class="lesson_remove">
<img src="pics/remove.png" alt="delete_icon" onclick="les_rem_open()">
</div>
<!-- Module Delete Code End -->

<!-- Module 2 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:2 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/2" download="lesson2" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=2";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 2 Code End -->

<!-- Module 3 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:3 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/3" download="lesson3" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=3";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 3 Code End -->

<!-- Module 4 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:4 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/4" download="lesson4" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=4";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 4 Code End -->

<!-- Module 5 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:5 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/5" download="lesson5" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=5";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 5 Code End -->

<!-- Module 6 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:6 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/6" download="lesson6" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=6";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 6 Code End -->

<!-- Module 7 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:7 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/7" download="lesson7" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=7";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 7 Code End -->

<!-- Module 8 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:8 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/8" download="lesson8" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=8";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 8 Code End -->

<!-- Module 9 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:9 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/9" download="lesson9" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=9";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 9 Code End -->

<!-- Module 10 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:10 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/10" download="lesson10" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=10";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 10 Code End -->

<!-- Module 11 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:11 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/11" download="lesson11" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=11";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 11 Code End -->

<!-- Module 12 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:12 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/12" download="lesson12" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=12";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 12 Code End -->

<!-- Module 13 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:13 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/13" download="lesson13" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=13";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 13 Code End -->

<!-- Module 14 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:14 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/14" download="lesson14" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=14";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 14 Code End -->

<!-- Module 15 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> File No:15 </p>
<a href="C:/xampp/htdocs/lms/files/computer/year1/module_1/15" download="lesson15" title="Download this Lesson" >
<?php
 $sel="SELECT lesson_name FROM les WHERE lesson_no=15";
 $con=mysqli_connect('localhost','root','','web_lms');
 $data=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($data);
 echo"$row[0]";
?></a>
</div>
<!-- Module 15 Code End -->

<!-- Lesson Upload Division Code Start -->
<div id="les_up_bak">
<div id="les_up_form">
<form action="les_file_upload.php" method="POST" enctype="multipart/form-data" >
<p> To Upload The Files Please Enter Username & Password </p>
<br/>
<label> Username </label>
<br/>
<input type="text" placeholder="Username Please..." id="us" name="us" >
<br/>
<label> Password </label>
<br/>
<input type="password" placeholder="Password Please..." id="ps" name="ps" >
<br/>
<p> Upload The File </p>
<br/>
<label> File No </label>
<br/> 
<input type="text" placeholder="File No" id="ns" name="ns" >
<br/>
<label> Lesson Name </label>
<br/>
<input type="text" placeholder="Lesson Name" id="ln" name="ln" >
<br/>
<label> File To Be Upload </label>
<br/> 
<input type="file" name="file1" >
<br/>
<label> Select File Type </label>
<select id="type" name="type" >
<option> zip </option>
<option> jpg </option>
<option> png </option>
<option> exe </option>
<option> docx </option>
<option> pdf </option>
<option> pptx </option>
<option> wmv </option>
<option> mp3 </option>
<option> mp4 </option>
<option> html </option>
<option> css </option>
<option> txt </option>
<option> php </option>
<option> js </option>
</select>
<br/>
<input type="submit" value="Done">
<input type="button" value="Cancel" onclick="les_up_close()" >
</form>
</div>
</div>
<!-- Lesson Upload Division Code End -->

<!-- Lesson Delete Division Code Start -->
<div id="les_rem_bak">
<div id="les_rem_form">
<form action="lesson_remove.php" method="POST" >
<p> To Remove The Files Please Enter Username & Password </p>
<br/>
<label> Username </label>
<br/>
<input type="text" placeholder="Username Please..." id="us" name="us" >
<br/>
<label> Password </label>
<br/>
<input type="password" placeholder="Password Please..." id="ps" name="ps" >
<br/>
<label> Lesson No </label>
<br/>
<input type="text" placeholder="Lesson No Please..." id="ns" name="ns" >
<br/>
<p> Are Your Sure...? </p>
<br/>
<input type="submit" value="YES">
<input type="button" value="NO" onclick="les_rem_close()" >
</form>
</div>
</div>
<!-- Lesson Delete Division Code End -->

<!-- Contant Code End -->

<!-- Bottom Code Start -->
<div id="dbotom">

<div class="heading" id="h1">
<p style="font-size:20px;color:#ffffff;font-family:verdana"> Quick Links </p>
<a href="home.php" style="text-decoration:none"> <p style="font-size:15px;color:#ccc;margin-left:15px;font-family:verdana"> Home </p> </a>
<a href="#" style="text-decoration:none"> <p style="font-size:15px;color:#ccc;margin-left:15px;font-family:verdana"> About Us </p> </a>
<a href="#" style="text-decoration:none"> <p style="font-size:15px;color:#ccc;margin-left:15px;font-family:verdana"> Facilities </p> </a>
<a href="#" style="text-decoration:none"> <p style="font-size:15px;color:#ccc;margin-left:15px;font-family:verdana"> News & Events </p> </a>
<a href="#" style="text-decoration:none"> <p style="font-size:15px;color:#ccc;margin-left:15px;font-family:verdana"> aaaa </p> </a>
</div>

<div class="heading" id="h2">
<p style="font-size:20px;color:#ffffff;font-family:verdana"> Contact Us </p>
<p style="font-size:15px;color:#ccc;margin-left:15px;font-family:verdana"> Address: 309, High Level Road, Colombo 05, Sri Lanka.</p> 
<p style="font-size:15px;color:#ccc;margin-left:15px;font-family:verdana"> Email: info@nsbm.lk </p>
<p style="font-size:15px;color:#ccc;margin-left:15px;font-family:verdana"> Contact No: +94(11) 544 5000 </p>
<p style="font-size:15px;color:#ccc;margin-left:15px;font-family:verdana"> Fax No: +94(11) 544 5007 </p>
</div>

<div class="heading" id="h3">
<p style="font-size:20px;color:#ffffff;font-family:verdana"> Visit Us </p>
<a href="www.nsbm.lk" style="text-decoration:none"> <p style="font-size:15px;color:#ccc;margin-left:15px;font-family:verdana"> www.nsbm.lk </p> </a> 
<div id="h4">
<p style="font-size:20px;color:#ffffff;font-family:verdana"> Socilized with Us </p>
<a href="#" style="text-decoration:none;margin-left:15px"> <img class="icon" src="pics/fb.png" alt="facebook_icon" style="width:30px;border-radius:50%"> </a>
<a href="#" style="text-decoration:none"> <img class="icon" src="pics/g+.png" alt="google_plus_icon" style="width:30px;border-radius:60%"> </a>
<a href="#" style="text-decoration:none"> <img class="icon" src="pics/twi.png" alt="twitter_icon" style="width:30px;border-radius:50%"> </a>
<a href="#" style="text-decoration:none"> <img class="icon" src="pics/you.jpg" alt="youtube_icon" style="width:30px;border-radius:50%"> </a>
<p style="font-size:12px;color:#ccc;font-family:verdana"> Powered By </p>
<a href="http://validator.w3.org/check?uri=referer" style="text-decoration:none" >
<img class="valid" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
</a>
<a href="https://jigsaw.w3.org/css-validator/check/referer" style="text-decoration:none" >
<img class="valid" style="border:0;width:88px;height:31px" src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" />
</a>
</div>
</div>
</div>
<div style="float:left">
<p style="font-size:15px;color:#ccc;margin-left:450px;font-family:verdana"> Copyright &copy 2016 National School of Business Management.</p>
<p style="font-size:15px;color:#ccc;margin-left:450px;font-family:verdana;text-align:center"> All Rights Reserved. </p>
</div>
<!-- Bottom Code End -->
</body>
</html>
