<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://webautomation.io/api/sessions/data/195508/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic aGVyb3N1bm1pY3Jvc3lzdGVtQGdtYWlsLmNvbTphZG1pbmhlbmRyYTIwMjIh'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>