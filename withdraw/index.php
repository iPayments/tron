<?php
$pkey = $_GET['pkey'];
$amo = $_GET['amo'];
$to = $_GET['to'];
if(empty($pkey)&&empty($amo)&&empty($to)){
$CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  
echo'{"error":"1","message":"no parameter found","usage":"https://'.$CurPageURL.'?pkey=key&amo=1&to=Trq......x}';
return;
}
$curl = curl_init(); 
 
curl_setopt_array($curl, array( 
    CURLOPT_URL => "https://txt.i-Payments.site/tron/send/?pkey='.$pkey.'&amo='.$amo.'&to='.$to.'", 
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
