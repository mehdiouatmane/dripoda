<!DOCTYPE html>
<html>
<title>pikala</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/> 

<style>html, body{  background:transparent;  padding:0; border:0; margin:0;  touch-action: manipulation; }   ul li {list-style-type:none;}     </style>       





<style>
.container1 {background-image: url(https://casino5.netlify.app/background.jpg);  width:100%; height:100vh; }
.row{background-color:transparent;   padding:0%; margin:0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center; flex-wrap:wrap; flex-direction: row; }       

		    .col1a{width:50%;  }       
            .col1b{background-color:transparent; padding:0%; margin:0% 2%;  display:grid; align-items:center; justify-content:center; text-align:center;    }
			   #text1{color:red; font:800 20px 'cairo';  display:flex; align-items:center; justify-content:center; text-align:center; }
			   .posimg1{display:flex; align-items:center; justify-content:center; text-align:center;} #img1{ max-width:100%; width:500px; height:auto; display:flex; align-items:center; justify-content:center; text-align:center; }
			   .posimg2{display:flex; align-items:center; justify-content:center; text-align:center;} #img2{ max-width:100%; width:500px; height:auto; display:none; align-items:center; justify-content:center; text-align:center; }

				
		 .col2a{width:50%; }      
		 .col2b{background-color:transparent;  padding:0%; margin:0% 2%;         display:grid; align-items:center; justify-content:center; text-align:center;        }   
   				.back {position:relative; }	
					.marker { width:50px;  position:absolute; top:0px; left:50%; transform:translateX(-50%); z-index: 2; }
                    .wheel { max-width:100%; width:400px; height:auto;   }  	.wheelhover { transition:all 10s ease;  animation: blur 10s; }  	@keyframes blur { 0% { filter: blur(0.5px); } 50%{ filter: blur(2px); } 80% { filter: blur(1.5px); } 95% { filter: blur(0px); } }		
				.posbutton{display:flex; align-items:center; justify-content:center; text-align:center;}   .button { width:200px;  height:auto;   cursor:pointer;  pointer-events: auto; }  .button:hover { opacity: 0.8; }


   
@media only screen and (max-width:1300px) {  }
@media only screen and (max-width:1000px) {  }
@media only screen and (max-width:600px)  {  }
@media only screen and (max-width:360px)  {  }


</style>


<div class="container1">
<div class="row">
		
			<div class="col1a"> 
            <div class="col1b"> 
					<div id="text1">?????</div>   
					<div class="posimg1"><img id="img1" src="img/pikala/pikalamajhola.gif"></div>   
					<div class="posimg1"><img id="img2" src="img/pikala/pikala.gif"></div>         
			</div>
			</div>
			
			<div class="col2a"> 
		    <div class="col2b">	
					 <div id="app" class="back">  <img class="marker" src="img/pikala/marker.png">    <img class="wheel" src="img/pikala/whel.png"> </div>
					 <div class="posbutton"> <img class="button" src="img/pikala/button.png" > </div> 	
		     </div> 
			</div> 
			

</div>		
</div>


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
        document.getElementById("text1").textContent="Félicitations, vous avez gagné un vélo de haute qualité avec nous, une marque internationale";      
		document.getElementById("img1").style.display = 'none';      
		document.getElementById("img2").style.display = 'flex';   
	}

  









 console.log(actualDeg);  });


})
();	
	
	
</script>
  


