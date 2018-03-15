<html> 
<head>
<title> Faculty of Computing Second Year </title>
<link href="stl_faculty.css" rel="stylesheet" type="text/css">
<link href="stl_login_form.css" rel="stylesheet" type="text/css">
<link href="stl_faculty_year.css" rel="stylesheet" type="text/css">
<script src="java.js"></script>
<script src="java_faculty_year.js"></script>
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
<div id="module_topic">
<p> Faculty of Computing Second Year Modules & Courses </p>
</div>
<!-- Module Topic Code End -->

<!-- Module 1 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:1 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=1";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#ff5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m1.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 1 Code End -->

<!-- Module Setting Code Start -->
<div class="module_setting">
<img src="pics/setting.png" alt="setting_icon" onclick="mod_set_open()" >
</div>
<!-- Module Setting Code End -->

<!-- Module Delete Code Start -->
<div class="module_delete">
<img src="pics/delete.png" alt="delete_icon" onclick="mod_del_open()">
</div>
<!-- Module Delete Code End -->

<!-- Module 2 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:2 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=2";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m2.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 2 Code End -->

<!-- Module 3 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:3 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=3";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m3.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 3 Code End -->

<!-- Module 4 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:4 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=4";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m4.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 4 Code End -->

<!-- Module 5 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:5 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=5";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m5.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 5 Code End -->

<!-- Module 6 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:6 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=6";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m6.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 6 Code End -->

<!-- Module 7 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:7 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=7";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m7.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 7 Code End -->

<!-- Module 8 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:8 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=8";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m8.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 8 Code End -->

<!-- Module 9 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:9 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=9";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m9.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 9 Code End -->

<!-- Module 10 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:10 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=10";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m10.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 10 Code End -->

<!-- Module 11 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:11 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=11";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m11.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 11 Code End -->

<!-- Module 12 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:12 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=12";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m12.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 12 Code End -->

<!-- Module 13 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:13 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=13";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m13.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 13 Code End -->

<!-- Module 14 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:14 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=14";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m14.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 14 Code End -->

<!-- Module 15 Code Start -->
<div class="module">
<p style="float:left;margin-left:20px;margin-top:10px;color:#ff5500;font-family:verdana;font-weight:bold"> No:15 </p>
<?php
$link=mysqli_connect('localhost','root','','web_lms');
$a="SELECT module_code,module_name FROM modules_com_2 WHERE module_no=15";
$sql=mysqli_query($link,$a);
$data=mysqli_fetch_array($sql);
echo '<p style="font-family:verdana;float:left;margin-left:30px;margin-top:10px;color:#FF5500">'.$data[0].'</p>';
echo '<p style="text-align:center;font-family:verdana;margin-top:10px"><a href="computer_year2_m15.php" style="color:#FF5500;text-decoration:none">'.$data[1].'</a></p>';
?>
</div>
<!-- Module 15 Code End -->

<!-- Modules Setting Division Code Start -->
<div id="mod_set_bak">
<div id="mod_set_form">
<form action="com_2_module_setting.php" method="POST" >
<p> To Do The Settings Please Enter Username & Password </p>
<br/>
<label> Username </label>
<br/>
<input type="text" placeholder="Username Please..." id="us" name="us" >
<br/>
<label> Password </label>
<br/>
<input type="password" placeholder="Password Please..." id="ps" name="ps" >
<br/>
<p> Do Your Settings </p>
<br/>
<label> Module No </label>
<br/> 
<input type="text" placeholder="Module No" id="ns" name="ns" >
<br/>
<label> Module Code </label>
<br/> 
<input type="text" placeholder="Module Code" id="modcode" name="modcode" >
<br/>
<label> Module Name </label>
<br/>
<input type="text" placeholder="Module Name" id="modname" name="modname" >
<br/>
<label> Degree Type </label>
<br/>
<input type="text" placeholder="Degree Type" id="type" name="type" >
<br/>
<input type="submit" value="Done">
<input type="button" value="Cancel" onclick="mod_set_close()" >
</form>
</div>
</div>
<!-- Modules Setting Division Code Start -->

<!-- Modules Delete Division Code Start -->
<div id="mod_del_bak">
<div id="mod_del_form">
<form action="com_2_module_delete.php" method="POST" >
<p> To Delete This Please Enter Username & Password </p>
<br/>
<label> Username </label>
<br/>
<input type="text" placeholder="Username Please..." id="us" name="us" >
<br/>
<label> Password </label>
<br/>
<input type="password" placeholder="Password Please..." id="ps" name="ps" >
<br/>
<label> Module No </label>
<br/>
<input type="text" placeholder="Module No Please..." id="ns" name="ns" >
<br/>
<p> Are Your Sure...? </p>
<br/>
<input type="submit" value="YES">
<input type="button" value="NO" onclick="mod_del_close()" >
</form>
</div>
</div>
<!-- Modules Delete Division Code End -->

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
