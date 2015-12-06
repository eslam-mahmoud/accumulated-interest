<?php
	#accumulated interest
	
	//Starting balance of the account
	$account_balance = 0;
	//Money you will add to the account monthly
	$monthly_savings = 1000;
	//Number of months you will keep saving
	$months = 120;
	//The intrest
	$monthly_interest_percentage = 8/100/12;
	//the action
	for ($i=1; $i <= $months ; $i++) {
		$account_balance += (($account_balance*$monthly_interest_percentage) + $monthly_savings);
		echo "M " . $i . ", B " . number_format($account_balance) . "<br>";
	}
?>
