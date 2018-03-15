<html> 
<head>
<title> Facilities of NSBM </title>
<link href="stl_facilities.css" rel="stylesheet" type="text/css">
<link href="stl_login_form.css" rel="stylesheet" type="text/css">
<link href="stl_facilities_part2.css" rel="stylesheet" type="text/css">
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
<a href="#"> Student Handbooks </a>
<a href="#"> Class Time Tables</a>
<a href="#"> Library Catalog </a>
</div>
</div>

<div class="btn" id="btn3">
<button class="btndrp"> Facilities </button>
<div class="btncnt">
<a href="#lecture"> Lecture Halls </a>
<a href="#cafe"> Cafeteria </a>
<a href="#lab"> Laboratory </a>
<a href="#lib"> Library </a>
<a href="#mul"> Multimedia Lab </a>
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
<div id="lecture">
<p style="text-align:center;padding-top:0px;padding-bottom:0px;color:red;font-size:18px;font:Arial"> <u> <i> Lecture Halls </i> </u> </p>
<p style="font-size:18px;font:Arial">
Our institute has several lecture halls.<br/> 
All the faculties will have state of the art lecture halls,<br/>
ultramodern computer labs while over 50 degree programmes from a range of disciplines will gear the NSBM graduates to cater to the demands of the modern corporate world.
All lecture halls are equipped to cater to the latest teaching and learning methods that are most convenient to our students.
</p>
</div>
<div id="cafe">
<p style="text-align:center;padding-top:0px;padding-bottom:0px;color:red;font-size:22px;font:Arial"> <u> <i> Sports </i> </u> </p>
<p style="font-size:22px;font:Arial">NSBM Green University Town Sports has something for every student ensuring that the students have the best sport experience in Sri Lanka. 
A sophisticated recreation center is open for all students with its modern gymnasium, swimming pool, sports ground and many other facilities.
<br/>
 Several Sports clubs have been initiated inside the University to offer unique and exciting opportunities for students to participate in competitions and also to stay physically fit as an undergraduate.<br/>
</div>
<div id="lab">
	<p style="text-align:center;padding-top:0px;padding-bottom:0px;color:red;font-size:18px;font:Arial"> <u> <i> Laboratory </i> </u> </p>
<p style="font-size:18px;font:Arial">
NSBM Green University Town is a thriving network of students, staff and alumni. With the aim of developing the soft skills of the students, a range of activities have been initiated through various societies and clubs.<br/>

University clubs and societies<br/>
Activity based clubs are Media Club, Eastern Music Club, Western Music Club, Drama Club, Dancing Club, Explorers’ Club, Green Task Force, Nature & Wild Life Club, Photography Club, Literature Club, Graphics and Painting Club, Debate Club
Community Service Club, Aerobics Club, Religious societies, Buddhist Society, Hindu Society, Islamic Society, Catholic Society, International Clubs, Rotaract Club, LEO Club, AIESEC, Gavel Club, Toastmaster Club
</p>
</div>
<div id="lib">
	<p style="text-align:center;padding-top:0px;padding-bottom:0px;color:red;font-size:22px;font:Arial"> <u> <i> Multimedia Lab </i> </u> </p>
<p style="font-size:22px;font:Arial">
This programme produces creative media professionals proficient in computing technology. Students also gain a solid foundation in multimedia communications in business, art and design, entertainment and education<br/>The creative and media sector has always been the root of the information society as it is the segment that is most accessible to the masses and is therefore a highly acclaimed career.<br/> This programme comprises of four major components of Creative Multimedia, 2D Animation and Imaging, 3D Modeling and Animation, Video and Motion Graphics and Interactive Web Design.
</p>
</div>
<div id="mul">
</div>
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
