<html> 
<head>
<title> Faculty of Business Third Year </title>
<link href="stl_faculty.css" rel="stylesheet" type="text/css">
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
