









<?php

$ip=$_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));
$continent=$details->geoplugin_continentCode;
$country=$details->geoplugin_countryCode;
if($continent==="EU" && $country==="UK" || $continent!="EU")
{
      echo " country is UK or not from Europe .";
}
else
{ 
	echo "country is in Europe , but its not UK .";
}


?>


