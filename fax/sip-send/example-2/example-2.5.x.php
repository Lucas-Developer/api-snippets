<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC850685e1d9b8c09dae0b938923dc0d42";
$token = "your_auth_token";
$client = new Client($sid, $token);

$options = array(
  "from" => "Jack",
  "sipAuthUsername" => "jack",
  "sipAuthPassword" => "secret"
);
$fax = $client->fax->v1->faxes->create(
  "sip:kate@example.com",
  "https://www.twilio.com/docs/documents/25/justthefaxmaam.pdf",
  $options
);

echo $fax->sid;
