<?php
$con=  mysqli_connect("remotemysql.com",     "zFLO12yis6" , "dE1lgGhUfa"       ,"zFLO12yis6" ) or die ("could not connect to mysql");
mysqli_query($con,"SET CHARACTER SET 'utf8'");

session_start();
?>



<?php

	function get_ip(){   if( isset($_SERVER['HTTP_CLIENT_IP']) )   {  return $_SERVER['HTTP_CLIENT_IP'];}  elseif  ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )     { return $_SERVER['HTTP_X_FORWARDED_FOR'];}   else  { return (  isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''   ); }     }   $ip = get_ip();  
	$iplocation = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));       $city= isset($iplocation['city']) ?  $iplocation['city'] : '';       $country= isset($iplocation['country']) ?  $iplocation['country'] : '';  
	date_default_timezone_set('Africa/Casablanca');  $datetime = date('m/d/Y h:i:s', time());  
	$product = 'masihatnafida';

$query1 = "INSERT INTO ipcliendomarakisa (ip , product , datetime , iplocation ) VALUES ('$ip' , '$product' , '$datetime' , '$country $city' )";	
mysqli_query($con,$query1);




if(  isset($_POST["sendinfo"])    )
{ 
	$name = $_POST["name"];
	$num = $_POST["num"];
	$adresse = $_POST["adresse"];
	$city = $_POST["city"];
	
	
$query2 = "INSERT INTO infocliendomarakisa (ip , product , iplocation , name , num , adresse , city , datetime ) VALUES ('$ip' , '$product' , '$country $city' ,  '$name' , '$num' , '$adresse'  , '$city' , '$datetime'  )";	
mysqli_query($con,$query2);
			
echo  "  <script>  window.location.href = 'thanks.php'; </script>    ";		
}

?>


<title>HmizatShop</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<style>html, body{ background-color:transparent;  padding:0; border:0; margin:0;  touch-action: manipulation;    user-select: none;   }   ul li {list-style-type:none;}     </style>



<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1005326677061402');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1005326677061402&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->








<style>
.container1 {background-color:white; width:100%; height:auto;    padding:0%; }  .container1 .row1{background-color:transparent;   padding:0%; margin:0%;    display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  }
         .container1 .row1 .col1{background-color:transparent;  width:100%; }        .container1 .row1 .col1 .content1  {background-color:transparent; padding:0%; margin:0% 0%;         display:grid; align-items:center; justify-content:center; text-align:center;        }  
		
			   .posimg1{ margin:2% 2%;  display:flex; align-items:center; align-content:center; justify-items:center; justify-content:center; text-align:center; }       .posimg1 .img1{max-width:100%; width:500px; height:auto;} 

               .posimgtawsilmajani{ margin:2% 2%;  margin:2% 0% 0% 0%; display:flex; align-items:center; justify-content:center; text-align:center; }       .posimgtawsilmajani .imgtawsilmajani{max-width:100%; height:100px; } 
			   .posimgreview{ margin:5% 2%;  display:grid; align-items:center; align-content:center; justify-items:center; justify-content:center; text-align:center;}  .posimgreview .imgreview{max-width:100%; width:400px; height:auto; }

</style>


<div class="container1"><div class="row1">
	  <div class="col1"><div class="content1">

			<div class="posimgtawsilmajani">  <img  class="imgtawsilmajani" src="img/hmizatshop/tawsilmajani2.png" /> </div>  <br/> 						 						    


	        <div class="posimg1">	<img class="img1" src="img/hmizatshop/masihatnafida/1.jpg" />	 </div>  
	        <div class="posimg1">	<img class="img1" src="img/hmizatshop/masihatnafida/2.jpg" />	 </div>  			
	        <div class="posimg1">	<img class="img1" src="img/hmizatshop/masihatnafida/4.jpg" />	 </div>  				
	        <div class="posimg1">	<img class="img1" src="img/hmizatshop/masihatnafida/5.jpg" />	 </div> 
	        <div class="posimg1">	<img class="img1" src="img/hmizatshop/masihatnafida/6.jpg" />	 </div> 
	        <div class="posimg1">	<img class="img1" src="img/hmizatshop/masihatnafida/7.jpg" />	 </div>  
	        <div class="posimg1">	<img class="img1" src="img/hmizatshop/masihatnafida/8.jpg" />	 </div>    			
				
				
		
			<div class="posimgreview">	<img class="imgreview" src="img/hmizatshop/tayimat.png" />	 </div>     
			
	  </div></div>	
</div></div>























































