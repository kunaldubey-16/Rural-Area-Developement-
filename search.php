<?php
include("connection.php");
error_reporting(0);
session_start();
$errors=array();
?>







<!DOCTYPE html>
<html>
<head>
	<title>search</title>
</head>
<style >
        
        
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
<body>

        <form method="POST">
        	<input type="search" name="email" placeholder="city" required="">
        	<input type="submit" name="submit" >        	
        </form>




        <?php
         if (isset($_POST['submit'])) {
         	$s1=$_POST['email'];
         	
         	$query="SELECT * FROM signup WHERE email='$s1'        ";
         	$query_run=mysqli_query($conn,$query);
         	
         	while ($row=mysqli_fetch_array($query_run)) {
         	?>
         	<form method="POST">
         		<input type="text" name="Username" value="<?php  echo($row['username'])?>">
         		<input type="text" name="email" value="<?php  echo($row['email'])?>">

         		         		<input type="text" name="password_1" value="<?php  echo($row['password_1'])?>">
         		         		<input type="text" name="password_2" value="<?php  echo($row['password_2'])?>">

         		
         	</form>
         	<?php
         	}
         	
         }

        ?>
</body>
</html>