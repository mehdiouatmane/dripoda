hhh
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



<html>
<head>
  
      <meta name="facebook-domain-verification" content="4v6ohl9pe3ks7lff0cndesm6e90stx" />
  
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
      fbq('init', '948044842454444');
      fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=948044842454444&ev=PageView&noscript=1"
      /></noscript>
      <!-- End Facebook Pixel Code -->
  
</head> 
  
<body>
</body>
</html>





