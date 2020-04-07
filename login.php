<?php
include("connection.php");
session_start();
error_reporting(0);
?>



<!DOCTYPE html>
<html>
<head>
   <style>
    
body{
  background:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 90%);
  height: 50vh;

}

.signup{
           width:400px;
           height: 450px;
           background-color: black;
           border-radius: 15px;
           top: 120px;
           left: 400px;
 	       color: white;
 	       position: absolute;
}
.signup h1{
	font-size: 35px;
	color: #8A2BE2;
	padding-top: 30px;
	padding-left: 90px;
	
}
.signup input[type="text"],input[type="password"]{
 	border: none;
 	border-bottom: 1px solid #fff;
 	background:transparent;
 	outline:none;
 	height: 50px;
 	color: #fff;
 	font-size:16px;
 	padding-left: 25px;
 }
  .signup input[type="Submit"]{
 	border:none;
 	outline: none;
 	height: 40px;
 	background:#fb2525;
 	color: #fff;
 	font-size:18px;
 	margin-top: 20px;
 	border-radius: 20px;
}
.signup input[type="Submit"]:hover{
 	cursor: pointer;
 	background:#ffc107;
 	color: #000;
 }
 .signup p{
 	font-weight:bold;
    padding-top: 2px;
    padding-left: 30px;
 	
 }
 .signup input{
 	width: 93%;
 	margin-bottom: 20px;}
           	 
 .signup1 p{
	font-size: 23px;
	color: #8A2BE2;
	float: left;
	color: white;
	position: absolute;
	padding-top: 20px;
	padding-left: 120px;
	
}



 .signup1 p a.bupload{
    border:2px solid #fff;
    padding: 2px 20px;
    background-color: green;
    padding-top: 25px;
    position: absolute;
    border-radius: 12px;
    border-style: round;
    color: black;

}
   
.signup1 p a.bupload:hover{
  background-color: #fff;
  color:purple;
}




.logininfo{
  width: 38%;
  height: 300px;
  position: absolute;
  border-radius: 3%;
  top: 150px;
  left: 870px;
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

	<title>
		Login
	</title>
</head>
<body>
	     <div class="signup ">
    
                <form action="" method="POST">
                <h1>Login </h1>
                
                <input type="text" placeholder="Enter Username" name="username" required=""><br>
                <input type="text" placeholder="Password" name="password" required=""><br>
                
                
       
                <input type="Submit"  name="Submit" value="Submit"><br>
                <br><br>
                  <p class="s1">Don't have an account?     <a class="l1" href="signup.php">Signup now</a></p>                
                
                </form>
            </div>
            <div class="signup1">

                <p >Upload Your bussiness details<br><a class="bupload" href="register.php">Register Now</a></p>
</div>



                <div class="logininfo">
                  <h1>
               <?php

if(isset($_POST['Submit']))
{
  $us=$_POST['username'];
  $pwd=$_POST['password'];
  
  $query="SELECT * FROM signup WHERE username='$us'  && password_1='$pwd' ";
  $query_run=mysqli_query($conn,$query);
      $result=mysqli_num_rows($query_run);
  
      if($result>0)
      {
         echo "Mr.";
         echo $us;
         echo "<br>";
         echo "you have successfully logged In";

        
      }
      else
      {
        echo"Invalid Username";
       echo"<br>";
       
  
      }
}   

?>
                  
                </h1>

                      <h2>
 <?php
 if(isset($_POST['Submit']))
{
  $us=$_POST['username'];
  $pwd=$_POST['password'];
  
  $query="SELECT * FROM signup WHERE username='$us'  && password_1='$pwd' ";
  $query_run=mysqli_query($conn,$query);
      $result=mysqli_num_rows($query_run);
  
      if($result>0)
      {
         
         echo "Now you can register your Bussiness";
      }
       else
      {
        
       echo"Please check your Username or password filled"; 
  
      }
       }
                                   ?>
                      </h2>
             </div>











</body>
	

</html>
