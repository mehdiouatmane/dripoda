<?php
$con=  mysqli_connect("remotemysql.com",     "zFLO12yis6" , "dE1lgGhUfa"       ,"zFLO12yis6" ) or die ("could not connect to mysql");
mysqli_query($con,"SET CHARACTER SET 'utf8'");

session_start();
?>



<?php
function get_ip(){   if( isset($_SERVER['HTTP_CLIENT_IP']) )   {  return $_SERVER['HTTP_CLIENT_IP'];}  elseif  ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )     { return $_SERVER['HTTP_X_FORWARDED_FOR'];}   else  { return (  isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''   ); }     }   $ip = get_ip();  
$iplocation = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));       $city= isset($iplocation['city']) ?  $iplocation['city'] : '';       $country= isset($iplocation['country']) ?  $iplocation['country'] : '';  
date_default_timezone_set('Africa/Casablanca');  $datetime = date('m/d/Y h:i:s', time());  


$query1 = "INSERT INTO ipcliendomarakisa (ip ,  datetime , iplocation ) VALUES ('$ip' , '$datetime' , '$country $city' )";	
mysqli_query($con,$query1);


	
if(        isset($_POST["sendinfo"])              )
{
				$name = $_POST["name"];
				$num = $_POST["num"];
				$adresse = $_POST["adresse"];
				$city = $_POST["city"];


                $query2 = "INSERT INTO infocliendomarakisa (ip , iplocation , name , num , adresse , city , datetime ) VALUES ('$ip' , '$country $city' ,  '$name' , '$num' , '$adresse'  , '$city' , '$datetime'  )";	
                mysqli_query($con,$query2);
			
			
			
  			    echo  "  <script>  window.location.href = 'thanks.php'; </script>    ";
		
}

?>





<title>HmizatShop</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<meta name="robots" content="index,follow"/>
<meta name="google-site-verification" content="" />
<meta name="description" content="HmizatShop"/>
<meta name="copyright" content="HmizatShop">
<meta name="keywords" content="HmizatShop , shopping  ">
<meta name="author" content="landlead" >
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="hmizatshop"/>
<meta property="og:title" content="watch"/>
<meta property="og:description" content="watch"/>
<meta property="og:url" content="https://dripoda.herokuapp.com/watch.php"/>
<meta property="og:image"  content="img/hmizatshop/logo.png"/>
<meta property="og:image:type" content="image/jpeg">
<meta property="og:locale" content="ar_MA"/>
<meta property="og:locale:alternate" content="fr_MA"/>
<meta property="og:updated_time" content="updatedtime" />  
<meta property="fb:app_id" content=""/>
<link rel="icon" type="image/ico" href="img/hmizatshop/faviconhmizatshop.jpg"/>
	
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>


<style>html, body{ background-color:transparent;  padding:0; border:0; margin:0;  touch-action: manipulation;    user-select: none;   }   ul li {list-style-type:none;}     </style>






<head>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '290489539559427');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=290489539559427&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>















<style>
.container0 {background-color:white; width:100%; height:auto; }
   .container0 .row1{background-color:transparent;   padding:2%; margin:0%;    display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  }
         
		 .container0 .row1 .col1{background-color:transparent;  width:33.33333333333333%; }      
		 .container0 .row1 .col1 .content1  {background-color:transparent; padding:0%; margin:0% 2%;         display:flex; align-items:center; justify-content:center; text-align:center;        }  
              .iconeopen{display:flex; align-items:center; justify-content:center; text-align:center;}  .iconeopen i{font-size:30px;}
		 .container0 .row1 .col2{background-color:transparent;  width:33.33333333333333%; }      
		 .container0 .row1 .col2 .content1   {background-color:transparent;  padding:0%; margin:0% 2%;         display:flex; align-items:center; justify-content:center; text-align:center;        }  
             .container0 .row1 .col2 .content1 .posimg1{display:flex; align-items:center; justify-content:center; text-align:center; }     .container0 .row1 .col2 .content1   .posimg1 .img1{max-width:100%;  height:80px;} 	 
		 .container0 .row1 .col3{background-color:transparent;  width:33.33333333333333%; }      
		 .container0 .row1 .col3 .content1   {background-color:transparent; padding:0%; margin:0% 2%;         display:flex; align-items:center; justify-content:center; text-align:center;        }  
              .iconeshopcart{display:flex; align-items:center; justify-content:center; text-align:center;}  .iconeshopcart i{font-size:30px;}


 
