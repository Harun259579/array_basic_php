<?php
function salestax($price,$tax)
{
	function convert_BDT($dollar,$convert=120)
	{
		$BDT = $dollar*$convert;
		return $BDT;


	}
	$total = $price+($price*$tax);
	echo "Total Cost in $:$total"."<br>"."Total Cost In BDT:".convert_BDT($total);

}
salestax(15.5,.75);

echo"<br>";
?>


<?php
//nested function reallife example.....................
$my_balence = 50000;


function findbalence()
{
	global $my_balence;
	return $my_balence;

}

function deposit($amount)
{
	global $my_balence;

	if($amount>0)
	{
		$my_balence+=$amount;
		echo "Depositted: $amount | New Balence : $my_balence\n"."<br>";
	}
	else
	{
		echo"Invalid";
	}


}

function suffitientbalence($amount)
{
	global $my_balence;
	return $my_balence>=$amount;


}

function withdrow($amount)
{
	global $my_balence;
	if($amount>0)
	{
		if(suffitientbalence($amount))
		{
			$my_balence -= $amount;
			echo "Withdrow: $amount | Current Balance: $my_balence\n"."<br>";

		}
		else
		{
			echo "Insuffitiant Balence in Your Account! Available Balence is $my_balence"."<br>";
		}
	}
	else
	{
		echo"Invalid";
	}


}


echo "Current Balence:  ".findbalence()."\n"."<br>";
deposit(20000);
withdrow(30000);
withdrow(40000);


?>
