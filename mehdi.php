









<?php

$ip=$_SERVER['REMOTE_ADDR'];

$details = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));       
$country= isset($details['country']) ?  $details['country'] : '';  

if($country==="US")
{
      echo " country is US .";
}
else
{ 
	echo "country is not US .";
}


?>


