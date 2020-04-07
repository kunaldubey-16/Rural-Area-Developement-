<?php
include("connection.php");
error_reporting(0);
session_start();
$errors=array();
?>








<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		



		*{
	margin:0px;
	padding: 0px;
	
	
}
  body{
  background:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 90%);
  height: 400vh;

}

.main{
	max-width: 1200px;
	margin:auto;
}
.main ul{
  float: right;

  list-style: none;
  margin-top: 85px;
  margin-right: 20px;
}

.main ul li{
    display: inline-block;
    margin-right: 40px;

}

.main ul li a{
	color:white;
	text-decoration: none;
	padding: 5px 0.2px;
	transition: 0.5s ease;
}

.main ul li a.home{
   border-bottom: 2px solid #cd99d4;
   color: #fff;
}

.main ul li a:hover{
	color: purple;
	display:  
}

.main ul li a.signup{
    border:1px solid #fff;
    padding: 2px 20px;
    border-radius: 12px;
    border-style: round;

    color: black;

}

.main ul li a.signup:hover{
	background-color: #fff;
	color:purple;
}

.main ul li a.login{
    border:1px solid #fff;
    padding: 2px 20px;
    border-radius: 12px;
    border-style: round;
    color: black;

}

.main ul li a.login:hover{
	background-color: #fff;
	color:purple;
}

.logo p{
    float: left;
    position: absolute;
    top: 27px;
    color: white;
    font-size: 30px;
    left: 40px;
}
///Ist navigation bar

.nav1{
	background-image:url('images/31.jpg');
	height: 850px;
	width: 100%;
	margin-top: 100px;
	position: absolute;
}


.lefthand{
	height: 800px;
	width: 50%;
	position: absolute;
	top: 200px;
	right: 50%;
	background:transparent;
	
}

.lefthand h1{
	 font-size: 40px;
	 position: relative;
   padding-top: 250px;
   padding-left: 100px;
   color: white;
   font-family: sans-serif;


}
.lefthand h2{
	 font-size: 22px;
	 position: relative;
   padding-top: 20px;
   padding-left: 100px;
   color: white;
   font-family: century gothic;


}



.lefthand ul {
  float: right;

  list-style: none;
  margin-top: 40px;
  float: right;
  right: 200px;
  position: relative;

  
}

.lefthand ul li{
    display: inline-block;
  padding-left: 30px;
  

}
.lefthand ul li a{
  text-decoration: none;
  padding-left: 200px;
}




.lefthand ul li a.contact{
    border:2px solid #fff;
    padding: 10px 25px;
    border-radius: 16px;
    border-style: round;

    color: white;

}

.lefthand ul li a.contact:hover{
  background-color: #fff;
  color:purple;
}

.lefthand ul li a.support{
    border:2px solid #fff;
    padding: 10px 25px;
    border-radius: 16px;
    border-style: round;
    color: white;

}

.lefthand ul li a.support:hover{
  background-color: #fff;
  color:purple;
}

.righthand{
	height: 800px;
	width: 50%;
    left: 50%;
	position: absolute;
	top: 200px;

	background:transparent;
	
}
.righthand img{
	width: 100%;
    border-radius: 10%;
	border-style:border-box;
	height: 600px;
}


.nav2{
	background-color: linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 90%);
	height: 850px;
	width: 100%;
     top: 1200px;
	position: absolute;
}
 


.lefthand1{
	height: 800px;
	width: 50%;

	position: absolute;
	top: 860px;
	right: 50%;
	background:transparent;
	
}



 .lefthand1 h1{
	 font-size: 55px;
	 position: relative;
   padding-top: 50px;
   padding-left: 150px;
   color: white;
   font-family: sans-serif;


}

