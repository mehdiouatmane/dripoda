

<?php

$ip=$_SERVER['REMOTE_ADDR'];
$details = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));       
$countryCode= isset($details['countryCode']) ?  $details['countryCode'] : '';  


if($countryCode==="US")
{
      echo " country is US .";
}
else
{ 
	echo "country is not US .";
}


?>


