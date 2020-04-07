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
    left: 20px;
}

.title{
    position: absolute;
    top: 30%;
    left:50%;
    transition: translate(-50%,50%);
    width: 100px;
  height: 500px;
  background:linear-gradient purple;
}
.title h1{
  padding-top:40px;  
  padding-left: 200px;
   color: #fff;
   font-size: 35px;
   font-weight: 300;
   letter-spacing: -1px;
}




.bottomlogo h2{
    float: right;
    position: absolute;
    padding-left: 400px;
    top: 700px;
    color: white;
    font-size: 13px;
    left: 40px;
    color: white;
}






.title h1{
  color: #fff;
  position: absolute;
  top: 20px;
  font-size: 40px;
  font-family: century gothic;
  letter-spacing: 2px;
}
.search-field {
  height: 50px ; 
  padding:10px ;
  width: 370px;
  border:none;
  border-radius: 25px;
  outline: none;
  top: 230px;
  right: 250px;
  position: absolute;

}

.search-btn{
  height: 50px;
  width: 150px;
  background-color: #ffeb3b;
  border:none;
  color: #000;
  position: absolute;
  top: 240px;
  right: 100px;
  border-radius: 25px;
}
.search-btn:hover{
  background-color: #ffc107;
  cursor: pointer;
}

.form-box input[type="text"]{
  font-size: 25px;
  font-family: arial;
  color: purple;
}



#headofsearch{
  background:;
  height: 40px;
  width: 300px;
  border-radius: 30px;
  top: 100px;
    float: left;
  right: 270px;
  position: absolute;

}
#headofsearch h2{
  font-size: 40px;
  font-family: century gothic;
  color:white;
}




</style>

  <title>meetyourneed.in</title>
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


      
  <div class="title">
    <div id="headofsearch">

      <form method="POST" action="details.php">
      <h2>Get Everything in Your City</h2>
        </div>
             <div class="form-box">   

    <input  class="search-field location" type="text" name="city" placeholder="Enter City" required="" >
    <button class="search-btn" name="submit" value="submit" type="button ">Search</button>
  </form>


</div>


<h1>Top Dealers of year</h1>  
        
  </div>       



<div class="bottomlogo">
      

      <h2>Copyright © 2019 ANI Technologies Pvt. Ltd. All rights reserved.</h2>
      

    </div>



</body>


</html>
