<?php
/*
1) Criar variável com seu nome e imprimí-lo

2) Criar um array com pelo menos 3 valores

3) Criar array chave-valor e imprimir pelo menos 1 valor

4) Definir uma constante e imprimir o valor dela

5) Imprimir todo o array

6) Usar o var_dump para todas as variáveis criadas 
	anteriormente
 ** Uso: var_dump($var); (não precisa de echo)
*/

define('DATA', 'pepinos');

$name = 'Maykon';
$firstName = 'Maykon';
echo $name . ' - ' . $firstName;

echo '<br />';

$primos = array(1,2,3,5,7);
echo $primos[2];

echo '<br />';

$data = array(
	'curso' => 'PHP Essentials',
	'duracao' => '8 horas',
	'instrutor' => 'Maykon R. Meier'
);

echo $data['curso'];

echo '<br />';
echo DATA;

echo '<br />';

print_r($primos);

echo '<br />';

var_dump($primos);














