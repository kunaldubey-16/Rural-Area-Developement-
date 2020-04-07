<?php
include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
   <style >
         

  body{
  background:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 90%);
  height: 50vh;

        }

.signup{
           width:600px;
           height: 1200px;
           background-color: black;
           border-radius: 15px;
           top: 40px;
           left: 500px;
         color: #fff;
         position: absolute;
}
.signup h1{
  font-size: 35px;
  color: #8A2BE2;
  padding-top: 30px;
  padding-left: 90px;
  
}
.signup input[type="text"],input[type="password"],input[type="number"],input[type="file"]{
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
  margin:0;
  padding: 0;
  
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
  padding-left: 90px;
  
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
  width: 30%;
  height: 300px;
  position: absolute;
  border-radius: 3%;
  top: 250px;
  left: 10px;
  background-color: transparent;
  
}
.logininfo h1{
  color:white;
  font-size: 35px;
  position:relative;
  padding-top: 20px;
  padding-left: 30px;
  
}
.logininfo h2{
  color: black;
  font-size: 18px;
  position:relative;
  padding-top: 20px;
  padding-left: 30px;
}








   </style>


  <title></title>
</head>
<body>
  


  <div class="signup">
    
                <form action="" method="GET">
                <h1>Register here!</h1>


               
                <input type="text" placeholder="Enter Your Fullname" name="Fullname" required=""><br>
               
                <input type="text" placeholder="Enter email" name="email" required=""><br>
                <input type="text" placeholder="Enter Age"name="age"><br>
        
                
                <input type="number" placeholder="(+91)Phone" name="phone1" required=""><br>
                <input type="number" placeholder="(+91)Alternate Number" name="phone2" required=""><br>
                <input type="text" placeholder="Country" name="country" required=""><br>
                
                <input type="text" placeholder="City"name="city" required=""><br>
        

                <input type="text" placeholder="Enter address" name="address" required=""><br>
                <input type="text" placeholder="vehicle Registration number"name="tno" required=""><br>

                <input type="text" placeholder="Description of transport" name="description" required=""><br>
                <input type="file" placeholder="Image of transport" value="Add Image of transport" name="image"><br>

        
        
       
                <input type="Submit"  name="Submit" value="Submit"><br>
                <br><br>
                  <p>Don't have Login credentials     <a class="l1" href="signup.php">Signup</a></p>                
                
                </form>
            </div>
            <div class="signup1">

                <p >Move to Home menu<br><a class="bupload" href="meetyourneed.php">Home</a></p>
</div>


                <div class="logininfo">
                  <h1>

<?php

$d1=$_GET['Fullname'];
$d2=$_GET['email'];
$d3=$_GET['age'];
$d4=$_GET['phone1'];
$d5=$_GET['phone2'];
$d6=$_GET['country'];
$d7=$_GET['city'];
$d8=$_GET['address'];
$d9=$_GET['tno'];
$d10=$_GET['description'];
$d11=$_GET['image'];

 if(isset($_GET['Submit']))
 {
$query="INSERT INTO dealers VALUES('$d1','$d2','$d3','$d4','$d5','$d6','$d7','$d8','$d9','$d10','$d11')";
$k1=mysqli_query($conn,$query);
 echo"Congrats! You are now dealer of Meet Your Need ";
 echo"<br>"; 
}


?>


</h1>


                      <h2>
                                  <?php
                                  if(isset($_GET['Submit']))
                                   {

                                  
                                  echo"<br>";
                                   echo"Soon you will receive a Validation SMS."; 

                                   }
                                   ?>
  </h2>
             </div>





</body>


</html>