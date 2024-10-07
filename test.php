<?php

$url = 'http://api.coindesk.com/v1/bpi/currentprice.json';

$response = file_get_contents($url);
if ($response === False){
    die('Error');
}
$data = json_decode($response, true);

print_r($data);

?>

<!-------------------------------------------------------------------------------->

<!DOCTYPE html>