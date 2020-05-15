<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$client = HttpClient::create();

$browser = new HttpBrowser($client);

$browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/');
$browser->clickLink('Login');

$crawler = $request->submitForm('Go', [
    'username' => 'jocimar@jocimar.com.br',
    'password' => '123456789' 
], "GET");

var_dump($crawler->html());

//$htmlForm = 
//var_dump($htmlLogin->html());