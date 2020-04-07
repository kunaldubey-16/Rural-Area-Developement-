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

  background-color:linear-gradient(185deg,rgb(110,13,193) 100%,rgb(250,42,143) 0%) ;  
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
//////////////////////////////////////////////////

.title{
    position: absolute;
    top: 30%;
    left:50%;
    transition: translate(-50%,50%);
    width: 100px;
  height: 500px;
  background:white;
}
.title h1{
  padding-top:40px;  
  padding-left: 200px;
   color: #fff;
   font-size: 55px;
   font-weight: 300;
   letter-spacing: -1px;
}


// first heading
#projectidea{
   position: absolute;
   height: 590px;
   border-style: round;
   width: 100%;
  
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


//second heading
.suggestion{
    position: absolute;
    height: 1620px;
    border-style: round;
    width: 100%;
    
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
//third heading

#slide{
    position: absolute;
    height: 700px;
    border-style: round;
    width: 100%;
    
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











//fouth heading


#education{
    position: absolute;
    height: 400px;
    border-style: round;
    width: 100%;
    background-color:red;
    border-style:2px solid;
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






















//fifith heading

#bottom {
   position: absolute;
    height: 35px;
    border-style: round;
    width: 100%;
    
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


//sisth heading
#bottomtaskbar{
    position: absolute;
    height: 200px;
    border-style: round;
    width: 100%;
 
    top:3670px;
}

#aboutus h1{
   position: absolute;
  padding-top: 20px;
    padding-left: 90px;
  letter-spacing: -1px;
  font-size: 25px;
  color: white;

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
  color: white;
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

//7th heaidngsdfsddf
.carriers{
    position: absolute;
    height: 80px;
    border-style: round;
    width: 100%;
    
    top:3900px;

}


.carriers h2{
  text-decoration: none;
   position: absolute;
  padding-top: 10px;
    padding-left: 50px;
  letter-spacing: -1px;
  font-size: 25px;
  color: white;
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

//8th heading
.sociallinks{

  position: absolute;
    height: 80px;
    border-style: round;
    width: 100%;
    
    top:4000px;

}

.sociallinks h2{
  text-decoration: none;
   position: absolute;
  padding-top: 20px;
    padding-left: 50px;
  letter-spacing: -1px;
  font-size: 25px;
  color: white;
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



//9th heading 
.discover{

  position: absolute;
    height: 100px;
    border-style: round;
    width: 100%;
    background-color:red ;
    top:4100px;

}

.discover h2{
  text-decoration: none;
   position: absolute;
  padding-top: 20px;
    padding-left: 50px;
  letter-spacing: -1px;
  font-size: 25px;
  color: white;
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
  width: 100%;
  height: 100%;
  padding-left: 40px;
   
  position: relative;
}

#container>img{
  width: 100%;
  height: 100%;
  border-color:linear-gradient(135deg,rgb(110,13,193) 0%,rgb(250,42,143) 100%) ; 
  
  border-style: round;
  top: 0px;
  left: 100px;

}

#container>.btn{
  
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

//search box styling





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














<h1>Keep Searching Your Needs</h1>	
        
	</div>       



      <div id="projectidea">
      	<h1>Working ideas</h1>
      	<img src="images/5.png">
      	<h2>Best Platform to share your ideas.<br><br><br><br>
      	<a class="share"  href="share.php">Share with us </a></h2>   	
      </div>


    



       <div class="suggestion">
             <div id ="reason">
             <h1>Why to join Us</h1>
              <h2>The best way to expand your small scale bussiness </h2>
             </div>


         

             <div id="reason1" >
        <img  src="images/6.jpg">
        <h1>Upgrade Your Bussiness </h1>
        <h2>   we offer you the best way to promote<br> and enhance your bussiness and be sticked<br> with our expert every moment for best <br>outcome.</h2>              
            </div>

             <br>

             <div id="reason2">
        <img src="images/7.jpg">
        <h1>We Stick to Our Commitment</h1>
        <h2>Our team is always at your help <br>anytime (24x7) so agree with our conditions and <br>have consistent progress.</h2>

             </div>
            

             <br>
        <div id="reason3">
        <img src="images/8.jpg">
        <h1>Always With you</h1>
        <h2>supportive at your every critical <br>situation and get help with evaltiong <br>your work.</h2>

        </div> 
           </div>


        

         <div id="slide">
       
          
  <div id="container">
    <img class="slides" src="images/20.jpg">
    <img class="slides" src="images/21.jpg">
    <img class="slides" src="images/22.jpg">
    <img class="slides" src="images/23.jpg">
    <img class="slides" src="images/24.jpg">
    <img class="slides" src="images/25.jpg">
    <img class="slides" src="images/26.jpg">
    <img class="slides" src="images/27.jpg">
    <img class="slides" src="images/28.jpg">
    <button class="btn"  onclick="plusIndex(-1)" id="btn1">&#10094;</button>
    <button class="btn"  onclick="plusIndex(1)" id="btn2">&#10095;</button>   
  </div>
</body>













        
         </div>  


<div id="education">
	<h2>JOB vaccancies Option</h2>
	<h3>Enroll yourself and get job notifications in your area. Availability of post and salary are as per the concerned companies hiring your.salary and working safety are strictly guided by MEETYOURNEED Headquaters(meetyourneed.in/hq).</h3>



	<div class ="courses">
		          <ul>
           <li><a class="ds"   href="#">Labourers & workers</a></li>


            <li><a class="dd"   href="#">Drivers</a></li> 


            <li><a class="cl"   href="#">Site manager</a></li>


            <li><a class="java"   href="">Civil Engineer</a></li>

           </ul>
		    
	</div>

      

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
        <li><a href="contactus.php">Contact us</a></li>
       </ul>

    <hr size=".1%"  color="black">
  

</div>

<div class="bottomlogo">
			<p>Meet your Need</p>

			<h2>Copyright © 2019 ANI Technologies Pvt. Ltd. All rights reserved.</h2>
			

		</div>



</body>


<script >
  
    var index=1;
    function plusIndex(n){
      index=index+1;
      showImage(index);
    }

    showImage(1);
    function showImage(n){
           var i;
           var x=document.getElementsByClassName("slides");
           if(n > x.length){ index=1};
           if(n < 1){ index=x.length};
           for(i=0;i<x.length;i++)
           {
            x[i].style.display="none";
           }
           x[index-1].style.display="block";

                          }
</script>











</html>
