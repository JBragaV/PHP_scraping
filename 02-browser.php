<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$client = HttpClient::create();

$browser = new HttpBrowser($client);
$browser->setServerParameter('HTTP_USER_AGENT', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)');//Essa função seta uma informação no parametros da quesição
$browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/');

print_r($browser->getRequest());//getRequest retorna as informações da requisição

/*
$browser->clickLink('Login');//Apos a solicitação, a função clickLink vai achar o link com o texto enviado como parametro pra efetuar o click


$crawler = $browser->submitForm('Go', [
    'username' => 'jocimar@jocimar.com.br',
    'password' => '123456789' 
], "GET");//A função submitForm retornara um Crauler(as informações do dom) apois enviar preencher os dados no formulario, para isso os nomes do campo são infomados e os valores que eles vão receber e nesse caso passamos como primeiro parametro o texto usado no botão do formulario, no segundo parametro as finformações do formulario e no terceiro o metodo a ser usado(pradão é post)

var_dump($crawler->html());
*/