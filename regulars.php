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

//Дана строка 'a1a a22a a333a a4444a a55555a aba aca'.
//Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a', а между ними любое количество цифр.
$input = 'a1a a22a a333a a4444a a55555a aba aca';
$regexp = '/a\\d+a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aa a1a a22a a333a a4444a a55555a aba aca'.
//Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a',
//а между ними любое количество цифр (в том числе и ноль цифр, то есть строка 'aa').
$input = 'aa a1a a22a a333a a4444a a55555a aba aca';
$regexp = '/a\\d*a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'avb a1b a2b a3b a4b a5b abb acb'.
//Напишите регулярку, которая найдет строки следующего вида: по краям стоят буквы 'a' и 'b', а между ними - не число.
$input = 'avb a1b a2b a3b a4b a5b abb acb';
$regexp = '/a\\Db/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aba aea aca aza axa'. Напишите регулярку, которая найдет строки aba, aea, axa, не затронув остальных.
$input = 'aba aea aca aza axa';
$regexp = '/a[bex]a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aba aea aca aza axa a.a a+a a*a'. Напишите регулярку, которая найдет строки aba, a.a, a+a, a*a, не затронув остальных.
$input = 'aba aea aca aza axa a.a a+a a*a';
$regexp = '/a[b\\.\\+\\*]a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Напишите регулярку, которая найдет строки следующего вида: по краям стоят буквы 'a', а между ними - цифра от 3-х до 7-ми.
$input = 'a5a a9a b4a ab4 afd';
$regexp = '/a[3-7]a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Напишите регулярку, которая найдет строки следующего вида: по краям стоят буквы 'a', а между ними - буква от a до g.
$input = 'ada aia b4a aaa afd';
$regexp = '/a[a-g]a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Напишите регулярку, которая найдет строки следующего вида: по краям стоят буквы 'a', а между ними - буква от a до f и от j до z.
$input = 'aga aaa aza ab4 afa aja';
$regexp = '/a[a-fj-z]a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aba aea aca aza axa a-a a#a'.
//Напишите регулярку, которая найдет строки следующего вида: по краям стоят буквы 'a', а между ними - не 'e' и не 'x'.
$input = 'aba aea aca aza axa a-a a#a';
$regexp = '/\ba[^ex]a\b/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'wйw wяw wёw wqw'.
//Напишите регулярку, которая найдет строки следующего вида: по краям стоят буквы 'w', а между ними - буква кириллицы.
$input = 'wйw wяw wёw wqw';
$regexp = '/\bw[а-яё]w\b/u';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aAXa aeffa aGha aza ax23a a3sSa'.
//Напишите регулярку, которая найдет строки следующего вида:
//по краям стоят буквы 'a', а между ними - маленькие латинские буквы, не затронув остальных.
$input = 'aAXa aeffa aGha aza ax23a a3sSa';
$regexp = '/a[a-z]+a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aAXa aeffa aGha aza ax23a a3sSa'.
//Напишите регулярку, которая найдет строки следующего вида:
//по краям стоят буквы 'a', а между ними - маленькие и большие латинские буквы, не затронув остальных.
$input = 'aAXa aeffa aGha aza ax23a a3sSa';
$regexp = '/a[a-z]+a/i';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aAXa aeffa aGha aza ax23a a3sSa'.
//Напишите регулярку, которая найдет строки следующего вида:
//по краям стоят буквы 'a', а между ними - маленькие латинские буквы и цифры, не затронув остальных.
$input = 'aAXa aeffa aGha aza ax23a a3sSa';
$regexp = '/a[a-z0-9]+a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);
echo '<br>';

//Дана строка 'aaa aaa aaa'. Напишите регулярку, которая заменит первое 'aaa' на '!'.
$input = 'aaa aaa aaa';
$regexp = '/aaa/';
$result = preg_replace($regexp, '!', $input, 1);
echo $result.'<br>';

//Дана строка 'aaa aaa aaa'. Напишите регулярку, которая заменит последнее 'aaa' на '!'.
$input = 'aaa aaa aaa';
$regexp = '/aaa$/';
$result = preg_replace($regexp, '!', $input);
echo $result.'<br>';

//Дана строка 'aeeea aeea aea axa axxa axxxa'.
//Напишите регулярку, которая найдет строки следующего вида:
//по краям стоят буквы 'a', а между ними - или буква 'e' два раза или буква 'x' любое количество раз.
$input = 'aeeea aeea aea axa axxa axxxa';
$regexp = '/a(e{2}|x+)a/';
preg_match_all($regexp, $input, $matches);
echo '<pre>';
print_r($matches[0]);