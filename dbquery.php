<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "afya";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


//select all clients whose last received time is at least 24 hours
$sql = "SELECT * FROM clients";
$query = mysqli_query($conn, $sql) or die( mysqli_error($conn));
while ($clients = mysqli_fetch_array($query))
{
    print_r($clients);
    //look for a suitable message that has never been sent to that user
    //$message = "SELECT messages.content FROM messages JOIN sent_messages
    //            ON messages.id = sent_messages.messageid
    //            AND sent_messages.clientid <> $clients[id] ORDER BY RAND() LIMIT 1";
    $message = "SELECT * FROM messages";
    //send the message.

    //in case of success update the last received.

    //in case of failure ignore
}

?>