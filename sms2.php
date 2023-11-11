<?php

$curl = curl_init();
//$messagebody = dbquery();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.mobilesasa.com/v1/send/bulk-personalized',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "senderID": "MOBILESASA",
    "messageBody": [
        {
            "phone": "254713934257",
            "message": "Caro, your water bill of KES 6700 is due on 23rd."
        }
    ]
}',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: vNfhYSPnFATheb6TNMGrcpEBzz4K7kGcLtkxxtNKrM80X7BsUezlbHNZwQmw'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
