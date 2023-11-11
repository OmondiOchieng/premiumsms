<?php
$client = new Client();
$headers = [
  'Accept' => 'application/json',
  'Authorization' => 'vNfhYSPnFATheb6TNMGrcpEBzz4K7kGcLtkxxtNKrM80X7BsUezlbHNZwQmw'
];

/// loop over all the clients whose messages are due to be sent

//for each of the clients, select a random suitable message

//send the message

//if the messge has been sent successfully, update the time that the next message is supposed to be sent




$body = '{
    "senderID": "MOBILESASA",
    "message": "Hello Morgan, how are you.",
    "phone": "254713934257"
}';
$request = new Request('POST', 'https://api.mobilesasa.com/v1/send/message', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();

?>