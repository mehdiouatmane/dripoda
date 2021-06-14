<?php
$con=mysqli_connect("freedb.tech", "freedbtech_mehdiouatmane","mehdi2014@A" , "freedbtech_wordpresst");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
session_start();
?>

<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">     
<title>project2</title>
<style>
*{ border:0; margin:0; outline: none !important; list-style-type:none; }  
*, ::after, ::before {    box-sizing: border-box;}  
html , body {direction: rtl; background: rgb(239, 241, 245); }    
@font-face {   font-family: 'Stingray';   font-style: normal;     font-weight: 400;    src: local('Stingray'), url('https://fonts.cdnfonts.com/s/22150/Stingray.woff') format('woff');} 
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
if(!empty($_SESSION["shopping_cart"]))
{	
    $total_price = 0;
	$total_item = 0;					
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{																
				if(isset($_POST['submit']))  
				{	
						if(     empty($_POST['customer_name']) || empty($_POST['customer_email'])    || empty($_POST['customer_address'])   || empty($_POST['customer_city'])   || empty($_POST['customer_zip'])   || empty($_POST['customer_state'])   || empty($_POST['customer_country'])   || empty($_POST['card_holder_number'])   || empty($_POST['card_expiry_month'])   || empty($_POST['card_expiry_year'])   || empty($_POST['card_cvc'])     )  	 
						{	  
						  echo'Euror'; 	
						}
						else 
						{
						   $ip = $values["ip"];
						   $product_imgsrira =  $values["product_imgsrira"];
						   $product_title =  $values["product_title"];
						   $product_prix = (int)$values["product_prix"]; 	
						   $product_quantity =  $values["product_quantity"];
						   $product_subtotal = number_format(  $product_quantity * $product_prix  , 2 ) ; 					
						   $customer_name = $_POST['customer_name'];
						   $customer_email = $_POST['customer_email'];
						   $customer_address = $_POST['customer_address'];
						   $customer_city = $_POST['customer_city'];
						   $customer_zip = $_POST['customer_zip'];
						   $customer_state = $_POST['customer_state'];
						   $customer_country = $_POST['customer_country'];
						   $card_holder_number = $_POST['card_holder_number'];
						   $card_expiry_month = $_POST['card_expiry_month'];
						   $card_expiry_year = $_POST['card_expiry_year'];
						   $card_cvc = $_POST['card_cvc'];
						   $result = mysqli_query(  $con  ,	"INSERT INTO project2order ( ip, product_imgsrira, product_title, product_prix, product_quantity, product_subtotal, customer_name , customer_email , customer_address , customer_city , customer_zip , customer_state , customer_country , card_holder_number , card_expiry_month , card_expiry_year , card_cvc  )    VALUES ( '$ip' , '$product_imgsrira' , '$product_title' , $product_prix ,  '$product_quantity'  , '$product_subtotal'  ,   '$customer_name'  , '$customer_email' , '$customer_address' , '$customer_city' , '$customer_zip' , '$customer_state' , '$customer_country' , '$card_holder_number' , '$card_expiry_month' , '$card_expiry_year' , '$card_cvc'  )"   );            
						   if($result) 	  {	 echo'thanks';	  } 	  else	  {		  echo'Please Check Your Query';	  }
					   
						}		
				  }				
	    }										
}
?>






<form method="post" id="register_form">
		<input style="display:none;" type="hidden"                                        value="<?php echo $row["ip"]; ?>"            id="ip<?php echo $row["ip"]; ?>"    >       <br/>   					
		<input style="display:none;" type="hidden" src="<?php echo $row["imgsrira"]; ?>"  value="<?php echo $row["imgsrira"]; ?>"      id="imgsriraa<?php echo $row["id"]; ?>"   />   <br/>
		<input style="display:none;" type="hidden"                                        value="<?php echo $row["title"]; ?>"         id="titlee<?php echo $row["id"]; ?>"  />  <br/>
		<input style="display:none;" type="hidden"                                        value="<?php echo $row["prix"]; ?>"          id="prixx<?php echo $row["id"]; ?>"  />  <br/>
		<input style="display:none;" type="hidden"                                        value="1"                                    id="quantityy<?php echo $row["id"]; ?>"  />  <br/>       					 					
		<input type="text"   placeholder="name" name="customer_name"  />		 <br/>
		<input type="text"   placeholder="email" name="customer_email"  />	<br/>
		<input type="text"   placeholder="address" name="customer_address"  /><br/>
		<input type="text"   placeholder="city" name="customer_city"  /><br/>
		<input type="text"   placeholder="zip" name="customer_zip"  /><br/>
		<input type="text"   placeholder="state" name="customer_state"  /><br/>
		<input type="text"   placeholder="country" name="customer_country"  /><br/>
		<input type="text"   placeholder="1234 5678 9012 3456" name="card_holder_number"  /><br/>
		<input type="text"   placeholder="MM" name="card_expiry_month"  /><br/>
		<input type="text"   placeholder="YYYY" name="card_expiry_year"  /><br/>
		<input type="text"   placeholder="123" name="card_cvc"  /><br/>
		<input type="submit" value="INSERT"  name="submit"   />
</form>
				
		
