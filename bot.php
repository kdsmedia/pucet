<?php

function headers(){
  global $user_agent,$cookie;
  $header=array();
  //HOST
  $header[]="https://99faucet.com";
  //ACCEPT
  $header[]="https://99faucet.com/dashboard";
  //USER-AGENT
  $header[]="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36";
  //COOKIE
  $header[]="bitmedia_fid=eyJmaWQiOiJmOTJmZTExYTU1Y2VlMzUwMWNhYjVkODc2MTcxMmU3OCIsImZpZG5vdWEiOiI1ZWMzMTgzY2M5NmIwODViOTUxODc1Y2NkODYzNjMzMCJ9; captcha=recaptchav2; captcha=recaptchav2; ci_session=0l3feihg90lgi6l9ovkobsfhghtkcc4v";
  
return $header;
}


function curl($url=0,$header=0){
$ch=curl_init();
curl_setopt_array($ch,array(
    CURLOPT_URL => $url,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => true,
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_SSL_VERIFYPEER => null,
    CURLOPT_COOKIEJAR => "cookie.txt",
    CURLOPT_COOKIEFILE => "cookie.txt",
));
return curl_exec($ch);
curl_close($ch);
}
system('clear');


function faucet(){
//LINKFAUCET
$url="https://99faucet.com/notimer";
return curl($url,headers());
}



$dashboard=faucet();

$usr=explode('<p class="username">',$dashboard)[1];
$usr=explode('</p>',$usr)[0];
echo "user: ".$usr." \n";
print_r($usr);

//CONTINUE JANGAN LUPA SUBSCRIBE
?>
