<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
</body>
</html>

<?php
//-Affiliate_Application (Countries,Category)
//-Affiliate_Offer (Priview link,Pay out,Currncy)
$key ='51b7493d1af15ed3865e0912f0329996b0ea4883847e8db3f198da75f0482996';
$nid = 'hitfox';

$urla = 'http://api.hasoffers.com/v3/Affiliate_Affiliate.json?Method=getAccountManager&api_key='.$key.'&NetworkId='.$nid;

echo "Affiliate URL:".$urla."<br/>";
//$urlb = 'http://api.hasoffers.com/v3/Offer.json?Method=findAllIds&NetworkToken=MY_NETWORK_TOKEN&NetworkId=SAMPLE';
$urlb ='http://api.hasoffers.com/v3/Offer.json?Method=findAllIds&NetworkToken='.$key.'&NetworkId='.$nid;

//$ch = curl_init($urla);
$ch = curl_init($urla);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$var= curl_exec($ch);
curl_close($ch);

echo "<br/><br/>=======Json==============<br/>";
print_r($var);

echo "<br/><br/><br/>=======Json To Php Array==============<br/>";
$json = json_decode($var);
echo "<pre>";
print_r($json);



//var_dump(json_decode($var));
//var_dump(json_decode($var, true));

//$ch = curl_init($url);
//$fp = fopen("example_homepage.txt", "w");

/*curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);*/
//fclose($fp);

?>