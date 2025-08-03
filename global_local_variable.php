<?php
//global variable Example........................
$a = 1;
$b = 2;
function sum()
{
	global $a,$b;
	$b=20;
	$c=$a+$b;
	echo $c;
}
sum();

echo"<br>";

//global variable Example........................
$cells =0;
function countcell()
{
	global $cells;
	$cells++;
	echo "The Function called $cells times <br>";
}
countcell();
countcell();
echo"<br>";

// global variable ensecure tai ata privately krte caile static method use korte hba

function countcell1()
{
	static $cells = 0;
	$cells++;
	echo "The Function called $cells times <br>";
}
countcell1();
countcell1();
echo"<br>";


?>