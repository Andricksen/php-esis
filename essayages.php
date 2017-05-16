
<form methode="post">
	<input type="select" name="date" value="<?=date("Y-m-d");?>">
	<input type="submit">

</form>
<?php

print_r(date_create('13-02-2013'));

$test = new DateTime('02-31-2011');
echo date_format($test, 'Y-m-d'); // 2011-03-03 00:00:00
$test = new DateTime('06/31/2011');
echo '<br>'.date_format($test, 'Y-m-d'); // 2011-07-01 00:00:00

if(date($test)){
	echo "string";
}
 
/*
git init
git branch esssaiii
git checkout nombranch
git add --all
git commit -m
git push origin nombranch
*/

//git pull origin master
?>
 