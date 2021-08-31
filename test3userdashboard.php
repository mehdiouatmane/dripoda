<?php
$con=  mysqli_connect("localhost", "root","root" , "freedbtech_wordpresst");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
session_start();
if ( !isset( $_SESSION['email'] ) || $_SESSION['role']!="user"  ) {	header('location:test3login.php');} 
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
                    <div class="iconeuser"><a href="test3userprofel.php"> <i class="fas fa-user"></i> </a></div>
	
	
	                <?php   if( isset(  $_POST['logout'] ) ){    session_destroy();  header("location:test3login.php");  }  ?>
					 <div class="iconepower">   <form  method="POST"  action="" >  <button type="submit"   name="logout" >   <i class="fas fa-power-off"></i></button>   </form>  </div>
					
		    </div> 
			</div> 

		
   </div>		
</div>
<br/>














<style>
.container1 {background-color:transparent; width:100%; height:auto; }
   .container1 .row1{background-color:transparent;   padding:0.5%; margin:0% 5%;    display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  }
         
		 .container1 .row1 .col1{background-color:transparent;  width:50%; }      
		 .container1 .row1 .col1 .content1  {background-color:#23fb47;   padding:3%;  margin:0% 2%;  border-radius: 15px;       display:grid; align-items:center; justify-content:center; text-align:center;        }  
                .container1 .row1 .col1 .content1 .solde { color:black; font:600 15px 'cairo';}
				.container1 .row1 .col1 .content1 .prix{color:white; font:800 20px 'cairo';}
		 .container1 .row1 .col2{background-color:transparent;  width:50%; }      
		 .container1 .row1 .col2 .content1   {background-color:#27d4fb;  padding:3%;  margin:0% 2%;  border-radius: 15px;       display:grid; align-items:center; justify-content:center; text-align:center;      }  
            .container1 .row1 .col2 .content1 .dernierpaiement{color:black; font:800 15px 'cairo';}
			.container1 .row1 .col2 .content1 .Validé{color:white; font:800 20px 'cairo';}
 
@media only screen and (max-width:360px)  
{
  .container1 .row1 .col1 .content1 .solde { color: rgba(0,0,0,.5); font:600 13px 'cairo';} 
  .container1 .row1 .col2 .content1 .dernierpaiement{color: rgba(0,0,0,.5); font:800 13px 'cairo';}
}
</style>



<div class="container1">
  <div class="row1">
		
			<div class="col1"> 
		    <div class="content1">
                   <div class="solde">   SOLDE </div>   
				   <div class="prix">  		  
						   <?php
							$email=$_SESSION['email'] ;
							$query  =  mysqli_query(      $con   ,     "  select  sum(prix) from ribhnumsoldeclien where email='".$email."'  "           );
							foreach($query as $row)	
							{	
							  echo 0 + $row['sum(prix)'] ; 
							}    
						   ?>£  
				   </div> 
		    </div> 
			</div>
			
			<div class="col2"> 
		    <div class="content1">
                   <div class="dernierpaiement">   DERNIER PAIEMENT </div>      
				   <div class="Validé"> Validé </div>  
		    </div> 
			</div> 

		
   </div>		
</div>
<br/>






















<style>
.container2 {background-color:transparent; width:100%; height:auto; }
   .container2 .row1{background-color:transparent;   padding:0.5%; margin:0% 5%;    display:block; align-items:flex-start; justify-content:center; text-align:center; flex-wrap:wrap; grid-row-gap:2rem; }
         
		 .container2 .row1 .col1{background-color:transparent;  width:100% }      
		 .container2 .row1 .col1 .content1  {background-color:white;   padding:2%;  margin:0% 2%;  border-radius: 15px;        display:block; align-items:center; justify-content:center; text-align:left;           }  
             
			 .container2 .row1 .col1 .content1  .text1 {color:red; font:800 20px 'cairo';      display:flex; align-items:center; justify-content:center; text-align:center;}
			 .container2 .row1 .col1 .content1  .text2 { border:solid 1px black; display:block; align-items:center; justify-content:center; text-align:center; grid-column-gap:2rem;   }
			     .container2 .row1 .col1 .content1  .text2 .text2a {color:blue; font:800 20px 'cairo';}
				 .container2 .row1 .col1 .content1  .text2 .text2b {color:green; font:800 20px 'cairo';}
				 .container2 .row1 .col1 .content1  .text2 .text2c {color:black; font:600 16px 'cairo';}
				 .container2 .row1 .col1 .content1  .text2 .text2d {color:black; font:600 16px 'cairo';}
				
		
		

@media only screen and (max-width:360px)  
{
          .container2 .row1{padding:0%; margin:0% 0%;   }			
}
</style>





<div class="container2">
  <div class="row1">
		
			<div class="col1"> 
		    <div class="content1">
			
                   <div class="text1">   Obtenir un code </div>    <br/> 
				   
				      <div class="text2">  
						  <div class="text2a"> 08 98 40 14 65 </div>   
						  <div class="text2b"> +4 EUR   </div>
					      <div class="text2c"> 3 CODES PAR CLIENT SUR LE 5 APPELS  </div>   
					      <div class="text2d">  8136 appels restants </div> 
					   </div>
				    
				   
				   	<div class="text2">  
				      <div class="text2a"> 08 98 40 12 61 </div>   
					  <div class="text2b"> +1.6 EUR   </div>
					  <div class="text2c">  1 CODE PAR CLIENT SUR LE 2 APPELS  </div>   
					  <div class="text2d">  9969 appels restants </div> 
				   </div>  
				    
			</div> 
			</div>

		
   </div>		
</div>
<br/>



	

























<style>
.container3 {background-color:transparent; width:100%; height:auto; }
   .container3 .row1{background-color:transparent;   padding:0.5%; margin:0% 5%;    display:block; align-items:flex-start; justify-content:center; text-align:center; flex-wrap:wrap; grid-row-gap:2rem; }
         
		
		 .container3 .row1 .col1{background-color:transparent;  width:100%; }      
		 .container3 .row1 .col1 .content1   {background-color:white;    padding:3%;  margin:0% 2%;  border-radius: 15px;       display:grid; align-items:center;  text-align:left; flex-direction: column;     }  
             .container3 .row1 .col1 .content1  .text1 {color:red; font:800 20px 'cairo';      display:flex; align-items:center; justify-content:center; text-align:center;}
			 .container3 .row1 .col1 .content1  .text2 { background-color:#65ff49;  padding:.75rem 1.25rem;     color:#1b46e4; font:400 19px 'cairo';   display:flex; align-items:center; justify-content:center; text-align:center;}
             .container3 .row1 .col1 .content1  .text3 {color:#1056f3; font:800 20px 'cairo';   display:flex; align-items:center; justify-content:center; text-align:center;}
	    	 .container3 .row1 .col1 .content1  .posinputtext{ display:flex; align-items:center; justify-content:center; text-align:center; }              .container3 .row1 .col1 .content1  .inputtext{background-color:#fff; width:100%; padding:10px 0; border:solid 1px #ced4da;   border-radius:2px; color:black; text-ident:2rem;  margin-bottom:10px;}              .container3 .row1 .col1 .content1  .inputtext:focus { background-color: #fff;   border:solid 1px #80bdff;  box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);   outline: none !important;   color:#495057; text-ident:2rem; }  	     .container3 .row1 .col1 .content1  .inputtext::placeholder {color:#cdcdcdc9; font:200 15px sans-serif;} 
             .container3 .row1 .col1 .content1  .posinputsubmit {  display:flex; align-items:center; justify-content:center; text-align:center;}           .container3 .row1 .col1 .content1  .inputsubmit{ background:linear-gradient( 40deg ,#45cafc,#303f9f);   padding:10px 50px;  border:solid 1px #007bff;   border-radius:5px;  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);    color:white;  font:700 15px 'cairo';           display:flex; align-items:center; justify-content:center; text-align:center;}



@media only screen and (max-width:360px)  
{

          .container3 .row1{padding:0%; margin:0% 0%;   }
 			
}
</style>





<div class="container3">
  <div class="row1">
		
			
			<div class="col1"> 
		    <div class="content1">
                   <div class="text1">   Valider un code </div>      
				   <div class="text2">   ATTENTION : CODE VALABLE 60 MINUTES ! </div>  
				   <div class="text3">   Code </div>
                <form action="" method="post" enctype="multipart/form-data"> 				   
				     <div class="posinputtext"> <input type="text"   placeholder="" value=""  name="code"  class="inputtext">   </div>
					 <div style="display:none;"> <input type="text"   placeholder="" value="4.5"  name="prix"  class="inputtext">   </div>
				     <div class="posinputsubmit">  <input type="submit" placeholder="" value="VALIDER LE CODE" name="submit" class="inputsubmit">  </div> 
               </form>

		    </div> 
			</div> 

		
   </div>		
</div>
<br/>




<?php


if(isset($_POST['submit']))  
{		
        $email=$_SESSION['email'] ; 		
		$code=$_POST['code'];
		$prix = $_POST['prix'];
		$query = "INSERT INTO ribhnumsoldeclien (email , code , prix ) VALUES ('$email' , '$code' , '$prix' )";	
		$api_key="uOuTOyy6g1JMi6q60Cz8";
		$url='https://passpayment.shop/api.php?code_audio='.$code.'&api_key='.$api_key ;
		$requete=file_get_contents($url);  
		$reponse=json_decode($requete);
			
			
		if($reponse->Reponse=="ok")  
		{	
		   echo "<script>alert('  le code est valide')</script>";  
		}  	
		elseif($reponse->Reponse=="nok")  
		{	
		   echo "<script>alert(' le code no valide')</script>";  

           if( mysqli_query($con,$query) ) 	  {	header("location:test3.php"); 	  } 	  else	  {		  echo'Please Check Your Query';	  }	
	
	
		}  	

} 


?>





















<style>
.container4 {background-color:transparent; width:100%; height:auto; }
   .container4 .row1{background-color:transparent;   padding:0.5%; margin:0% 4%;    display:flex; align-items:flex-start; justify-content:center; text-align:center; flex-wrap:wrap;    }
        
		
		 .container4 .row1 .col1{background-color:transparent;  width:100%; }      
		 .container4 .row1 .col1 .content1  {background-color:white;   padding:2%;  margin:0% 2%;  border-radius: 15px;              }  
            
				.container4 .row1 .col1 .content1 .postext1{  padding:0px 20px; display:flex; justify-content:space-between;  }
					 .container4 .row1 .col1 .content1 .postext1 .text1{ color:black; font:800 20px 'cairo';  }
					 .posicon {position:relative;}   .iconplus  {color:black; position: absolute; top:0.7em; right:-1em;   }    .iconplushover{display:none;}                  .iconminus {color:black; position: absolute; top:0.7em; right:-1em; display:none;} .iconminushover{display:block;}

 				 .bank{  width:auto;  height:auto;  margin:2% 0%; display:none;  align-items:flex-start; justify-content:center; text-align:center; grid-row-gap:1rem;  }    .bankhover{  display:flex;  } 
                     .container4 .row1 .col1 .content1  .bank .col1{ width:30%; }
					 .container4 .row1 .col1 .content1  .bank .btn1{ padding:10px 12px 8px; border:solid 1px #eee; border-radius:8px;   cursor: pointer;   display:flex;  align-items:center; justify-content:center;  text-align:left;   grid-column-gap:1rem;}
						   .container4 .row1 .col1 .content1  .bank .btn1 .img1{max-width:100%; width:80px; height:auto;}
						   .container4 .row1 .col1 .content1  .bank .btn1 .postext .text1 {color:black; font:800 15px 'cairo';}				
					 .container4 .row1 .col1 .content1  .bank .col2{width:70%; }	
					 .container4 .row1 .col1 .content1  .bank .form { display:flex; align-items:center; justify-content:center;  text-align:center; }	
						   .container4 .row1 .col1 .content1  .bank .form .inputtext {background-color:#fff; width:500px; height:40px;  margin-bottom:10px;  border:solid 1px #ced4da;   border-radius:2px; color:#495057; text-indent:1rem;  }            .container4 .row1 .col1 .content1  .bank .form .inputtext:focus { background-color: #fff;   border:solid 1px #80bdff;  box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);   outline: none !important;   color:#495057; text-indent:1rem; }   .container4 .row1 .col1 .content1  .bank .form .inputtext::placeholder {color:#cdcdcdc9; font:600 15px sans-serif;} 
						   .container4 .row1 .col1 .content1  .bank .form .inputbtn{  background: linear-gradient(40deg,#45cafc,#303f9f); width:500px; height:auto;  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);      padding: 10px 30px;    border:solid 1px #007bff;   border-radius: 2px;   color:white; font:600 15px 'cairo';  text-transform: uppercase;       display:flex; align-items:center; justify-content:center;  text-align:center;}						 
									

   
   
@media only screen and (max-width:980px)  
{
.bank{ display:none;  }    .bankhover{  display:grid;  }                
	.container4 .row1 .col1 .content1  .bank .col1{ width:100%; }
	.container4 .row1 .col1 .content1  .bank .col2{ width:100%; }	

	   .container4 .row1 .col1 .content1  .bank .form .inputtext {background-color:#fff; width:300px; height:40px;  margin-bottom:10px;  border:solid 1px #ced4da;   border-radius:2px; color:#495057; text-indent:1rem;  }            .container4 .row1 .col1 .content1  .bank .form .inputtext:focus { background-color: #fff;   border:solid 1px #80bdff;  box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);   outline: none !important;   color:#495057; text-indent:1rem; }   .container4 .row1 .col1 .content1  .bank .form .inputtext::placeholder {color:#cdcdcdc9; font:200 15px sans-serif;} 
		.container4 .row1 .col1 .content1  .bank .form .inputbtn{  background: linear-gradient(40deg,#45cafc,#303f9f); width:300px; height:40px;  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);      padding: 10px 30px;    border:solid 1px #007bff;   border-radius: 2px;   color:white; font:600 15px 'cairo';  text-transform: uppercase;       display:flex; align-items:center; justify-content:center;  text-align:center;}						 
									

}


</style>




<div class="container4">
  <div class="row1">
  
			<div class="col1"> 
		    <div class="content1">
			
				<div class="postext1">
				  <div class="text1">  Demander un paiement </div>
				  <a class="posicon">  <i class="iconplus fas fa-plus"></i>  <i class="iconminus fas fa-minus"></i>  </a>
				</div> 
				
				<div class="bank">
				      <div class="col1">
					  <div class="btn1">
						 <img class="img1" src="/img/rib7mnnum/cashplus.png" alt="">
						 <div class="postext">  <div class="text1"> Cash+ </div> <div class="text2">  5 EUR à partir de 150 EUR </div> </div>
					  </div>
					  </div>
					  
					  <div class="col2">
					  <div class="form">
					  <form  action=""     method="post" enctype="multipart/form-data"> 
							 <div> <input type="text"        placeholder="Nom de famille "    value=""                       name="nom"        id="" class="inputtext"/> </div>
							 <div> <input type="text"        placeholder="Prénom"             value=""                       name="prenom"     id="" class="inputtext"/> </div>
							 <div> <input type="text"        placeholder="CNI"                value=""                       name="cni"        id="" class="inputtext"/> </div>
							 <div> <input type="number"      placeholder="Montant"            value=""                       name="montant"    id="" class="inputtext" min="200" /> </div>
							 <div> <input type="submit"      placeholder=""                   value="Demander le paiement"   name="submitt"           id="" class="inputbtn"/> </div>
					  <form>
					  </div>
                      </div>					  
				</div>
				
         	</div> 
			</div>
	
			
   </div>		
</div>
<br/>

<script>
$(".posicon").click (function(){    $(".iconplus").toggleClass("iconplushover");  $(".iconminus").toggleClass("iconminushover");           $(".bank").toggleClass("bankhover");     });
</script>








<?php


if(isset($_POST['submitt']))  
{		
        $email=$_SESSION['email'] ; 		
		$nom=$_POST['nom'];
		$prenom = $_POST['prenom'];
		$cni = $_POST['cni'];
		$montant = $_POST['montant'];
		$query = "INSERT INTO ribhnumpaiement (email , nom , prenom , cni , montant  ) VALUES ('$email' , '$nom' , '$prenom' , '$cni' , '$montant' )";	
		
		 if(     mysqli_query( $con  ,  "  delete from ribhnumsoldeclien where email='".$email."'    "   )  )      

		if( mysqli_query($con,$query) ) 	  {	header("location:test3.php"); 	  } 	  else	  {		  echo'Please Check Your Query';	  }	


       

} 



	
?>












<style>
.container5 {background-color:transparent; width:100%; height:auto; }
   .container5 .row1{background-color:transparent;   padding:0.5%; margin:0% 4%;    display:flex; align-items:flex-start; justify-content:center; text-align:center; flex-wrap:wrap;    }
        
		
		 .container5 .row1 .col1{background-color:transparent;  width:100%; }      
		 .container5 .row1 .col1 .content1  {background-color:white;   padding:2%;  margin:0% 2%;  border-radius: 15px;              }  
           
		   .container5 .row1 .col1 .content1 .postext1{  padding:0px 20px; display:flex;  justify-content:space-between;  }
			     .container5 .row1 .col1 .content1 .postext1 .text1{ color:black; font:800 20px 'cairo';  }
                 .posicon2 {position:relative;}   .iconplus2  {color:black; position: absolute; top:0.7em; right:-1em;   }    .iconplus2hover{display:none;}                  .iconminus2 {color:black; position: absolute; top:0.7em; right:-1em; display:none;} .iconminus2hover{display:block;}

 				 .bank2{  width:auto;  height:auto;  padding:0px 20px;  margin:2% 0%; display:none;  align-items:flex-start; justify-content:flex-start; text-align:left; grid-column-gap:0.5rem;  }    .bank2hover{  display:flex;  } 
                  			.poscheckcircle { display:flex; align-items:flex-start; justify-content:flex-start; text-align:left;  }
							   .checkcircle{color:green; font-size:20px; margin-top:10px;}
							.posresi { display:grid; align-items:flex-start; justify-content:flex-start; text-align:left;  }
							   .posresi .text1{color:black; font:600 20px 'cairo';}
							   .posresi .text2{color:black; font:500 20px 'cairo';}
                               .posresi .text3{color:black; font:400 14px 'cairo';}
   
@media only screen and (max-width:980px)  
{

}

@media only screen and (max-width:360px)  
{   
				
}
</style>




<div class="container5">
  <div class="row1">
		
			<div class="col1"> 
		    <div class="content1">
				<div class="postext1">
				  <div class="text1">  Historique des paiements </div>
				  <a class="posicon2">  <i class="iconplus2 fas fa-plus"></i>  <i class="iconminus2 fas fa-minus"></i>  </a>
				</div> 
				<div class="bank2">
				<div class="poscheckcircle"> <i class="checkcircle fas fa-check-circle"></i> </div>
				<div class="posresi">
					 <div class="text1"> 200 MAD le date </div>
					 <div class="text2"> Virement bancaire à name codrib </div>
					 <div class="text3"> 93.00 EUR - 7.65 EUR de frais </div>
				</div>
				</div>
         	</div> 
			</div>
	
			
   </div>		
</div>
<br/><br/><br/>

<script>
$(".posicon2").click (function(){    $(".iconplus2").toggleClass("iconplus2hover");  $(".iconminus2").toggleClass("iconminus2hover");           $(".bank2").toggleClass("bank2hover");     });
</script>









			
			
			
			
			
			






<style>
.container6 {background-color:transparent; width:100%; height:auto; }
   .container6 .row1{background-color:transparent;   padding:0.5%; margin:0% 5%;    display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  }
         
		 .container6 .row1 .col1{background-color:transparent;  width:100%; }      
		 .container6 .row1 .col1 .content1  {background-color: rgb(12, 75, 115); background-image: url(https://bank2key.fr/img/telegram.png); background-position:right center; background-repeat:no-repeat; background-size:auto 100%;      padding:3%;  margin:0% 1%;  border-radius:15px;                  display:flex; align-items:center; justify-content:flex-start; text-align:center;        }   
             .telegram{  padding: 0px 7rem 0px 2rem;  color:rgb(255, 255, 255);  font-size:20px; text-decoration:none;   text-align:left;     }
	
@media only screen and (max-width:800px)  
{
	.container6 .row1 .col1 .content1  {background-color: rgb(12, 75, 115); background-image: url(https://bank2key.fr/img/telegram.png); background-position:right center; background-repeat:no-repeat; background-size:auto 100%;      padding:3%;  margin:0% 1%;  border-radius:15px;                  display:flex; align-items:center; justify-content:flex-start; text-align:center;        }   
             .telegram{  padding: 0px 7rem 0px 1rem;  color:rgb(255, 255, 255);  font-size:15px; text-decoration:none;  text-align:left;     }
	
}
</style>



<div class="container6">
  <div class="row1">
		
			<div class="col1"> 
		    <div class="content1">
                   <a class="telegram">  Rejoins nous sur le canal officiel Telegram de Bank2Key  </a>    
		    </div> 
			</div>


		
   </div>		
</div>
<br/>

			


