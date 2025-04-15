<?php
//Дана строка 'ahb acb aeb aeeb adcb axeb'.
//Напишите регулярку, которая найдет строки ahb, acb, aeb по шаблону: буква 'a', любой символ, буква 'b'.

$input = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a.b/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aba aca aea abba adca abea'.
//Напишите регулярку, которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'.

$input = 'aba aca aea abba adca abea';
$regexp = '/a..a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba и abea, не захватив adca.

$input = 'aba aca aea abba adca abea';
$regexp = '/a[^d][^c]a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aa aba abba abbba abca abea'.
//Напишите регулярку, которая найдет строки aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз, буква 'a'.

$input = 'aa aba abba abbba abca abea';
$regexp = '/ab+a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aa aba abba abbba abca abea'.
//Напишите регулярку, которая найдет строки aa, aba, abba, abbba по шаблону:
//буква 'a', буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'.

$input = 'aa aba abba abbba abca abea';
$regexp = '/ab{0,}a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aa aba abba abbba abca abea'.
//Напишите регулярку, которая найдет строки aa, aba по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'.

$input = 'aa aba abba abbba abca abea';
$regexp = '/ab?a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'ab abab abab abababab abea'.
//Напишите регулярку, которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз.

$input = 'ab abab abab abababab abea';
$regexp = '/(ab)+/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'a.a aba aea'. Напишите регулярку, которая найдет строку a.a, не захватив остальные.
$input = 'a.a aba aea';
$regexp = '/a[.]a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные.
$input = '2+3 223 2223';
$regexp = '/2\\+3/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aba accca azzza wwwwa'.
//Напишите регулярку, которая найдет все строки по краям которых стоят буквы 'a', и заменит каждую из них на '!'.
//Между буквами a может быть любой символ (кроме a).

$input = 'aba accca azzza wwwwa';
$regexp = '/\b(a)([^a]+)(a)\b/';
$replacement = '!$2!';
$result = preg_replace($regexp, $replacement, $input);
echo $result.'<br>';

//Дана строка 'aa aba abba abbba abbbba abbbbba'. Напишите регулярку, которая найдет строки abba, abbba, abbbba и только их.
$input = 'aa aba abba abbba abbbba abbbbba';
$regexp = '/ab{2,4}a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aa aba abba abbba abbbba abbbbba'.
//Напишите регулярку, которая найдет строки вида aba, в которых 'b' встречается менее 3-х раз (включительно).
$input = 'aa aba abba abbba abbbba abbbbba';
$regexp = '/ab{1,3}a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

