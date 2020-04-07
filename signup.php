<?php
include("connection.php");
error_reporting(0);
session_start();
$errors=array();
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
           width:40%;
           height: 750px;
           background-color:grey;
           
           border-radius: 15px;
           top: 40px;
           left: 150px;
 	       color: black;
 	       position: absolute;
}
.signup h1{
	font-size: 35px;
	color: black;
	padding-top: 30px;
	padding-left: 200px;
	
}
.signup input[type="text"],input[type="password"]{
 	border: none;
 	border-bottom: 1px solid #fff;
 	background:transparent;
 	outline:none;
 	height: 20px;
 	color: #fff;
 	font-size:16px;
 	padding-left: 25px;
 }

 .signup label{
   padding-left: 30px;
   color: black;
   padding-bottom: 15px;
   font-size: 20px;




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
 	margin:0;
 	padding: 0;
 	
 }
 .signup input{
 	width: 93%;
 	margin-bottom: 20px;}
           	 
 .signup1 p{
	font-size: 23px;
	color: white;
	float: left;
	color: white;
	position: absolute;
	padding-top: 20px;
	padding-left: 900px;
	
}


.signup1 h2{
  padding-left:900px;
  padding-top: 30px; 

}

.signup1 h2 a.bupload{
    border:2px solid #fff;
    padding: 5px 20px;
    background-color: white;
    padding-top: 15px;
    left: 900px;
    top: 100px;
    text-decoration: none;
    position: absolute;
    border-radius: 12px;
    border-style: round;
    color: black;

}
   
.signup1 h2 a.bupload:hover{
  background-color: #db3236;
  color:purple;
}





 .signup1 h1{
  font-size: 18px;
  color: white;
  float: left;
  color: white;
  position: absolute;
  padding-top: 150px;
  padding-left: 900px;
  
}





.signup1 h1{
  padding-top: 50px;
}
.signup1 h1 a.bupload1{
    border:2px solid #fff;
    padding: 2px 20px;
    background-color: white;
    padding-top: 25px;
    top: 80px;
    position: absolute;
    border-radius: 12px;
    border-style: round;
    color: black;

}
   
.signup1 h1 a.bupload1:hover{
  background-color: #db3236;
  color:purple;
}



.signup{
           width:400px;
           height: 600px;
           background-color: black;
           border-radius: 15px;
           top: 35px;
           left: 200px;
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
  margin-top: 50px;
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


.logininfo{
  width: 38%;
  height: 300px;
  position: absolute;
  border-radius: 3%;
  top: 280px;
  left: 700px;
  background-color: transparent;
  
}
.logininfo h1{
  color: black;
  font-size: 35px;
  position:relative;
  padding-top: 20px;
  padding-left: 30px;
  
}
.logininfo h2{
  color: black;
  font-size: 25px;
  position:relative;
  padding-top: 20px;
  padding-left: 30px;
}




 

   </style>





	<title>
		signup
	</title>
</head>
<body>
	    <div class="signup ">
    
                <form action="" method="POST">
                <h1>Sign up </h1>
                 

                <input type="text" placeholder="Enter Username" name="username" required=""><br> 
                <input type="text" placeholder="Password" name="password_1" required=""><br>
                 <input type="password" placeholder="Confirm Password" name="password_2" required=""><br>
                  <input type="text" placeholder="Email" name="email" required=""><br>
                
                
       
                <input type="Submit"  name="Submit" value="Submit"><br>


                <br><br>
                  <p class="s1">Don't have an account?     <a class="l1" href="signup.php">Signup now</a></p>                
                
                </form>
            </div>
            <div class="signup1">

               <h2 >Upload Your bussiness details<br><a class="bupload" href="register.php">RegisterNow</a></h2><br>

               <h1 >Back to homepage<br><a class="bupload1" href="meetyourneed.php">Homepage</a>
               </h1>

           
</div>
                <div class="logininfo">
                  <h1>
                  <?php

                  $Un=$_GET['username'];
              
                  $p1=$_GET['password_1'];
                  $p2=$_GET['password_2'];
                  $em=$_GET['email'];

                     if(isset($_POST['Submit']))
                           {
                          
                               
                                  $query="INSERT INTO signup VALUES('$Un','$p1','$p2','$em')";
                                  $k1=mysqli_query($conn,$query);
                                  echo"Your Sign Up was successfull."; 
                                         
                                  
                                                  
                             
                            }   
                  
                ?>
                  
                </h1>

                      <h2>
                                  <?php
                                  if(isset($_POST['Submit']))
                                   {

                                  echo"Click the link above to REGISTER your Bussiness"; 
                                   }
                                   ?>
                      </h2>
             </div>





</body>

</html>