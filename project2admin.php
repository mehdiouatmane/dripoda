<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">     
<title>project2</title>
<style>
*{ padding:0; border:0; margin:0; outline: none !important;  list-style: none; }  
*, ::after, ::before {    box-sizing: border-box;}  
html , body {direction: rtl; }    
@font-face {   font-family: 'Stingray';   font-style: normal;   font-weight: 400;   src: local('Stingray'), url('https://fonts.cdnfonts.com/s/22150/Stingray.woff') format('woff');} 
</style>
<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800">
<link rel="stylesheet" href="http://fonts.cdnfonts.com/css/font">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script  type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link rel="stylesheet" href="https://wowjs.uk/css/libs/animate.css"> 
<script type="text/javascript"  src="https://wowjs.uk/dist/wow.min.js"></script>
<script> new WOW().init(); </script>






<?php
$con=mysqli_connect("localhost","root","root","fedex");             

session_start();


if(isset($_POST['submit']))  
{	
        if(   empty($_POST['user'])  ||  empty($_POST['password'])   )  	 
		{	  
		   echo'Euror please enter user password'; 	
		}
		else 
		{
            $user = $_POST['user'];
            $password = $_POST['password'];
			 
            $query = "INSERT INTO testtable (user , password) VALUES ('$user' , '$password' )";
            $result = mysqli_query($con,$query);
            if($result) 	  {	 header("location:view.php");	  } 	  else	  {		  echo'Please Check Your Query';	  }
        }		
}
?>


<form action="" method="post"> 
<input type="text" placeholder="user" name="user"   /> 
<input type="password" placeholder="password"  name="password"  />
<input type="submit" value="INSERT"  name="submit"   />
</form>



