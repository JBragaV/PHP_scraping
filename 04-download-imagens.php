<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$client = HttpClient::create();

$browser = new HttpBrowser($client);

$crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/');

$imagens = $crawler->filter('article .img-thumbnail')->images();

if(!is_dir('imagens')){
    mkdir('imagens');
}

foreach($imagens as $imagem){
    $url = $imagem->getUri();
    $nome = basename($url);
    file_put_contents('imagens/'.$nome, file_get_contents($url));
}