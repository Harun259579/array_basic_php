<?php
//chunk function ....... khondo kre array banano

$cards = array("abrar","abir","asik","anik","amin","arman","emon","rakib");
$hands = array_chunk($cards,4);

echo "<pre>";
print_r($hands);//index and index value
echo "</pre>"."<br>";




//array_interset()......common data nia array..........................
$cards1 = array("a"=>"abrar","b"=>"abir","c"=>"nobin","d"=>"anik"); //associate array
$cards2 = array("e"=>"abrar","f"=>"noyon","g"=>"asik","h"=>"anik");
$cards3 = array("i"=>"abrar","j"=>"abir","k"=>"asik","l"=>"anik");

$intersection = array_intersect($cards1,$cards2,$cards3);

echo "<pre>";
print_r($intersection);//index and index value
echo "</pre>"."<br>";




//array_diff()....different value khoja 1st array ar against a
$cards1 = array("a"=>"abrar","b"=>"abir","c"=>"nobin","d"=>"anik"); //associate array
$cards2 = array("e"=>"abrar","f"=>"noyon","g"=>"asik","h"=>"anik");
$cards3 = array("i"=>"abrar","j"=>"abir","k"=>"asik","l"=>"anik");

$result = array_diff($cards1,$cards2,$cards3);

echo "<pre>";
print_r($result);//index and index value
echo "</pre>"."<br>";



//array_unique().....unique name identify...........
$cards = array("abrar","abir","abrar","abir","amin","amin","emon","rakib");

$uniquename=array_unique($cards);
echo "<pre>";
print_r($uniquename);//index and index value
echo "</pre>"."<br>";



//slice() array kata
$cards = array("abrar","abir","abrar","abir","amin","amin","emon","rakib");
$slices = array_slice($cards,1,3);

print_r($slices);
echo "<br>";


//splice()....data delete and add
$cards1 = array("abrar","abir","abrar","abir");
$cards2 = array("anik","asik");
array_splice($cards1,1,0,$cards2);

print_r($cards1);
echo "<br>";



//array_sum() 
$grades = array(55,"Hello",45.2);
$total = array_sum($grades);
print $total;
echo "<br>";

//md5 function....................32bit encription thats why is not save for encrypting sensative data

echo md5("Abrar341024");
echo "<br>";

// is_numeric()....data numeric kina

if(is_numeric(500))
{
	echo"number";
}
else
{
	echo "Not Number";
}
echo "<br>";

//number Format korte number_format()
echo number_format(2500.15654,1);// 1 means dosomik ar por 1 gar niba
echo "<br>";
echo sqrt(100);
echo "<br>";
echo pi();
echo "<br>";

//passwoed_hash().....encryting
$password="Abrar";
$hashed = password_hash($password,PASSWORD_DEFAULT);
echo $hashed;
?>