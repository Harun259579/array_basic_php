<?php
function addfive($num)
{
	$num +=5;

}
function addsix(&$num)
{
	$num +=6;

}

$orgnum = 10;
addfive($orgnum);// call by value

echo "orginal Number is $orgnum <br>";

addsix($orgnum); // call by reference ,reference pataite hola & dite hoy function parametr a

echo "orginal Number is $orgnum <br>";

echo $orgnum;

?>