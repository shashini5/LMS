<html>
<head>
<title> member register </title>
<link href="stl_register_account.css" rel="stylesheet" type="text/css">
<link href="stl_login_form.css" rel="stylesheet" type="text/css">
<script src="javasecon.js"></script>
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
<p>Forgot <a href="#">password?</a> </p>
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
<button id="btndrp_am" onclick="home()" > Home </button> <script> function home() {window.open("home.php");} </script>
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
<button class="btndrp" onclick="facilities()" > Facilities </button> <script> function facilities(){window.open("facilities.php");} </script>
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

<!-- REGISTER FROM CODE START -->
<div id="regform_back">
<div id="regform">
<p id="regform_head"> Create an Account <h2>
<form action="register_account_confrm.php" method="post">

<table>
<tr>
<td> <label> First Name: </label> </td> 
<td> <input type="text" id="fn" name="fn" onblur=er1() /> </td>
</tr>
<tr colspan="2" > <td> <p class="erdiv" id="fner" style="display:none"> You can't leave this empty. </p> </td> </tr>
<tr>
<td> <label> Last Name: </label> </td>
<td> <input type="text" id="ln" name="ln" onblur=er2() /> </td>
</tr>
<tr colspan="2" > <td> <p class="erdiv" id="lner" style="display:none"> You can't leave this empty. </p> </td> </tr>
<tr>
<td> <label> Email Address: </label> </td>
<td> <input type="text" id="email" name="email" onblur=er3() /> </td>
</tr>
<tr colspan="2" > <td> <p class="erdiv" id="emailer" style="display:none"> You can't leave this empty. </p> </td> </tr>
<tr>
<td> <label> Confirm Your Email Address: </label> </td> 
<td> <input type="text" id="emailcon" name="emailcon" onblur=er4() /> </td>
</tr>
<tr colspan="2" > <td> <p class="erdiv" id="emailconer" style="display:none"> Please confirm your email. </p> </td> </tr>
<tr>
<td> <label> Index Number: </label> </td> 
<td> <input type="text" id="in" name="in" onblur=er5() /> </td>
</tr>
<tr colspan="2" > <td> <p class="erdiv" id="iner" style="display:none"> You can't leave this empty. </p> </td> </tr>
<tr>
<td> <label> City/Town: </label> </td> 
<td> <input type="text" id="city" name="city" onblur=er6() /> </td>
</tr>
<tr colspan="2" > <td> <p class="erdiv" id="cityer" style="display:none"> You can't leave this empty. </p> </td> </tr>
<tr>
<td> <label> State: </label> </td>
<td> <input type="text" id="cuntry" name="cuntry" onblur=er7() /> </td>
</tr>
<tr colspan="2" > <td> <p class="erdiv" id="cuntryer" style="display:none"> You can't leave this empty. </p> </td> </tr>
<tr>
<td> <label> User Name: </label> </td>
<td> <input type="text" id="un" name="un" onblur=er8() /> </td>
</tr>
<tr colspan="2" > <td> <p class="erdiv" id="uner" style="display:none"> You can't leave this empty. </p> </td> </tr>
<tr> 
<td> <label> Password: </label> </td>
<td> <input type="password" id="ps1" name="ps1" onblur=er9() /> </td> 
</tr>
<tr colspan="2" > <td> <p class="erdiv" id="ps1er" style="display:none"> You can't leave this empty. </p> </td> </tr>
<tr> 
<td> <label> Confirm Your Password: </label> </td>
<td> <input type="password" id="ps2" name="ps2" onblur=er10() /> </td>
</tr>
<tr colspan="2"> <td> <p class="erdiv" id="ps2er" style="display:none"> Please confirm your password. </p> </td> </tr>
</table>
<input type="submit" value="Submit" onclick="errorchecking()">
<input type="button" value="Cancel">
</form>
</div>
</div>
<!-- REGISTER FROM CODE END -->
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
<a href="#" style="text-decoration:none;margin-left:15px"> <img src="pics/fb.png" alt="facebook_icon" style="width:30px;border-radius:50%"> </a>
<a href="#" style="text-decoration:none"> <img src="pics/g+.png" alt="google_plus_icon" style="width:30px;border-radius:60%"> </a>
<a href="#" style="text-decoration:none"> <img src="pics/twi.png" alt="twitter_icon" style="width:30px;border-radius:50%"> </a>
<a href="#" style="text-decoration:none"> <img src="pics/you.jpg" alt="youtube_icon" style="width:30px;border-radius:50%"> </a>
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