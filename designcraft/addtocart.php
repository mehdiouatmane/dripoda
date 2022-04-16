<?php
session_start();

if( isset($_POST['postoutputtotalitems'])  ) {  $outputtotalitems = '';  $totalitem = 0;  if(!empty($_SESSION["infocookiess1"]))  {   foreach($_SESSION["infocookiess1"] as $keys => $values)   {    $totalitem = $totalitem + 1;         $outputtotalitems .=     '       '.$totalitem.'     ';   }        }  else  {   $outputtotalitems .= '';  }      echo json_encode(      array(  'outputtotalitems'=> $outputtotalitems      )         );   exit;     } 


if(  isset($_POST['action']) && $_POST['action'] == "updatephp"   )
{
	foreach($_SESSION["infocookiess1"] as $keys => $values)
	{
		function get_ip(){   if( isset($_SERVER['HTTP_CLIENT_IP']) )   {  return $_SERVER['HTTP_CLIENT_IP'];}  elseif  ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )     { return $_SERVER['HTTP_X_FORWARDED_FOR'];}   else  { return (  isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''   ); }     }      	$ip = get_ip();  
	    $id=$values["id"];
	    $img = $values["img"];
	    $title = $values["title"];
	    $price = (int)$values["price"];
	    $quantity= $_POST["quantity"];
	

		if($values["id"] == $id )
		{
		   $_SESSION["infocookiess1"][$keys] = array	
		   ( 
					'ip' => $ip,
					'id' => $id, 												  
					'img' => $img  ,         
					'title' => $title,             
					'price' => $price,   	          
					'quantity' => $quantity          
			);
		}
	}
	
}  
     




if(  isset($_POST["delete"])  )
{
	$id='1';
	
	foreach($_SESSION["infocookiess1"] as $keys => $values)
	{
		if($values["id"] == $id )
		{
			unset($_SESSION["infocookiess1"][$keys]);
		}
	}
}



if(  isset($_POST["clear"])  )
{
	unset($_SESSION["infocookiess1"]);
}	
?>




<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<link rel="shortcut icon" type="image/x-icon" media="all" href="" />
<style>html, body{ background-color:#fafafa;  padding:0; border:0; margin:0% 0%;  touch-action: manipulation;    user-select: none;   }   ul li {list-style-type:none; text-decoration:none;  }  a{text-decoration:none; }    </style>






<style>
.container1 {width:100%; height:auto; }

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

	.row2{ padding:0% 0%; margin:5% 0%;    display:flex; align-items:flex-start;  align-content:center; justify-content:center; text-align:center; grid-column-gap:0.4rem; }       	
        .row2 .col1a{width:100%; }   .row2 .col1b{ padding:5px 5px; margin:0% 0%;    display:grid; align-items:flex-start; justify-content:center; text-align:center;   }
            .addtocart{background-color:white;}
				.infoshipping{background-color:#f1f1ff;  padding:10px; display:flex; align-items: center;  align-content: center; justify-content: center; grid-column-gap:2rem;  }
				  .img1{width:100px; height:100px;}
				  .textinfoshipping{color:black; color:black; font:800 20px 'cairo';  }
				  .inputquantity{width:50px;  text-align:center;}
				  .inputdelete{background-color:black; width:110px; height:30px; border:solid 1px black; border-radius:5px; color:white; font:600 20px 'cair';}
				.totalitemprice{display: grid; align-items: center;  align-content: center; justify-content: flex-end; text-align:left; grid-row-gap:0.3rem;}
				   .texttotalitemprice{color:black; font:800 20px 'cairo';}
				   .inputclear{background-color:black; width:110px; height:30px; border:solid 1px black; border-radius:5px; color:white; font:600 20px 'cair';}

@media only screen and (max-width:1000px) 
{  
}

@media only screen and (max-width:800px) 
{  
			.row1 .col1a{display:block; }   
			.row1 .col2a{display:none; }   


           .infoshipping{display:grid; align-items: center;  align-content:center; justify-content:center;  }
		    .totalitemprice{display:grid; align-items:center;  align-content:center; justify-content:flex-start; text-align:left; }
             
}	

@media only screen and (max-width:400px)  
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
                    <div class="addtocart">		
					<?php	
					$totalitem = 0;				
					$totalpricee = 0;
					if(!empty($_SESSION["infocookiess1"]))
					{
							foreach($_SESSION["infocookiess1"] as $keys => $values)
							{
								$id =  $values["id"];
								$img =  $values["img"];
								$title =  $values["title"];
								$price = (int)$values["price"]; 	
								$quantity =  $values["quantity"];
								$subtotal = number_format(  $quantity * $price  , 2 ) ; 
													
								$totalitem = $totalitem + 1;	
								
								$subtotall =  $quantity * $price   ; 
								$totalpricee = $totalpricee  + $subtotall   ; 
								$totalprice= number_format( $totalpricee,  2);
								?>
								<div class="infoshipping" >	
									<div>  <img class="img1" src="<?php echo $img; ?>"  > </div> 
									<div class="textinfoshipping"> <?php echo $title?> </div>
									<div class="textinfoshipping" > <?php echo $price ?> €  </div>
									<div>
										<a  class="plusjs1"        id="<?php echo $id ?>"    >  <span style="font:600 25px 'cairo'">+</span>  </a>                 
										<input class="inputquantity"  type="text"         value="<?php echo $quantity ?>"   id="quantityjs<?php echo $id ?>"     />   		  	           
										<a  class="minusjs1"       id="<?php echo $id ?>" >  <span style="font:600 25px 'cairo'">-</span>  </a>  
									</div>									
									<div class="textinfoshipping" > <?php echo $subtotal ?> € <br/> </div>	
									<div> <input  class="inputdelete" type="submit"   value="Delete"   name="delete"        />  </div>
									</div>								
								<?php
							}				
								?> 
								<div class="totalitemprice" >	
									<div class="texttotalitemprice"> Total item : <?php echo $totalitem ?>   </div> 
									<div class="texttotalitemprice"> Total price : <?php echo $totalprice ?> €  </div> 
									<div><input class="inputclear" type="submit"   value="Clear"   name="clear"/>  </div> 
								</div>	
								<?php	
					}
					else
					{
						echo " You don't have anything in the basket";
					}
					?>	
                    </div> 					
        </div> </div>
    </div>
</div>
</form>




<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).on('click', '.plusjs1', function(){	
   $(this).parent().find('#quantityjs'+$(this).attr("id")).val(   parseInt($(this).parent().find('#quantityjs'+$(this).attr("id")).val()) + 1  );  

	$.ajax
	({ 
		method:"POST",          
		data:{   action:"updatephp",   quantity: $('#quantityjs'+$(this).attr("id")).val(),   },	   
		success:function()  {   window.location.reload(); }
	});		
	
});
		
$(document).on('click', '.minusjs1', function(){	
   var count = parseInt($(this).parent().find('#quantityjs'+$(this).attr("id")).val()) - 1;	    $(this).parent().find('#quantityjs'+$(this).attr("id")).val(  count < 1 ? 1 : count );		

	$.ajax
	({
		method:"POST",
		data:{ action:"updatephp",  quantity: $('#quantityjs'+$(this).attr("id")).val(),  },	   
		success:function()  {    window.location.reload(); }
	});	
});		




	


		
 ajaxx(); function ajaxx() {     $.ajax  ({      type: 'post',       data: {postoutputtotalitems:"" },      dataType:"json",   success:  function(data){ $('.outputtotalitems').html(data.outputtotalitems);          }    });    } 

	
</script>