.righthand1{
	height: 900px;
	width: 50%;
    left: 50%;
	position: absolute;
	top: 860px;

	background:transparent;
	
}
.righthand1 h1.a{
	font-size: 35px;
	padding-top: 20px;
	font-family: sans-serif;
	padding-bottom: 20px;
	padding-left: 10px;
	color: grey;

}
.righthand1 h2.a1{
		font-size: 20px;
	position: relative;
	padding-top: 15px;
	font-family: century gothic;
	padding-bottom: 20px;
	letter-spacing: 0px;
	padding-left: 10px;
	color: white;
}
.righthand1 h1.b{
	font-size: 35px;
	padding-top: 20px;
	font-family: sans-serif;
	padding-bottom: 20px;
	padding-left: 10px;
	color: grey;

}
.righthand1 h2.b1{
		font-size: 20px;
	position: relative;
	padding-top: 15px;
	font-family: century gothic;
	padding-bottom: 20px;
	letter-spacing: 0px;
	padding-left: 10px;
	color: white;
	
}
.righthand1 h1.c{
	font-size: 35px;
	padding-top: 20px;
	font-family: sans-serif;
	padding-bottom: 20px;
	padding-left: 10px;
	color: grey;

}
.righthand1 h2.c1{
	font-size: 20px;
	position: relative;
	padding-top: 15px;
	font-family: century gothic;
	padding-bottom: 20px;
	letter-spacing: 0px;
	padding-left: 10px;
	color: white;
}

.nav2{
	background-color: linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 90%);
	height: 850px;
	width: 100%;
     top: 800px;
	position: absolute;
}

.lefthand2{
	height: 800px;
	width: 50%;
	position: absolute;
	top: 860px;
	right: 50%;
	background:transparent;	
	
}



 .lefthand2 h1{
	 font-size: 55px;
	 position: relative;
   padding-top: 50px;
   padding-left: 150px;
   color: white;
   font-family: sans-serif;

}


.lefthand2 p{
	color: white;
	font-size: 35px;
	padding-left: 100px;
	margin-top: 10px;
	margin-bottom: 70px;
	font-family: sans-serif;
}

.lefthand2 label{
	color: white;
	font-size: 25px;
	padding-left: 100px;
	margin-top: 30px;
	font-family: century gothic;
}
.lefthand2 input{
    margin-left: 100px;
    margin-bottom: 30px;


}
.lefthand2 input[type="text"]{
	border-radius: 18px ;
	border:border-box;
	border-color: 0.2 black;
	font-size: 30px;
	font-family: century gothic;
	padding-left: 300px;
	top: 10px;
	padding-top: 35px;
}
.lefthand2 input.describe[type="text"]{
	border-radius: 18px ;
	border:border-box;
	font-size: 30px;
	border-color: 0.2 black;
	font-family: century gothic;
	padding-left: 300px;
	top: 10px;
	padding-top: 35px;
	height: 200px;
}
.lefthand2 input[type="number"]{
	border-radius: 10px;
	border:border-box;
	font-size: 30px;
	border-color: 0.2 black;
	font-family: century gothic;
	padding-left: 300px;
	padding-top: 35px;
}
.lefthand2 input[type="submit"]{
	 height: 50px;
  width: 250px;
  background-color: #ffeb3b;
  border:none;
  color: #000;
  position: relative;
  top: 20px;
  left: 50px;
  font-size: 20px;
  border-radius: 18px;

}


.lefthand2 input[type="submit"]:hover{
	background-color: white;
}



 .righthand2{
	height: 900px;
	width: 50%;
    left: 50%;
	position: absolute;
	top: 860px;
	background:transparent;
	
}

.righthand2 h1{

    font-size: 45px;
    font-family: sans-serif;
    padding-bottom: 50px;
    padding-left: 140px;
    color: white;
}


.righthand2 p{
    
    font-size: 35px;
    font-family: sans-serif;
    padding-bottom: 30px;
    padding-left: 140px;
    color: white;
	
}


.righthand2 h2{
   
    font-size: 18px;
    font-family: century gothic;

    color: black;    
    padding-left: 140px;
    color: black;
	
}

.bottomlogo h2{
    float: right;
    position: absolute;
    padding-left: 400px;
    top: 2800px;
    color: white;
    font-size: 13px;
    left: 40px;
    color: white;
}

.logininfo{
  width: 38%;
  height: 300px;
  position: fixed;
  border-radius: 3%;
  top: 160px;
  left: 10px;
  background-color: transparent;
  
}
	.logininfo h1{
  color: white;
  font-size: 35px;
  position:relative;
  padding-top: 20px;
  padding-left: 30px;
  
}
.logininfo h2{
  color: white;
  font-size: 25px;
  position:relative;
  padding-top: 20px;
  padding-left: 30px;
}


</style>

