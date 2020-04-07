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
  background:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ;
  height: 680vh;

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
   font-size: 55px;
   font-weight: 300;
   letter-spacing: -1px;
}
#projectidea{
   position: absolute;
   height: 590px;
   border-style: round;
   width: 100%;
   background-color: linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%);
   top: 650px;





}
#projectidea h1{
   padding-top: 50px;
   padding-left: 580px;
  position: absolute;
  font-size: 30px;
  color: white;

}


#projectidea img{
    left: 30px;
    height: 400px;
    position: absolute;
    top: 150px;
}

#projectidea h2{
    position: absolute;   
   color: #fff;
   font-size: 25px;
   font-weight: 300;
   letter-spacing: -1px;
   font-family: century gothic;
   padding-top: 200px;
   padding-left: 800px;

}

#projectidea li a{
  padding-top: 330px;
  color: white;
    position: absolute;
    padding-left: 800px;
    letter-spacing: -1px;
    font-size: 20px;
    text-decoration: none;
  list-style: none;
 }  
#projectidea li{
    text-decoration: none;
  list-style: none;

}

#projectidea h2 li{
  list-style: none;

}
#projectidea h2 a{
    text-decoration: none;
}

#projectidea h2 a.share{

     border:2px solid #fff;
    padding: 10px 25px;
    border-radius: 16px;
    border-style: round;
    color: white;
}
#projectidea h2 a.share:hover{
     background-color: #fff;
  color:purple;
    }

.suggestion{
    position: absolute;
    height: 1620px;
    border-style: round;
    width: 100%;
    background-color:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ;
    top: 1240px;

    }

.suggestion #reason h1{
    position:absolute;
  padding-top: 100px;
    padding-left: 50px;
  letter-spacing: -1px;
  font-size: 35px;
  color: white;

}
.suggestion #reason h2{
    position: absolute;
  padding-top: 160px;
    padding-left: 50px;
    letter-spacing: -1px;
  font-size: 15px;
  color: white;

}



.suggestion #reason1 img{
  padding-top: 230px;
    padding-left: 50px;
    height: 290px;
    width: 650px;
  position: absolute;
}

.suggestion #reason1 h1{
     position: absolute;
  padding-top: 280px;
    padding-left: 830px;
  letter-spacing: -1px;
  font-size: 25px;
  color: white;
}

.suggestion #reason1 h2{
    position: absolute;
  padding-top: 330px;
    padding-left: 830px;
    font-family: century gothic;
    letter-spacing: 0px;
  font-size: 15px;
  color: white;

}





.suggestion #reason2 img{
  padding-top: 550px;
    padding-left: 50px;
    height: 290px;
    width: 650px;
  position: absolute;
}

.suggestion #reason2 h1{
     position: absolute;
  padding-top: 600px;
    padding-left: 830px;
  letter-spacing: -1px;
  font-size: 25px;
  color: white;
}

.suggestion #reason2 h2{
    position: absolute;
  padding-top: 650px;
    padding-left: 830px;
    font-family: century gothic;
    letter-spacing: 0px;
  font-size: 15px;
  color: white;

}





.suggestion #reason3 img{
  padding-top: 870px;
    padding-left: 50px;
    height: 290px;
    width: 650px;
  position: absolute;
}

.suggestion #reason3 h1{
     position: absolute;
  padding-top: 920px;
    padding-left: 830px;
  letter-spacing: -1px;
  font-size: 25px;
  color: white;
}

.suggestion #reason3 h2{
    position: absolute;
  padding-top: 970px;
    padding-left: 830px;
    letter-spacing: 0px;
    font-family: century gothic;
  font-size: 15px;
  color: white;

}

#slide{
    position: absolute;
    height: 700px;
    border-style: round;
    width: 100%;
    background-color:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ;
    top: 2500px;
}

#slide h1{
    position:absolute;
  padding-top: 40px;
    padding-left: 50px;
  letter-spacing: -1px;
  font-size: 35px;
  color: white;
  

}
#slide h2{
    position: absolute;
  padding-top: 100px;
    padding-left: 50px;
    letter-spacing: 0px;
  font-size: 15px;
  color: white;
}














#education{
    position: absolute;
    height: 400px;
    border-style: round;
    width: 100%;
    background-color:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ;
    top: 3220px;
}

#education h2{
    position: absolute;
    padding-top: 30px;
    padding-left: 50px;
    letter-spacing: 0px;
    font-size: 35px;
    color: white;
   
}

#education h3{
    position: absolute;
    padding-top: 90px;
    padding-left: 50px;
    text-align:left;
    letter-spacing: 0px;
    font-size: 15px;
    color: white;
   
}
.courses ul{
  float: right;

  list-style: none;
  margin-top: 250px;
  margin-right: 470px;
}

.courses ul li{
    display: inline-block;
    margin-right: 40px;
  

}
.courses ul li a{
  text-decoration: none;
}




.courses ul li a.ds{
    border:2px solid #fff;
    padding: 10px 25px;
    border-radius: 16px;
    border-style: round;
    color: white;

}

.courses ul li a.ds:hover{
  background-color: #fff;
  color:purple;
}


