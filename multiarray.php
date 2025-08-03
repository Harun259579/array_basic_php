<?php
$books = array(
	array(
	"name"=>"ict",
	"Edition"=>"2nd",
	"price"=>300
     ),
	array(
	"name"=>"mat",
	"Edition"=>"3rd",
	"price"=>700
     ),
	array(
	"name"=>"eng",
	"Edition"=>"4th",
	"price"=>500
     ),
	array(
	"name"=>"bng",
	"Edition"=>"2nd",
	"price"=>300
     ),
	

);

foreach($books as $value)
{
	foreach($value as $key => $val)
	{
		print "$key:$val <br>";
	}
	echo"<br>";
}

?>



<?php
echo "<h1>Students Information</h1>";
$students = array(
	array(
	"name"=>"Abrar",
	"ID"=>"1200012",
	"Department"=>"CSE"
     ),
	array(
	"name"=>"Noyon",
	"ID"=>"1200013",
	"Department"=>"EEE"
     ),
	array(
	"name"=>"Anowar",
	"ID"=>"1200014",
	"Department"=>"MATH"
     ),
	array(
	"name"=>"Ashik",
	"ID"=>"1200015",
	"Department"=>"CSE"
     ),
	

);

foreach($students as $value)
{
	foreach($value as $key => $val)
	{
		print "$key:$val <br>";
	}
	echo"<br>";
}

?>