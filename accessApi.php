<?php
function createClient()
{
    $client = new Google_Client();
    $client->setApplicationName("ProjectBovn1");
    $client->setDeveloperKey('AIzaSyB19KuHFmFJD7RyomDfUuii4P5zZFgJH5Y');
    $client->setClientId('998023255394-a017afj6fe66qjc795q5ak4nrqdru040.apps.googleusercontent.com');
    $client->setClientSecret('vZbkTsxbmj5SptWNxUmE0BcV');
    $client->setRedirectUri('http://localhost/openiz/google-api-calendar/google-calendar-procedural/index.php');
    return $client;
}


?>