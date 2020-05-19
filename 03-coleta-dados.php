<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$client = HttpClient::create();

$browser = new HttpBrowser($client);

$crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/');

//$texto = $crawler->filterXPath('//h2')->text();//A filterXpath busca o elemento pelo xpath do mesmo. e a text retorna o valor textual dentro do elemento encontrado
//$texto = $crawler->filter('.title')->text();//A função filter faz a seleção via seletor css e retorna o objeto com varias informações, e o text() pega o texto dentro do elemento.
$nomes = $crawler->filter('article .title')->each(function($node){return $node->text();});//O each faz uma interação no conjunto de informações recebida pela função filter
print_r($nomes);
