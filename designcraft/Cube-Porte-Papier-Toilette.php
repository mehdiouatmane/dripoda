<?php
session_start();

if( isset($_POST['postoutputtotalitems'])  ) {  $outputtotalitems = '';  $totalitem = 0;  if(!empty($_SESSION["infocookiess1"]))  {   foreach($_SESSION["infocookiess1"] as $keys => $values)   {    $totalitem = $totalitem + 1;         $outputtotalitems .=     '       '.$totalitem.'     ';   }        }  else  {   $outputtotalitems .= '';  }      echo json_encode(      array(  'outputtotalitems'=> $outputtotalitems      )         );   exit;     } 


if(  isset($_POST["checkout"])  )
{
	date_default_timezone_set('Africa/Casablanca');  $datetime = date('m/d/Y h:i:s', time());  
	function get_ip(){   if( isset($_SERVER['HTTP_CLIENT_IP']) )   {  return $_SERVER['HTTP_CLIENT_IP'];}  elseif  ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )     { return $_SERVER['HTTP_X_FORWARDED_FOR'];}   else  { return (  isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''   ); }     }      	$ip = get_ip();            $iplocation = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));       $iplocationcity= isset($iplocation['city']) ?  $iplocation['city'] : '';       $iplocationcountry= isset($iplocation['country']) ?  $iplocation['country'] : '';   $BROWSER  =  $_SERVER['HTTP_USER_AGENT'];	
	$id='1';
	$img = $_POST["img"];
	$title = "Cube Porte Papier Toilette Brulé";
	$price = "299.00";
	$quantity= $_POST["quantity"];
	$color= $_POST["color"];
	

   
	if(isset($_SESSION["infocookiess1"]))
	{
			$is_available = 0;
			foreach($_SESSION["infocookiess1"] as $keys => $values)
			{
				if(  $_SESSION["infocookiess1"][$keys]['id'] == $id   )
				{
					$is_available++;
					$_SESSION["infocookiess1"][$keys]['id']       =  $id;
					$_SESSION["infocookiess1"][$keys]['img']      =  $img;
					$_SESSION["infocookiess1"][$keys]['title']    =  $title;
					$_SESSION["infocookiess1"][$keys]['price']    =  $price;
					$_SESSION["infocookiess1"][$keys]['quantity'] =  $quantity;
					$_SESSION["infocookiess1"][$keys]['color']    =  $color;
				}
			}
			if($is_available == 0)
			{							
				$_SESSION["infocookiess1"][] = array
				(      
                    'datetime' => $datetime,
                    'ip' => $ip, 						
					'id' => $id, 					  
					'img' => $img  ,         
					'title' => $title,             
					'price' => $price,   	          
					'quantity' => $quantity,
                    'color' => $color  					
				);
			}
	}
	else
	{
		$_SESSION["infocookiess1"][] = array
		(    
            'datetime' => $datetime,
            'ip' => $ip, 			 
			'id' => $id,   							  
			'img' => $img ,            
			'title' =>  $title,               
			'price' => $price,         	    
			'quantity' =>  $quantity,
            'color' =>  $color 			
		 );
	}
	
	
	echo "<script> window.location.href = 'checkout.php'; </script>"; 
	
}

?>

