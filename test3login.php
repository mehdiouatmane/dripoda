<?php
$con=  mysqli_connect("localhost", "root","root" , "freedbtech_wordpresst");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
session_start();
?>



<title>Bank2Key</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     

<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>


<style>html, body{  background-color:#f5f4f5;  padding:0; border:0; margin:0;  touch-action: manipulation; }   ul li {list-style-type:none;}     </style>

















<style>
.container0 {background-color:black; width:100%; height:auto; }
   .container0 .row1{background-color:transparent;   padding:0.5%; margin:0% 5%;    display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  }
         
		 .container0 .row1 .col1{background-color:transparent;  width:50%; }      
		 .container0 .row1 .col1 .content1  {background-color:transparent; padding:0%; margin:0% 0%;         display:flex; align-items:center; justify-content:flex-start; text-align:center;        }  
               .logo{color:white; font:800 20px 'cairo';}
		 .container0 .row1 .col2{background-color:transparent;  width:50%; }      
		 .container0 .row1 .col2 .content1   {background-color:transparent;  padding:0%; margin:0% 0%;         display:flex; align-items:center; justify-content:flex-end; text-align:center;   grid-column-gap:2rem;     }  
                .container0 .row1 .col2 .content1 .login{color:white; font:800 20px 'cairo'; text-decoration:none; text-transform: uppercase;} 
				.container0 .row1 .col2 .content1 .inscription{color:white;  font:800 20px 'cairo';  text-decoration:none; text-transform: uppercase;} 
 
@media only screen and (max-width:360px)  
{
}
</style>



<div class="container0">
  <div class="row1">
		
			<div class="col1"> 
		    <div class="content1">
                   <div class="logo">   Bank2Key  </div> 
		    </div> 
			</div>
			
			<div class="col2"> 
		    <div class="content1">
                    <div ><a class="login" href="test3login.php">login</a></div>
					<div ><a class="inscription" href="test3inscription.php">inscription</a></div>
		    </div> 
			</div> 

		
   </div>		
</div>
<br/><br/><br/>


















	  

 

<?php

if (  isset(  $_POST['login']  )  )
{     

	$query = mysqli_query($con," SELECT * FROM ribhnumuser WHERE email='".$_POST['email']."'  AND  password='".$_POST['password']."'   ");
	$row=mysqli_fetch_assoc($query);
	
	session_regenerate_id();
	$_SESSION['email']=$row['email']; 
	$_SESSION['role']=$row['role']; 
	session_write_close();
	
	if(  mysqli_num_rows($query)==1  && $row["role"]=="admin" ) 
	{  
		 $_SESSION['email']=$_POST['email'];    
		 header("location:/test3admin.php");	
				
	}
	elseif(  mysqli_num_rows($query)==1  &&  $row ["role"]=="user" ) 
	{  
		 $_SESSION['email']=$_POST['email'];    
		 header("location:/test3userdashboard.php");	
				
	}
	else
	{
		 echo"eureur users or password";
	}

}
?>







<style>
.container1 {background-color:transparent; width:100%; height:auto; }
   .container1 .row1{background-color:transparent;   padding:0%; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  }
         
		 .container1 .row1 .col1{background-color:transparent;  width:100%; }      
		 .container1 .row1 .col1 .content1  {background-color:transparent;   padding:0%;  margin:0% 0%;  border-radius:0px;       display:grid; align-items:center; justify-content:center; text-align:center;        }  
             
			  .container1 .row1 .col1 .content1 .posform{background-color:white; width:500px; height:300px; display:grid; align-items:center; justify-content:center; text-align:center;   }
				.container1 .row1 .col1 .content1 .posform .text1{color:black; font:800 20px 'cairo';}
				.container1 .row1 .col1 .content1 .posform  form{margin:0;}
				.posinputtext {  display:flex; align-items:center; justify-content:center; text-align:center;}
				.inputtext {background-color:#fff; width:400px; height:40px; margin-bottom:10px; border:solid 1px #ced4da;   border-radius:2px; color:#495057; text-indent:1rem; }         
				.inputtext:focus { background-color: #fff;   border:solid 1px #80bdff;  box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);   outline: none !important;   color:#495057; text-indent:1rem; }
				.inputtext::placeholder {color:#cdcdcdc9; font:700 15px sans-serif;} 
				 
				 .posinputsubmit {  display:flex; align-items:center; justify-content:center; text-align:center;}
				 .inputsubmit{ background:linear-gradient( 40deg ,#45cafc,#303f9f);   padding:10px 50px;  border:solid 1px #007bff;   border-radius:5px;  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);    color:white;  font:700 15px 'cairo';           display:flex; align-items:center; justify-content:center; text-align:center;}

			  

</style>






<div class="container1">
  <div class="row1">
		
			<div class="col1"> 
		    <div class="content1">
			
			    
				
                <div class="posform">
					<div class="text1"> Connexion  </div>
					<form method="POST"  action="" >
						<div class="posinputtext">   <input type="text"      placeholder="email"       value=""    name="email"      id=""   class="inputtext"   /></div>
						<div class="posinputtext">   <input type="password"  placeholder="password"    value=""    name="password"   id=""   class="inputtext"  /></div>
						<div class="posinputsubmit"> <input type="submit"    value="LOGIN"             value=""    name="login"      id=""   class="inputsubmit"   /></div>
					</form>
                </div>
				
		    </div> 
			</div>
			
		
   </div>		
</div>
<br/>