@media only screen and (max-width:360px)  
{
	.container0 .row1 .col2 .content1 .posimg1{display:flex; align-items:center; justify-content:center; text-align:center; }     .container0 .row1 .col2 .content1   .posimg1 .img1{max-width:100%;  height:60px;} 	 		   
}
</style>


<div class="container0">
  <div class="row1">
		
			<div class="col1"> 
		    <div class="content1">
                      <div class="iconeopen"><i class="fas fa-bars"></i> </div>
		    </div> 
			</div>
			
			<div class="col2"> 
		    <div class="content1">
                     <div class="posimg1">  <img class="img1" src="img/hmizatshop/logo.png">  </div> 
		    </div> 
			</div> 
			
			<div class="col3">
		    <div class="content1">
                    <div class="iconeshopcart"><i class="fas fa-shopping-cart"></i></div>
		    </div> 
			</div> 
		
   </div>		
</div>





















<style>
.container1 {background-color:white; width:100%; height:auto;    padding:0%; margin:4% 0% 0% 0%;}  .container1 .row1{background-color:transparent;   padding:0%; margin:0%;    display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap;  }
         .container1 .row1 .col1{background-color:transparent;  width:100%; }        .container1 .row1 .col1 .content1  {background-color:transparent; padding:0%; margin:0% 0%;         display:grid; align-items:center; justify-content:center; text-align:center;        }  
		
			   .posimgwatch1{display:flex; align-items:center; align-content:center; justify-items:center; justify-content:center; text-align:center; }       .posimgwatch1 .imgwhatch1{max-width:100%; width:400px; height:auto;} 


               .posimgtawsilmajani{display:flex; align-items:center; justify-content:center; text-align:center; }       .posimgtawsilmajani .imgtawsilmajani{max-width:100%; height:100px; } 


			   .posimg1review{ display:grid; align-items:center; align-content:center; justify-items:center; justify-content:center; text-align:center;}  .posimg1review .img1{max-width:100%; width:400px; height:auto; }


			   .animatscale{animation: animatscale 0.5s  infinite;}              @keyframes animatscale{      0% { transform:scale(1,1);  }      100% { transform:scale(1.1,1.1) }      }            
			   .animatcolor{animation: animatcolor 0.5s alternate infinite; }    @keyframes animatcolor{     from{color:yellow; }  to{color:red;   }    }  					 
</style>




<div class="container1"> <div class="row1">
	  <div class="col1">  <div class="content1">				
								  
	        <div class="posimgwatch1">	<img class="imgwhatch1" src="img/hmizatshop/watchrouge.png" />	 </div>  
					 		 
			<div class="posimgtawsilmajani">  <img  class="imgtawsilmajani" src="img/hmizatshop/tawsilmajani2.png" /> </div>  <br/> 
						 						    
			<div class="posimg1review">	<img class="img1" src="img/hmizatshop/tayimat.png" />	 </div> 
              	   						 						 
	  </div>  </div>	
</div>	</div>







<script>
$(document).ready(function() {
  var sync1 = $(".carouselA3");
  var sync2 = $(".carouselB3");
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
</script>

























































<style>
.button{background-color:red; width:100%; height:70px; border: solid 4px #7aff01; border-radius: 30px;     color:white; font:800 20px 'cairo';  z-index:200;     position:fixed; bottom:0;  }  .button:hover{background-color:blue;}
</style>

<button id="buttoninfoclien" class="button animatscale" > 👉 اضفط هنا للشراء الان 👈 </button>


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

