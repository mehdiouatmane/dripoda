









<?php

$ip=$_SERVER['REMOTE_ADDR'];

$details = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));       
$country= isset($details['country']) ?  $details['country'] : '';  

if($ip==="37.19.196.114")
{
      echo " country is US .";
}
else
{ 
	echo "country is not US .";
}


?>