.courses ul li a.dd{
    border:2px solid #fff;
    padding: 10px 25px;
    border-radius: 16px;
    border-style: round;
    color: white;

}

.courses ul li a.dd:hover{
  background-color: #fff;
  color:purple;
}


.courses ul li a.cl{
    border:2px solid #fff;
    padding: 10px 25px;
    border-radius: 16px;
    border-style: round;
    color: white;

}

.courses ul li a.cl:hover{
  background-color: #fff;
  color:purple;
}


.courses ul li a.java{
    border:2px solid #fff;
    padding: 10px 25px;
    border-radius: 16px;
    border-style: round;
    color: white;

}

.courses ul li a.java:hover{
  background-color: #fff;
  color:purple;
}
























#bottom {
   position: absolute;
    height: 35px;
    border-style: round;
    width: 100%;
    background-color:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ;
    top:3620px;

}
#bottom li{
  list-style: none;


}
#bottom li a{
  position: absolute;
  padding-top: 5px; 
  padding-left: 100px; 
  letter-spacing: -1px;
  font-size: 15px;
  color: white;
  text-decoration: none;   
}
#bottom li a.back{
   border:.5px solid #fff;
    padding: 10px 25px;
    border-radius: 16px;
    border-style: solid;
    text-align: center;
    color: white;
    width: 96%;

}

#bottom li a.back:hover{
    background-color: green;
  color:purple;
}

#bottomtaskbar{
    position: absolute;
    height: 200px;
    border-style: round;
    width: 100%;
    background-color:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ;
    top:3670px;
}

#aboutus h1{
   position: absolute;
  padding-top: 20px;
    padding-left: 90px;
  letter-spacing: -1px;
  font-size: 25px;
  color: black;

}
#aboutus h2{
   position: absolute;
   padding-top: 90px;
   padding-left: 90px;
   letter-spacing: 0px;
   font-size: 15px;
   color: white;

}

.services h2{
  text-decoration: none;
   position: absolute;
  padding-top: 20px;
    padding-left: 550px;
  letter-spacing: -1px;
  font-size: 25px;
  color: black;
}

.services ul{
  float: right;

  list-style: none;
  margin-top: 75px;
  margin-right: 20px;
}

.services ul li{
    display: inline-block;
    margin-right: 80px;

}

.services ul li a{
  color:white;
  text-decoration:inline;
  padding: 5px 0.2px;
  transition: 0.5s ease;
}

.carriers{
    position: absolute;
    height: 80px;
    border-style: round;
    width: 100%;
    background-color:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ;
    top:3900px;

}


.carriers h2{
  text-decoration: none;
   position: absolute;
  padding-top: 10px;
    padding-left: 50px;
  letter-spacing: -1px;
  font-size: 25px;
  color: black;
}

.carriers ul{
  float: right;
  list-style: none;
  margin-top: 15px;
  margin-right: 200px;
}

.carriers ul li{
    display: inline-block;
    margin-right: 100px;

}

.carriers ul li a{
  color:white;
  text-decoration:inline;
  padding: 5px 0.2px;
  transition: 0.5s ease;
}


.sociallinks{

  position: absolute;
    height: 80px;
    border-style: round;
    width: 100%;
    background-color:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ;
    top:4000px;

}

.sociallinks h2{
  text-decoration: none;
   position: absolute;
  padding-top: 20px;
    padding-left: 50px;
  letter-spacing: -1px;
  font-size: 25px;
  color: black;
}

.sociallinks ul{
  float: right;
  list-style: none;

  margin-top: 5px;
  margin-left: 200px;
}

.sociallinks ul a{
  color:black;
  text-decoration:inline;
  padding: 5px 0.2px;
  padding-left: 150px;
  
}




.discover{

  position: absolute;
    height: 100px;
    border-style: round;
    width: 100%;
    background-color:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ;
    top:4100px;

}

.discover h2{
  text-decoration: none;
   position: absolute;
  padding-top: 20px;
    padding-left: 50px;
  letter-spacing: -1px;
  font-size: 25px;
  color: black;
}

.discover ul{
  float: right;
  list-style: none;
  margin-top: 8px;
  margin-left: 120px;
}

.discover ul li{
  display: inline-block;
  margin-left: 180px;

}
.discover ul li a{
  color:white;
  font-size: 15px;
  text-decoration:inline;
  padding: 2px 0.1px;
}


.bottomlogo p{
    float: left;
    position: absolute;
    top: 4300px;
    color: white;
    font-size: 30px;
    left: 40px;
    color: white;
}


.bottomlogo h2{
    float: right;
    position: absolute;
    padding-left: 500px;
    top: 4390px;
    color: white;
    font-size: 13px;
    left: 40px;
    color: white;
}


//slider part styling

#container{
  width: 85%;
  height: 350px;
  padding-left: 40px;
  border:1px solid black; 
  position: relative;
}

#container>img{
  width: 85%;
  height: 70%;
  border-color:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ; 
  border-radius: 60px ;
  border-style: round;
  top: 200px;
  left: 100px;
  position: absolute;
}

