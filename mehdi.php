kk

<?php
$ip = $_SERVER['REMOTE_ADDR'];
$ips = array();
$getcountry=json_decode(file_get_contents("http://ipinfo.io/".$ip));
$country=$getcountry-->country;
$page = file ("ips.txt");

foreach($page as $line)
{
	array_push($ips,$line);
}

if(in_array($country,$ips))
{
	echo"you country is blocked";
}
else
{ 
   echo "you country is unblocked.";
}


if(in_array($ip,$ips))
{
	echo"you are blocked";
}
else
{ 
   echo "you are unblocked.";
}

?>

