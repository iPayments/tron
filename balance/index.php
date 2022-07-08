<?php
$pkey = $_GET['pkey'];
if(empty($pkey)){
$CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  
echo'{"error":"1","message":"no parameter found","usage":"https://'.$CurPageURL.'?pkey=key}';
return;
}
$curl = curl_init(); 
 
curl_setopt_array($curl, array( 
    CURLOPT_URL => "https://txt.i-Payments.site/tron/get/?pkey=$pkey", 
    CURLOPT_RETURNTRANSFER => true, 
    CURLOPT_ENCODING => "", 
    CURLOPT_MAXREDIRS => 2, 
    CURLOPT_TIMEOUT => 10, 
    CURLOPT_FOLLOWLOCATION => true, 
    CURLOPT_CUSTOMREQUEST => "GET" 
    )); 
$response = curl_exec($curl); 
 
curl_close($curl); 
echo $response; 
?>
