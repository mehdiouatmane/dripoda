<?php
$con=  mysqli_connect("localhost", "root","root" , "freedbtech_wordpresst");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
session_start();
if ( !isset( $_SESSION['email'] )  || $_SESSION['role']!="admin"  ) {	header('location:test3login.php');} 

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
              .iconeuser{display:flex; align-items:center; justify-content:center; text-align:center;}  .iconeuser i{color:white; font-size:20px;}
              .iconepower{display:flex; align-items:center; justify-content:center; text-align:center;}  .iconepower form{margin:0;}  .iconepower button{background-color:transparent; padding:0; margin:0; border:0;      } .iconepower i{color:white; font-size:20px;           display:flex; align-items:center; justify-content:center; text-align:center;}

 
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
 
	                <?php  if( isset(  $_POST['logout'] ) ){    session_destroy();  header("location:test3login.php");  }  ?>
					 <div class="iconepower">   <form  method="POST"  action="" >  <button type="submit"   name="logout" >   <i class="fas fa-power-off"></i></button>   </form>  </div>
					
		    </div> 
			</div> 

		
   </div>		
</div>
<br/>





















<?php
	if(isset($_POST['delete']))  {	if(     mysqli_query( $con  ,  "  delete from ribhnumsoldeclien where id='".$_GET['ID']."'    "   )  )       {	  header("location:test3user.php");	  }   	 else 	  {		 header("location:test3user.php");  	}	   }	
    										  
  
    $query  =  mysqli_query(      $con   ,     "select * from ribhnumsoldeclien   "           );
    foreach($query as $row)	
    {		
	  ?> 
	       <form action="?ID=<?php echo $row['id'] ?>"    method="post"> 
			   <?php echo $row["email"]; ?> 
			   <?php echo $row["code"]; ?>  
			   <?php echo $row["prix"]; ?> 
               <input type="submit" value="delete"  name="delete"/>			   
			   <br/>
  		  </form>			
	 <?php	
 
    }    
?>





<br/><br/><br/>






<?php
										  
  if(isset($_POST['delete']))  {	if(     mysqli_query( $con  ,  "  delete from ribhnumsoldeclien where email='".$_GET['ID']."'    "   )  )       {	  header("location:test3user.php");	  }   	 else 	  {		 header("location:test3user.php");  	}	   }	
    	
		
    $query  =  mysqli_query(      $con   ,     "  select id, email , sum(prix) from ribhnumsoldeclien group by email  "           );
    foreach($query as $row)	
    {		
	  ?> 
	       <form action="?ID=<?php echo $row['email'] ?>"    method="post"> 
			   <?php echo $row["email"]; ?> 
			   <?php echo $row['sum(prix)']   ?> 
			   <input type="submit" value="delete"  name="delete"/>			   
			   <br/>
  		    </form>
  		 			
	 <?php	
 
    }    
?>



 