<style>
.posbutton{background-color:transparent; width:100%; height:auto;  z-index:200;     display:flex; align-items:center; justify-content:center; text-align:center;    position:fixed; bottom:0; }
.button{background-color:red; width:300px; height:70px; border: solid 4px #7aff01; border-radius: 30px;     color:yellow; font:800 20px 'cairo';    }  
.animatscale{animation: animatscale 0.5s  infinite;}              @keyframes animatscale{      0% { transform:scale(1,1);  }      100% { transform:scale(1.1,1.1) }      }            
.animatcolor{animation: animatcolor 0.5s alternate infinite; }    @keyframes animatcolor{     from{background-color:red; color:yellow; }  to{ background-color:blue;  color:white; }    }  					 

</style>

<div class="posbutton animatscale"> <button id="buttoninfoclien" class="button  animatcolor" > 👉 اضفط هنا للشراء الان 👈 </button> </div>


<script>
$('#buttoninfoclien').click(function(){
  document.getElementById("buy").style.display = 'block';         
});
</script> 
 



<style>
.buy{ background-color:black;  width: 100%;  height: 100%;  padding: 0px; margin: 0px;  border: none;  opacity: 1;   z-index: 5000;   cursor: default;     position:fixed; top: 0px;   left: 0px;   display:none;}
	
.posform0{position:absolute; left:50%; top:50%; transform:translate(-50%,-50%);}
.posform1{background-color:#0fa7ff; width:auto; height:auto;   margin:0%; padding:2%;  border:solid 3px #cf0628; border-radius:10px 10px;   display:grid; align-items:center; justify-content:center; text-align:center;  }             
.posform1 form{ width:420px; }             
   .posinput1 {background-color:transparent; width:auto; height:auto;  margin:2% 2%;  display:flex; align-items:center; justify-content:center; text-align:center;  }            
	  .posinput1 .text1{color:white; font:800 20px 'cairo'; }
	  .posinput1 .inputtext{background-color:white;  width:390px; height:40px;  border: solid 2px #cccccc; border-radius:15px;  box-shadow: 0 0 5px #cccccc;  color:black; font:400 20px black; text-indent: 9px;   }     					 .inputtext:focus{ outline: none !important;  border:solid 2px #0000ff5e; box-shadow: 0 0 5px #719ECE; }       					 .inputtext::placeholder {color:#aba5a5c9;  font:400 20px 'cairo';} 							
	  .posinput1 .inputbtn {background-color:#ff0000;  width:350px; height:45px; margin:4% 0%;  border:solid 2px #cccccc; border-radius:15px; box-shadow: 0 0 5px #cccccc;   color:white; font:800 25px sons-serif;   text-decoration:none;   cursor:pointer; display:flex; align-items:center;  justify-content:center; text-align:center; transform:scale(1,1); }                     					 .inputbtn:hover{background-color:#f10000b8;}               					 .inputbtn:focus{  outline: none !important;  border:solid 2px red; box-shadow: 0 0 2px red;}            					 
		 .inputhovererror{  background-color:red;   border:solid 3px red;  width:500px; height:45px; }  		       
		  .txt_error{color:black; font:400 15px 'cairo';  }



@media only screen and (max-width:360px)  
{
.posform0{position:absolute; left:50%; top:50%; transform:translate(-50%,-50%);}
.posform1{background-color:#0fa7ff; width:auto; height:auto;   margin:0%; padding:2%;  border:solid 3px #cf0628; border-radius:10px 10px;   display:grid; align-items:center; justify-content:center; text-align:center;   }             
.posform1 form{ width:320px;} 
	.posinput1 {background-color:transparent; width:auto; height:auto;  margin:2% 2%;  display:flex; align-items:center; justify-content:center; text-align:center;  }            			
        .posinput1 .text1{color:white; font:800 16px 'cairo'; }
		.posinput1 .inputtext{background-color:white;  width:290px; height:40px;  border: solid 2px #cccccc; border-radius:15px;  box-shadow: 0 0 5px #cccccc;  color:black; font:400 20px black; text-indent: 9px;   }     					 .inputtext:focus{ outline: none !important;  border:solid 2px #0000ff5e; box-shadow: 0 0 5px #719ECE; }       					 .inputtext::placeholder {color:#aba5a5c9;  font:400 20px 'cairo';} 							
		.posinput1 .inputbtn {background-color:#ff0000;  width:250px; height:45px; margin:4% 0%;   border:solid 2px #cccccc; border-radius:15px; box-shadow: 0 0 5px #cccccc;   color:white; font:800 25px sons-serif;   text-decoration:none;   cursor:pointer;  display:flex; align-items:center;  justify-content:center; text-align:center; transform:scale(1,1); }                     					 .inputbtn:hover{background-color:#f10000b8;}               					 .inputbtn:focus{  outline: none !important;  border:solid 2px red; box-shadow: 0 0 2px red;}            					 
}  
</style>
<div id="buy" class="buy" >
                     <div class="posform0">
						 <div class="posform1">
						   <form  method="post"  id="register_form"  >       
							   <div class="posinput1"> <div class="text1">أدخل معلوماتك لنتصل بك ونرسل لك المنتوج </div> </div>
							   <div class="posinput1"> <input    type="text"        placeholder=""                          value="<?php echo $row["ip"]; ?>"      name=""                style="display:none;"                       />    </div>  
							   <div class="posinput1"> <input    type="text"        placeholder="أدخل الإسم الكامل"          value=""                               name="name"      id="name"            class="inputtext"                            required="required"     oninvalid="this.setCustomValidity('المرجو أدخل الإسم الكامل ')"  oninput="setCustomValidity('')" dir="rtl"/></div>
								   <div class="txt_error" id="txt_error_name" ></div>
							   <div class="posinput1"> <input    type="text"        placeholder="أدخل رقم هاتفك"            value=""                               name="num"       id="num"              class="inputtext"                            required="required"     oninvalid="this.setCustomValidity('المرجو أدخل رقم هاتفك ')"  oninput="setCustomValidity('')" dir="rtl"/></div>  	  
								   <div class="txt_error" id="txt_error_num" ></div>          					   
							   <div class="posinput1"> <input    type="text"        placeholder="أدخل عنوانك"               value=""                               name="adresse"   id="address"          class="inputtext"                            required="required"     oninvalid="this.setCustomValidity('المرجو أدخل عنوانك ')"  oninput="setCustomValidity('')" dir="rtl"/></div>      
								   <div class="txt_error" id="txt_error_address" ></div>
							   <div class="posinput1"> <input    type="text"        placeholder="أدخل مدينتك"               value=""                               name="city"      id="city"             class="inputtext"                            required="required"     oninvalid="this.setCustomValidity('المرجو أدخل مدينتك ')"  oninput="setCustomValidity('')" dir="rtl"/></div>      
								   <div class="txt_error" id="txt_error_city" ></div>
							   <div class="posinput1"> <input    type="submit"      placeholder=""                          value=" إضغط هنا للشراء "        name="sendinfo"           id="btnpage2"         class="inputbtn animatscale"                     onClick="fbq( 'track', 'Purchase' );"   /> </div>
						   </form> 
						 </div>	 						 
                      </div>						 
</div>

<script>
$('#btnpage2').click(function(){
  var txt_error_name = '';
  var txt_error_num = '';  var filterphone = /^\d{10}$/;
  var txt_error_address = '';
  var txt_error_city = '';
  
  if(    $.trim($('#name').val()).length == 0       )           {    txt_error_name = 'أدخل الإسم الكامل';   $('#txt_error_name').text(txt_error_name);  $('#name').addClass('inputhovererror');         }               
  else                                                          {    txt_error_name = '';                   $('#txt_error_name').text(txt_error_name);  $('#name').removeClass('inputhovererror');      }
  
  if(    $.trim($('#num').val()).length == 0        )           {    txt_error_num = 'أدخل رقم هاتفك';      $('#txt_error_num').text(txt_error_num);    $('#num').addClass('inputhovererror');          }                 
  else                                                          {    if (       !filterphone.test($('#num').val())   )    {  txt_error_num = 'أدخل رقم هاتفك';  $('#txt_error_num').text(txt_error_num);            $('#num').addClass('inputhovererror');      }               
                                                                     else                                                 {  txt_error_num = '';                $('#txt_error_num').text(txt_error_num);            $('#num').removeClass('inputhovererror');   }              															    }

  if(    $.trim($('#address').val()).length == 0    )           {    txt_error_address = 'أدخل عنوانك';    $('#txt_error_address').text(txt_error_address);                      $('#address').addClass('inputhovererror');      }              
  else                                                          {    txt_error_address = '';               $('#txt_error_address').text(txt_error_address);                      $('#address').removeClass('inputhovererror');      }


  if(    $.trim($('#city').val()).length == 0    )              {    txt_error_city = 'أدخل مدينتك';       $('#txt_error_city').text(txt_error_city);                            $('#city').addClass('inputhovererror');      }              
  else                                                          {    txt_error_city = '';                  $('#txt_error_city').text(txt_error_city);                            $('#city').removeClass('inputhovererror');      }
   
  if(  txt_error_name != ''  || txt_error_num != ''  ||  txt_error_address != ''  ||  txt_error_city != ''   )  {   return false;  }   else     {  $("#register_form").submit();     document.getElementById("loadingDiv").style.display = 'block';             }  
});
</script> 
 
 
 
 
 
 
 
 
 
 <style>
.loader{ background-color:black;  width: 100%;  height: 100%;  padding: 0px; margin: 0px;  border: none;  opacity: 0.96;   z-index: 9000;   cursor: default;     position:fixed; top: 0px;   left: 0px;   display:none;}
.loader:after {  content: "";  width: 100px; height: 100px;   border: solid 3px #BBB;   border-left:solid 3px black; border-radius:50%;               display: inline-block; vertical-align: middle;               position:absolute; top:50%; left:50%; transform:translate(-50%) rotate(0deg);   animation:spin 4s linear infinite;  }
@keyframes spin {     100% {   transform:translate(-50%) rotate(360deg);     }      }
</style>
<div id="loadingDiv" class="loader" ></div>

