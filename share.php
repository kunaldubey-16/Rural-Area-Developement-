<?php
include("connection.php");
error_reporting(0);
session_start();
$errors=array();
?>




<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style >
        
   *{
  margin:0px;
  padding: 0px;
  font-family: century gothic;
  
}
  body{

  color: #3cba54;
  height: 100vh;

}

.main{
  max-width: 1200px;
  margin:auto;
}
.main ul{
  float: right;
  list-style: none;
  margin-top: 85px;
  margin-right: 5px;
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
    padding: 15px 30px;
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
    padding: 15px 30px;

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
    left: 20px;
}
///



.nav2{
  background-color: linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 90%);
  height: 850px;
  width: 60%;
     top: 100px;
  position:relative;
}

.lefthand2{
  height: 800px;
  width: 50%;
  position: absolute;
  top: 160px;
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


.logininfo{
  width: 38%;
  height: 300px;
  position: absolute;
  border-radius: 3%;
  top: 280px;
  left: 800px;
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
.logininfo h3{
  color: white;
  font-size: 15px;
  position:relative;
  padding-top: 50px;
  padding-left: 30px;
}








</style>

	<title>share.in</title>
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



<div class="nav2">

    <div class="lefthand2">
      <p><b>SHARE WITH US</b></p>
      <form method="GET" action="">
            
                <label>Username*</label><br>
               <input type="text" name="Username" required=""><br>

                <label>Email*</label><br>
               <input type="text" name="email" required=""><br>

                <label>Enter the Topic of Research*</label><br>
               <input type="text" name="topic" required=""><br>

              

                <label>Description of Topic*</label><br>
               <input class="describe" type="text" name="description" required=""><br>

              <input type="submit" name="send" value="send" ><br>



            </form>
      
    </div>

    <div class="logininfo">
                  <h1>  
<?php

$d1=$_GET['Username'];
$d2=$_GET['email'];
$d3=$_GET['topic'];
$d4=$_GET['description'];

if(isset($_GET['send']))
{
 echo "Thanks! for uploading your Idea";
$query="INSERT INTO share VALUES('$d1','$d2','$d3','$d4')";
$query_run=mysqli_query($conn,$query);
$result=mysqli_num_rows($query_run);
  
      
        
    
}
?>
</h1>
<h2>
<?php

$d1=$_GET['Username'];
$d2=$_GET['email'];
$d3=$_GET['topic'];
$d4=$_GET['description'];

if(isset($_GET['send']))
{
echo "we will get back to you soon";
echo"<br>";

$query="INSERT INTO share VALUES('$d1','$d2','$d3','$d4')";
$query_run=mysqli_query($conn,$query);
$result=mysqli_num_rows($query_run);
  
      
}
?>   </h2>
<h3>
<?php

$d1=$_GET['Username'];
$d2=$_GET['email'];
$d3=$_GET['topic'];
$d4=$_GET['description'];

if(isset($_GET['send']))
{
echo"If you have any query leave your message in";
echo"<br>";
echo" CONATCT  section";

$query="INSERT INTO share VALUES('$d1','$d2','$d3','$d4')";
$query_run=mysqli_query($conn,$query);
$result=mysqli_num_rows($query_run);
  
      
}
?> 
  </h3>
             </div>

  

</body>


</html>
