<?php

require_once('../vendor/autoload.php');

use Viber\Client;

$api_key = '4943d4d72027d030-2aed1dee1b20ba6c-88b7116807d00be5';

$webhookUrl = 'https://school-bot-demo.herokuapp.com/bot.php';

try{
    $client = new Client(['token' => $api_key]);
    $result = $client->setWebhook($webhookUrl);
    echo 'Success\n';
} catch (Exception $e) {
    echo 'Error: ' . $e->getError() . '\n';
}