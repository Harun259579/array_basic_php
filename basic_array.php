<?php
$arr = array("abrar",45,"Trainee");
echo $arr[2]."<br>";
echo "<pre>";
print_r($arr);//index and index value
echo "</pre>"."<br>";


//unorderlist data show........................
print "<ul>";
for ($i=0; $i <=2 ; $i++) 
{ 
	 print "<li>";
	 print $arr[$i];
	 print "</li>";
	
}
print"</ul>"."<br>";

//data finding ase naki nai..................
if(in_array(45,$arr))
{
	echo "data found";

}
else
{
	echo "data not found";

}

//data search in array........................
echo array_search('Trainee',$arr);
?>