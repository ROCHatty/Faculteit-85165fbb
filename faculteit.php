<?php
echo "Van welk getal wil je de faculteit weten?\r\n";
$faculteit = readline();
$num = 1;
for ($i = 1; $i <= $faculteit; $i++) {
	$num = $num*$i;
}
echo "De faculteit van $faculteit is $num\r\n"
?>