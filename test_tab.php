<!DOCTYPE html>
<html>
<head>
	<title>Acceuil</title>
</head>

<body>
<?php

$tab=array(11,1111,111111,111111,1111);
foreach ($tab as $key => $value) {
	# code...
	echo '<br>'.$key ."=>". $value;
}
echo '<br>'.in_array(11, $tab).'<br>';
print_r(array_keys($tab)).'<br>';
echo '<br>avec array values';
print_r(array_values($tab));
echo '<br>'.array_key_exists(2, $tab);
echo '<br> ici c\'est array search -->'.array_search(111111, $tab);
$new_tab=array_unique($tab);
var_dump($new_tab);
echo '<br>';
var_dump(array_intersect($new_tab, $tab));
echo '<br>';
$new_tab[0]=123;
$new_tab[]=233;
var_dump(array_intersect_assoc($new_tab, $tab));
echo '<br>'.count($new_tab);
echo '<br>'.sizeof($new_tab);
var_dump($new_tab);
var_dump(array_flip($tab));
var_dump(array_pop($new_tab));
var_dump($new_tab);
echo '<br>';
array_push($tab, 'var','coucou','moula');
var_dump($tab);
 

echo '<br>';
var_dump(shuffle($tab));

;?> 
</body>
</html>