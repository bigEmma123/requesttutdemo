<?php
require_once "vendor/autoload.php";
//Import the client interface
use GuzzleHttp\Client;

//Create a new client and set the base_uri option to the base_uri of your endpoint
$client=new Client(['base_uri'=>'http://rest.learncode.academy/api/tutorial/']);

//Send request using request method on the client object and set the HTTP VERB amd the uri
$resp=$client->request("GET",'dummydata');

//Check if the request suceeded or failed using the getStatusCode method on the response object
if($resp->getStatusCode()=="200")
{
  //You can access the entire response using the getBody method on the response object
  echo $resp->getBody();
}
else echo $resp->getStatusCode();

?>