#container>.btn{
  position: absolute;
  width: 80px;
  height: 80px;
  border:none;
  border-radius: 25px;
  top: 370px;
  background: linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ;
  color: black;
  font-size: 40px;
}

#container>#btn1:hover{
  box-shadow: 10px 0px 20px 0px black;
}

#container>#btn2:hover{
  box-shadow: -10px 0px 20px 0px black;
}


#container>#btn2{
  position: relative;
  float: right;
}

//search box styling detail box


.dealersdetails{
  top: 1000px;
  border-radius: 2px solid;
  border-width: 80%;
  background-color: grey;
  height: 1000px;
  width: 80%;
}
.dealersdetails p{
  font-size: 36px;
  color: white;
  padding-top: 10px;
  padding-bottom: 30PX;
  padding-left: 200px; 
}

.dealersdetails{

  position: absolute;
    height: 3400px;
    border-style: border-box;
    border-radius: 2%; 
    border:2px solid round;
    width: 100%;
    background-color:#ce93d8;
   top:200px;


}
.dealersdetails h1{
   font-size: 26px;
   color: #8d6e63;
   font-family: century-gothic;
   top: 100px;
   padding-top: 100px;
   padding-left: 100px;
   padding-bottom: 40px;
   
}
.dealersdetails h2{
   font-size: 20px;
   color: white;
   padding-left: 100px;
   font-family: century-gothic;
  
}

.book h2 a{
    text-decoration: none;
}

 .book h2 a.book1{

     border:2px solid #fff;
    padding: 10px 25px;
    border-radius: 16px;
    border-style: round;
    color: white;
}
.book h2 a.book1:hover{
     background-color: #fff;
  color:purple;
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


<div class="dealersdetails">

  <form method="POST">
     <p>All Dealers of <b><?php echo $_POST['city'] ?> </b>are available here</p>
   
   <?php
    

    if(isset($_POST['submit']))
    {  
      $s1=$_POST['city'];             
      $query="SELECT * FROM dealers WHERE City='$s1'" ;      
      
      $query_run=mysqli_query($conn,$query);
      $result=mysqli_num_rows($query_run);
  
      if($result>0)
      {
    
               while($row=mysqli_fetch_assoc($query_run))
                {
        ?>
        
        <h1> Dealers Name: <?php echo $row['Fullname'] ?> </h1>
        <h2>
        <label>Email:-</label>  <?php echo $row['email'] ?><br>
        <label>Age:-</label> <?php echo $row['age'] ?><br>
        <label>Phone:-</label><?php echo $row['phone1'] ?><br>
        <label>Alternate Phone:-</label><?php echo $row['phone2'] ?><br>
        <label>Nationality:-</label> <?php echo $row['country'] ?> <br>
        <label>City:-</label> <?php echo $row['city'] ?><br>
        <label>Dealers Address:-</label> <?php echo $row['address'] ?><br>
        <label>RC Number:-</label> <?php echo $row['RC Number'] ?><br>
        <label>Transport Description:-</label> <?php echo $row['Transport brief'] ?><br>
         <label>Images of Transport:-</label> <?php echo $row['Image'] ?><br>
       
      </h2><br>
      <div class="book">
        <h2>Click Below for booking </h2><br>
      <h2><a class="book1" href="$">Book it now</a></h2>
      </div >


     <?php
        }
       }      
        
      
      }
?>




  </form>
  
</div>






<div id="bottom">
	 <li><a class="back" href="#"> Back To Top</a></li>

</div>



<div id="bottomtaskbar">


          <div id="aboutus">
            <h1>About us</h1>
            <h2>We are a team of young, ambitious<br> and enthusiastic people, here with <br>a platform with professionals to <br>help you gain practical exposure.</h2>
            
          </div>


  <div class="services">
  <h2 >Services</h2>
          
       <ul>
        <li><a href="#">Transport</a></li>
        <li><a href="#">Grocery</a></li>
        <li><a href="#">Food</a></li>
        <li><a href="#">Workers</a></li>
       </ul>
       </div>
   
</div>
 
<div class="carriers">
  <h2 >Carriers</h2>
           
       <ul>
        <li><a href="#">Area Manger</a></li>
        <li><a href="#">Workers</a></li>
        <li><a href="#">Delivery boy</a></li>
        <li><a href="#">Technician</a></li>
       </ul>
    
       </div>
      
</div>

  

<div class="sociallinks">
          <h2>Social links<h2> 
     <ul>
      
      <a href="#" class="fa fa-facebook"></a></li>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-instagram"></a>
</ul>
    <hr size=".1%"  color="black">
</div>




 <div  class="discover">
  <h2>Discover the site<h2>
       <ul>
        <li><a href="#">terms & conditions</a></li>
        <li><a href="privacy.php">Privacy policy</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="#">Contact us</a></li>
       </ul>

    <hr size=".1%"  color="black">
  

</div>

<div class="bottomlogo">
			<p>Meet your Need</p>

			<h2>Copyright © 2019 ANI Technologies Pvt. Ltd. All rights reserved.</h2>
			

		</div>



</body>


</html>