<title>Welcome</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<link rel="shortcut icon" type="image/x-icon" media="all" href="" />
<style>html, body{ background-color:#ecf0f1;  padding:0; border:0; margin:0% 0%;  touch-action: manipulation;    user-select: none;   }   ul li {list-style-type:none; text-decoration:none;  }  a{text-decoration:none; }    </style>




<style>
.container1 {width:100%; height:auto; padding:0% 0%; margin:0% 0%; }


	.row1{padding:0% 0%; margin:2% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
        .row1 .col1a{width:33.33333333333333%; display:none; }   .row1 .col1b{padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center;   }
             .menumobileopen{color:#4e5e69; font-size:20px;  cursor:pointer; }			             
			     .menumobilebackground1{background-color:rgba(0,0,0,.5); width:100%; height:100%;  z-index:10;   visibility:hidden; opacity:0;            position:fixed; left:0%; top:0%;      transition:visibility 0.5s linear,opacity 0.5s linear;      }      .menumobilebackground2{background-color:#3e505c;   width:250px; height:100%;      z-index: 1;  visibility:hidden; opacity:0;              display:inline-block;  align-items:flex-start; justify-content:flex-start; text-align:left;       position:absolute; left:-250px;  top:50%;  transform:translateY(-50%);    transition:all 0.5s ease-in-out 0s ; }        	                                          				    .menumobileclose i{color:white; font-size:25px;   position:absolute; top:0%; right:0;   cursor:pointer; }                                           .posmenumebile{ padding:10% 0% 0% 5%; margin:0% 0% 0% 0%;  }    .posmenumebile li { padding:2% 0%; color:white; font:800 20px sans-serif;  cursor:pointer;  position:relative; }
		.row1 .col2a{width:33.33333333333333%;  }   .row1 .col2b{padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center;   }
             .numberphone{color: #4e5e69; font-size: 20px; cursor: pointer;}  .numberphone span{color:black; font:300 15px 'cairo'; opacity: 0.6;}
		.row1 .col3a{width:33.33333333333333%;  }   .row1 .col3b{padding:0px 0px; margin:0% 0%;  display:flex; align-items:center; justify-content:center; text-align:center;   }
		     .logo{max-width:100%; width:300px;}
		.row1 .col4a{width:33.33333333333333%;  }   .row1 .col4b{padding:0px 0px; margin:0% 0%;  display:flex; align-items:center; justify-content:center; text-align:center; grid-column-gap:1rem;    }
             .search{color: #4e5e69; font-size: 20px; cursor: pointer;}
			 .shoppcart{color: #4e5e69; font-size: 20px; cursor: pointer;}



	  
    .row2{padding:0% 0%; margin:2% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
		.row2 .col1a{width:100%;  }   .row2 .col1b{padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center;   }
            .posmenu{background-color: transparent; padding: 0%; margin: 0% 2%; display: flex; align-items: center; justify-content: center; text-align: center; grid-column-gap: 2rem;}
              .posmenu a {font:800 17px 'Cairo'; position:relative;}  .posmenu a:hover::after{content:""; background-color:black; width:100%; height:10%;      position:absolute; bottom:-8%; left: 50%; transform: translateX(-50%);}
              .megamenudesign {   background-color:#3e505c; width:200px; height:auto;    z-index: 1; visibility:hidden; opacity:0;         color:white;    display:grid;         position:absolute; top:40px; left:50%; transform:translateX(-50%);  transition:all 0.5s ease-in-out 0s ; }        	.megamenudesignshow {       visibility:visible; opacity:1;  transition:all 0.5s ease-in-out 0s ;  }
	
	
	
    .row3{padding:0% 0%; margin:5% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
		.row3 .col1a{width:50%;  }   .row3 .col1b{padding:0px 0px; margin:0% 0%;   display:flex; align-items:center; justify-content:center; text-align:center;    }
		   .caroselll {background-color:transparent; padding:0%; margin:0% 2%;         display:grid; align-items:center; justify-content:center; text-align:center;       position:sticky; top:10px; }   
				.poscarouselimage1{  background-color:transparent; width:500px; height:auto;  display:flex; align-items:center;  justify-content:center;  text-align:center;   }  
				.poscarouselimage1 .poscarouselimagee1{ background-color:red; width:100%; height:auto;  display:flex; align-items:center;  justify-content:center;  text-align:center;   }	
				.poscarouselimage1 .poscarouselimagee1 .item {background-color:transparent; width:500px; height:500px; cursor:pointer; display:grid; align-items:center; justify-content:center; text-align:center; }     
					.poscarouselimage1 .poscarouselimagee1 .item .posimg1{background-color:transparent; width:500px; height:500px;  display:flex; align-items:center; justify-content:center; text-align:center;  overflow: hidden; }                          
					.poscarouselimage1 .poscarouselimagee1 .item .posimg1 .img1{max-width:100%;  width:500px; height:500px; cursor:pointer;   }     
					.poscarouselimage1 .poscarouselimagee1 .item .posimg1 .img1:hover{transform:scale(1.1); transition:all ease-in-out .5s;}       
									
				.poscarouselimage2{  background-color:transparent; width:500px; height:auto;  display:flex; align-items:center;  justify-content:center;  text-align:center;   }    
				.poscarouselimage2 .poscarouselimagee2{ background-color:red; width:100%; height:auto;  display:flex; align-items:center;  justify-content:center;  text-align:center;   }	
				.poscarouselimage2 .poscarouselimagee2 .item {background: #C9C9C9;  width:100px; height:100px;   padding: 10px 0px;   margin: 5px;  border-radius: 3px;    color: #FFF;  cursor:pointer; display:inline-block; align-items:center; justify-content:center; text-align:center; }        
				.poscarouselimage2 .poscarouselimagee2 .current .item {  background: #0c83e7;}
					.poscarouselimage2 .poscarouselimagee2 .item .posimg1{background-color:transparent; width:100px; height:100px;  display:flex; align-items:center; justify-content:center; text-align:center;  overflow: hidden; }        
					.poscarouselimage2 .poscarouselimagee2 .item .posimg1 .img1{max-width:100%;  width:100px; height:100px; cursor:pointer;   }       
					.poscarouselimage2 .poscarouselimagee2 .item .posimg1 .img1:hover{transform:scale(1.1); transition:all ease-in-out .5s;}       

				.poscarouselimage .owl-nav.disabled {display: block;}     .poscarouselimage .owl-nav .owl-prev { display: block;position:absolute; top:45%;  left:0%;}        .poscarouselimage .owl-nav  button.owl-prev  {background-color:#f7f9f8;  color:#3799c1;}         .poscarouselimage .owl-nav  button.owl-prev:hover {background-color:#3799c1;  color:white;}        .poscarouselimage .owl-nav  button.owl-prev:focus {outline: none;}                             
				.poscarouselimage .owl-nav .owl-next { position:absolute; top:45%;  right:0%;}      .poscarouselimage .owl-nav  button.owl-next  {background-color:#f7f9f8;  color:#3799c1;}         .poscarouselimage .owl-nav  button.owl-next:hover {background-color:#3799c1;  color:white;}        .poscarouselimage .owl-nav  button.owl-next:focus {outline: none;}  
				.poscarouselimage .owl-dots {display:none;  margin:5% 0%;  }    .poscarouselimage  .owl-dots .owl-dot{  background-color:transparent;  }    .poscarouselimage  .owl-dots .owl-dot span {  background-color:#ccc;  width:9px; height:9px;  border-radius:30px;    transition:all ease-in-out .2s;}        .poscarouselimage  .owl-dots .owl-dot:hover span  { background-color:black;}       .poscarouselimage  .owl-dots .owl-dot.active span { background-color:black;  }   
		.row3 .col2a{width:50%;  }   .row3 .col2b{padding:0px 0px; margin:0% 0%;   display:flex; align-items:center; justify-content:center; text-align:center;    }
		   .infoproduct  {background-color:transparent; padding:0% 10%; margin:0% 0%;     display:grid; align-items:flex-start; justify-content:flex-start; text-align:left;   grid-row-gap:1rem;    }   
            .infoproduct .titer{color:black; font:800 30px 'cairo';}
            .infoproduct .price{color:black; font:800 30px 'cairo';}
            .infoproduct .quantite {width:auto; height:40px;  color:black; font:800 20px 'cairo';  text-indent:0.5rem; }  
            .infoproduct .color {width:auto; height:40px;  color:black; font:800 20px 'cairo';  text-indent:0.5rem; }  
                .infoproduct .color option:nth-child(1){ color: black;}  .infoproduct .color option:nth-child(2){ color: red;}  .infoproduct .color option:nth-child(3){ color: blue; }  .infoproduct .color option:nth-child(4){ color: green; }
            .infoproduct .adtocart {background-color:transparent; width:auto; height:40px; border:solid 1px black;    color:black; font:800 20px 'cairo'; cursor:pointer;}   .infoproduct .adtocart:hover{ background-color:#5c6f66;  color:white; }
			.infoproduct .checkout {background-color:transparent; width:auto; height:40px; border:solid 1px black;    color:black; font:800 20px 'cairo'; cursor:pointer;}   .infoproduct .checkout:hover{ background-color:#5c6f66;  color:white; }
            .infoproduct .shortdescription{color:black; font:800 15px 'cairo';}
            .infoproduct .partage{color:black; font:800 20px 'cairo';}  .infoproduct .partage i{font-size:20px;}



   
    .row4{padding:0% 0%; margin:2% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
		.row4 .col1a{width:100%;  }   .row4 .col1b{padding:0px 0px; margin:0% 0%;   display:flex; align-items:center; justify-content:center; text-align:center;    }
			.discription {background-color:transparent; padding:0%; margin:0% 2%;         display:grid; align-items:center; justify-content:center; text-align:center;        }   
				.discription .title{color:red; font:800 30px 'cairo';}
				.discription .paragraph{color:black; font:800 20px 'cairo';}



   .row7{background-color:red; padding:0% 0%; margin:0% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
		.row7 .col1a{width:100%;  }   .row7 .col1b{padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center;   }
			.footer{background-color:black; width:100%; height:60px;         display:flex; align-items:center; justify-content:center; text-align:center;       }
				.footer .text{color:white; font:800 30px "cairo",sans-serif;}

   




@media only screen and (max-width:1000px) 
{  
.row1 .col1a{display:block; }   
.row1 .col2a{display:none; }   
.row2{display:none;}
.row3{display:grid;}
  .row3 .col1a{width:100%;  }
     .caroselll {display:grid; align-items:center; justify-content:center; text-align:center;}   
  .row3 .col2a{ width:100%;  }      
	  .infoproduct { display:grid; align-items:flex-start; justify-content:center; text-align:center;       }   

}


@media only screen and (max-width:600px)  
{  
.poscarouselimage1{  width:330px; height:auto;   }  
.poscarouselimage1 .poscarouselimagee1{ width:100%; }	
.poscarouselimage1 .poscarouselimagee1 .item {width:330px; height:auto;  }     
	.poscarouselimage1 .poscarouselimagee1 .item  .posimg1{width:330px; height:auto;  }                          
	.poscarouselimage1 .poscarouselimagee1 .item  .posimg1 .img1{max-width:100%;  width:330px; height:auto;   }     
																	 
.poscarouselimage2{  width:330px; height:auto;     }  
.poscarouselimage2 .poscarouselimagee2{width:100%;  }	  
.poscarouselimage2 .poscarouselimagee2 .item {width:70px; height:auto;  }        
	.poscarouselimage2 .poscarouselimagee2 .item .posimg1{width:70px; height:auto; }        
	.poscarouselimage2 .poscarouselimagee2 .item .posimg1 .img1{max-width:100%;  width:70px; height:auto;    }         

.footer .text{ font:800 20px "cairo",sans-serif;}
}


@media only screen and (max-width:360px)  
{

}

</style>




<form method="post" action="" style="padding:0px; margin:0px;">  
<div class="container1">
  
  
  
  
	<div class="row1">
	    <div class="col1a">  <div class="col1b"> 
			<a class="menumobileopen "> <i class="fas fa-bars"></i>                
			     <div class="menumobilebackground1">  <div class="menumobilebackground2">                   <a class="menumobileclose"><i class="fas fa-times iconeclose"></i>	</a>                                    <ul class="posmenumebile">  <li> Accueil </li>  <li> Home design </li>  <li> Design Craft </li>  <li> Contact</li>  <ul>						   </div>  </div>                       </a>			   
	    </div> </div>
		<div class="col2a">  <div class="col2b"> 
			  <a class="numberphone "><i class="fas fa-mobile-alt" ></i>  <span> contactez-nous au 0667 79 25 60 </span>  </a>
		 </div></div>			   
		<div class="col3a">    <div class="col3b">
				<a href="Cube-Porte-Papier-Toilette.php">  <img src="img/logo.png" class="logo"  />	</a>    
		</div></div> 		  
		<div class="col4a">    <div class="col4b">
				  <a class="search">   <i class="fas fa-search ">  </i> </a> 
				  <a href="addtocart.php"  class="shoppcart"> <i class="fas fa-shopping-cart"></i> <span class="outputtotalitems"></span>	 </a>	     	
				  
		</div></div>
	</div>




    <div class="row2">	
	    <div class="col1a">  <div class="col1b"> 
				 <div class="posmenu">
					<a> Accueil </a>
					<a class="design"> Design   <div class="megamenudesign"> <span>Mobilier</span>  <span>Decoration</span> <span>Accessoires</span> </div>  </a> 	
					<a> PROMOS</a> 
					<a> Craft</a> 
					<a> Contact</a> 			
				</div>
        </div></div>			
	</div>




    <div class="row3">	
	    <div class="col1a">  <div class="col1b"> 
			<div class="caroselll">						
				<div class="poscarouselimage1 poscarouselimage"> 
				<div class="poscarouselimagee1"> 
				<div class=" carouselimage1 owl-carousel owl-theme  ">
					<div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira1.jpg"/></div>        </div>
					<div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira2.jpg"/></div>       </div>
					<div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira3.jpg"/></div>        </div>
					<div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira4.jpg"/></div>        </div>
					<div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira5.jpg"/></div>        </div>
					<div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira6.jpg"/></div>        </div>
					<div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira7.jpg"/></div>        </div>
				</div>
				</div>
				</div>
				<div class="poscarouselimage2 poscarouselimage "> 
				<div class="poscarouselimagee2"> 				
				<div class=" carouselimage2 owl-carousel owl-theme ">
				   <div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira1.jpg"/></div>        </div>
				   <div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira2.jpg"/></div>       </div>
				   <div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira3.jpg"/></div>        </div>
				   <div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira4.jpg"/></div>        </div>
				   <div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira5.jpg"/></div>        </div>
				   <div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira6.jpg"/></div>        </div>
				   <div class="item">    <div class="posimg1"><img class="img1" src="https://raw.githubusercontent.com/Dripoda/dripoda.github.io/master/img/accessoire1/accesoira7.jpg"/></div>        </div>		
				</div>
				</div>
				</div>						  
			</div>

        </div></div>
	    <div class="col2a">  <div class="col2b"> 
			   <div class="infoproduct">
					<div class="titer"> Cube Porte Papier Toilette Brulé </div>
					<div class="price"> 299.00 € </div>
					<select class="quantite" name="quantity"  >
						<option value="" disabled selected >Quantité </option> 
						<option value="1" selected="selected" >1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					<select class="color" name="color"  id="countrySelect" onchange="changeselect(this.value)">
						<option value="" disabled selected >Color </option> 
						<option value="red" selected="selected" > RED</option>
						<option value="blue">Blue</option>
						<option value="green">Green</option>
					</select>	
	                <select style="display:none;" id="imgselect"  name="img"  >
		            <option disabled selected>img</option>
					<option value="img/accesoira1.jpg" selected="selected" > <img class="img1" src="img/accesoira1.jpg"/></option>
					<option value="img/accesoira6.jpg" > <img class="img1" src="img/accesoira6.jpg"/></option>
					<option value="img/accesoira3.jpg"> <img class="img1" src="img/accesoira3.jpg"/> </option>
	                </select>
	
					<script>
					function changeselect(value) 
					{
						if(value.length==0) document.getElementById("imgselect").innerHTML = "<option></option>";
						else 
						{  
						    var citiesByState =  { red: ["img/accesoira1.jpg"], blue: ["img/accesoira6.jpg"],  green: ["img/accesoira3.jpg"],   }
							var citiesOptions = ""; 
							for(cityId in citiesByState[value]) {citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";}
							document.getElementById("imgselect").innerHTML = citiesOptions;
						}
					}
					</script>
	
					<input style="display:none;" type="button" value="Ajouter au panier"    name=""    class="adtocart" />
					<input type="submit" value="Acheter maintenant"   name="checkout"    class="checkout" />
					<div class="shortdescription">   Porte-papier de toilette Ce support de papier hygiénique est non seulement fonctionnel mais aussi un beau décor pour votre toilette. Le support de papier hygiénique peut contenir 5 rouleaux de papier.  </div>
					<div class="partage"> Partager :  <i class="fab fa-facebook"></i>    <i class="fab fa-instagram"></i>    <i class="fab fa-whatsapp"></i>  <i class="fab fa-twitter"></i></div>  
			   </div>
        </div></div>		
	</div>	







	<div class="row4">	
			<div class="col1a">  <div class="col1b"> 
			  <div class="discription"> 
				 <div class="title">  description   </div>
				 <div class="paragraph" >  Porte-papier de toilette Ce support de papier hygiénique est non seulement fonctionnel mais aussi un beau décor pour votre toilette. Le support de papier hygiénique peut contenir 5 rouleaux de papier.    </div>  
			  </div>
			</div></div>			
	</div>



	<div class="row7">	
			<div class="col1a">  <div class="col1b"> 			
			   <div class="footer">
				   <div class="text"> CopyRight © 2022 - Dripoda </div>
				</div>
			</div></div>			
	</div>



</div>
</form> 









<script>
$(".menumobileopen").click(function(){    $(".menumobilebackground1").css({"visibility": "visible" , "opacity": "1" });   $(".menumobilebackground2").css({  "visibility": "visible" , "opacity": "1" , "left": "0"  });               });
$(".menumobileclose").click(function(){     $(".menumobilebackground1").css({"visibility": "hidden" , "opacity": "0" });   $(".menumobilebackground2").css({ "visibility": "hidden" , "opacity": "0" ,  "left": "-250px"  });               });

document.querySelectorAll('.design').forEach(function(link) {
		link.addEventListener('mouseover', function(e) 
		{ 
				link.querySelector('.megamenudesign').classList.add('megamenudesignshow');   			
		});

		link.addEventListener('mouseout', function(e) 
		{ 
		        link.querySelector('.megamenudesign').classList.remove('megamenudesignshow');  			
		});	
});



$(document).ready(function() {

  var sync1 = $(".carouselimage1");
  var sync2 = $(".carouselimage2");
  var slidesPerPage = 4;
  var syncedSecondary = true;


  sync1.owlCarousel({
    items : 1, 
	nav: true,  navText: ['<i class="fas fa-angle-left fa-2x fa-fw" aria-hidden="true"></i>','<i class="fas fa-angle-right fa-2x fa-fw" aria-hidden="true" ></i>'],
    dots: true,
    loop: true,
	slideSpeed : 2000,
    responsiveRefreshRate : 200,
   });
  sync1.on('changed.owl.carousel', function (el) {        var count = el.item.count-1;         var current = Math.round(el.item.index - (el.item.count/2) - .5);          if(current < 0) {      current = count;}        if(current > count) {      current = 0;    }         sync2.find(".owl-item").removeClass("current").eq(current).addClass("current");          if (current > sync2.find('.owl-item.active').last().index()) {  sync2.data('owl.carousel').to(current, 100, true); }         if (current < sync2.find('.owl-item.active').first().index()) { sync2.data('owl.carousel').to(current - sync2.find('.owl-item.active').length - 1, 100, true); }      });




  sync2.on('initialized.owl.carousel', function () { sync2.find(".owl-item").eq(0).addClass("current"); }).owlCarousel({
    items : slidesPerPage,  slideBy: slidesPerPage, 
	nav: true,
    dots: true,
    slideSpeed : 500,
    responsiveRefreshRate : 100
  });
  sync2.on('changed.owl.carousel', function (el) {    if(syncedSecondary) {      var number = el.item.index;      sync1.data('owl.carousel').to(number, 100, true);    }       });
  sync2.on("click", ".owl-item", function(e){    e.preventDefault();    var number = $(this).index();    sync1.data('owl.carousel').to(number, 300, true);  });
 
  

});







 ajaxx(); function ajaxx() {     $.ajax  ({      type: 'post',       data: {postoutputtotalitems:"" },      dataType:"json",   success:  function(data){ $('.outputtotalitems').html(data.outputtotalitems);          }    });    } 
</script>









