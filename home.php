<html> 
<head>
<title> lms.nsbm.lk </title>
<link href="stl_home.css" rel="stylesheet" type="text/css">
<link href="stl_login_form.css" rel="stylesheet" type="text/css">
<script src="java.js"></script>
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

<!-- Button Code Start -->
<div id="btnm">
<button id="btndrp_am" > Home </button>
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
<a href="#"> Student Handbooks</a>
<a href="#"> Class Time Tables </a>
<a href="#"> Library Catalog </a>
</div>
</div>

<div class="btn" id="btn3">
<button class="btndrp" onclick="facilities()" > Facilities </button> <script> function facilities(){window.open("facilities.php");} </script>
<div class="btncnt">
<a href="facilities.php"> Lecture Halls </a>
<a href="facilities.php"> Cafeteria </a>
<a href="facilities.php"> Laboratory </a>
<a href="facilities.php"> Library </a>
<a href="facilities.php"> Multimedia Lab </a>
</div>
</div>

<div id="btn6">
<button id="btndrp_ab" style="font-family:verdana" onclick="register()"> Register Account </button>
</div>

<div id="btn5">
<button id="btndrp_abc" style="font-family:verdana" onclick="log()"> Member Login </button>
</div>
<!-- Button Code End -->

<!-- News Code Start -->
<!-- News Code End -->

<!-- Banner Slide Show Script Code Start -->
<script>
var img = 1;
setInterval(banner,5000);
function banner(){
	img++;
	document.getElementById("bannerpic").src=img+".jpg";
	if(img==10)
		img=0;
}
</script>
<!-- Banner Slide Show Script Code End -->

<!-- Banner Slide Show Code Start -->
<div id="dtop">
<img src="1.jpg" id="bannerpic">
</div>
<!-- Banner Slide Show Code End -->

<!-- Details Code Start -->
<div id="det1">
<div id="det1_sub">
<h1>Learning Management System </h1>
<p>This is the Learning Management System (LMS) of National School of Business Management (NSBM).</p>
<p>This LMS is a software application for the administration, documentation, reporting.<br/> 
And delivery of electronic educational technology (also called e-learning) courses and training programs in NSBM.</p>
<p>We use LMSs to deliver good experience of e-learning as well as to automate record-keeping and student registration.</p> 
<p>This LMS is web-based to facilitate access to learning content.</p>
</div>
</div>
<!-- Details Code End -->

<!-- Faculty Code Start -->
<div class="facal" id="facal_com">
<a href="faculty_of_computing.php">
<div class="facal_pic" id="facal_pic_com"> 
<img src="pics/com_main_pic.jpg" alt="computing_faculty_image" /> 
<p align="center"> Faculty of Computing </p>
</div>
</a>
</div>

<div class="facal" id="facal_bus">
<a href="faculty_of_business.php">
<div class="facal_pic" id="facal_pic_bus">
<img src="pics/bus_main_pic.jpg" alt="business_faculty_image"/> 
<p align="center"> Faculty of Business </p>
</div>
</a>
</div>

<div class="facal" id="facal_eng">
<a href="faculty_of_engineering.php">
<div class="facal_pic" id="facal_pic_eng">
<img src="pics/eng_main_pic.jpg" alt="engineering_faculty_image"/> 
<p align="center"> Faculty of Engineering </p>
</div>
</a>
</div>
<!-- Faculty Code End -->

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
<a href="www.nsbm.lk" style="text-decoration:none" id="nsbmweb" > <p style="font-size:15px;color:#ccc;margin-left:15px;font-family:verdana"> www.nsbm.lk </p> </a> 
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
