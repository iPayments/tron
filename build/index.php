<?php 
$curl = curl_init(); 
 
curl_setopt_array($curl, array( 
    CURLOPT_URL => "https://txt.i-Payments.site/tron/build/", 
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