</head>
<body >
	<header>
		<div class="logo">
			<p>Meet your Need</p>
			

		</div>
		<div class ="main">
		<ul>
             <li><a class="home" href="meetyourneed.php">Home</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="cityservice.php">City Service</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a class="signup" href="signup.php">Sign up</a></li>
            <li><a class="login" href="login.php">Login</a></li>

		</ul>
		    
	</div>
	</header>

<br><br>

<div class="nav1">
<div class="lefthand">
	
	<h1><b>Contact our Support and Sales Team</b></h1><br>
	
	<h2>Need to get in touch with the team? We’re all ears.</h2><br>
	<ul>
	<li><a class="contact" href="#">Contact Us</a></li>
	<li><a class="support" href="#">Visit Support</a></li>
</ul>
</div>
<div class="righthand">
	<img src="images/31.jpg">
	
</div>
	</div>
	<br><br>


<div id="nav1">
<div class="lefthand1">
	
	<h1><b>Who do you <br>need to get in <br>touch with?</b></h1><br>
	

</div>
<div class="righthand1">
	<h1 class="a"><b>Support</b></h1>
	<h2 class="a1" >We have a support portal that has the answers to dozens of the most common questions about Copper! Check it out here.<br><br>

If you don’t find what you need, please submit a support request through our help center or chat us through the Copper app.</h2>

     <h1 class="b"><b>Business Development</b></h1>

     <h2 class="b1">Are you a reseller, affiliate, or association that would like to partner with Copper? Get connected with our Partner team at partners@copper.com.</h2>

     <h1 class="c"><b>General Questions</b></h1>

     <h2 class="c1">Have a general question for us? Contact us at info@copper.com.</h2>
	
</div

	</div>




	<div class="nav2">

		<div class="lefthand2">
			<p><b>Contact Us</b></p>
			<form method="GET" action="">
            
               <label>Username*</label><br>
               <input type="text" name="Username" required=""><br>

                <label>Email*</label><br>
               <input type="text" name="email" required=""><br>

               <label>Phone*</label><br>
               <input type="Number" name="phone" required=""><br>

               <label>Issue*</label><br>
               <input type="text" name="issue" required=""><br>

               <label>Describe Your Problem*</label><br>
               <input class="describe" type="text" name="description" required=""><br>

              <input type="submit" name="send" value="send" ><br>



            </form>
			
		</div>


    <div class="logininfo">
                  <h1> 
<?php
$d11=$_GET['Username'];
$d12=$_GET['email'];
$d13=$_GET['phone'];
$d14=$_GET['issue'];
$d15=$_GET['description'];
if(isset($_GET['send']))
{
	echo"Sorry for Inconvenience held";
	echo"<br>";
$query="INSERT INTO contact VALUES('$d11','$d12','$d13','$d14','$d15')";
$query_run=mysqli_query($conn,$query);
$result=mysqli_num_rows($query_run);

 }  
 ?>
 </h1>
<h2>
<?php
$d11=$_GET['Username'];
$d12=$_GET['email'];
$d13=$_GET['phone'];
$d14=$_GET['issue'];
$d15=$_GET['description'];
if(isset($_GET['send']))
{
	echo"We will get back to you after resolving your issue";
	echo"<br>";
$query="INSERT INTO contact VALUES('$d11','$d12','$d13','$d14','$d15')";
$query_run=mysqli_query($conn,$query);
$result=mysqli_num_rows($query_run);

 } 
?>
</h2>
</div>

<?php

$d11=$_GET['Username'];
$d12=$_GET['email'];
$d13=$_GET['phone'];
$d14=$_GET['issue'];
$d15=$_GET['description'];




$query="INSERT INTO contact VALUES('$d11','$d12','$d13','$d14','$d15')";
$k1=mysqli_query($conn,$query);


?>

		

			<div class="righthand2">
				<h1>Meet your Need<b> HQ</b></h1><br>
				<p>Contact Information</p><br>
	<h2>(+91)-8178724283/7979895682</h2><br>

	<h2></a>Ansh Bhawan, Sector-126,Raipur<br>
		Noida ,201313,UP<br>Amity University,Noida Campus</h2>
<br><br>

	<h2>dubeykunal8@gmail.com</h2>
		


		</div>
		
	</div>






<div class="bottomlogo">
      

      <h2>Copyright © 2019 ANI Technologies Pvt. Ltd. All rights reserved.</h2>
      

    </div>

</body>
</html>