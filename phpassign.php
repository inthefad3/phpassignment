<?php

$families = array
  (
	"Mavs"=>array
	(
		"Dirk",
		"JT",
		"Chandler"
	),
	"Refs"=>array
	(
		"crushed the"
	),
	"Heat"=>array
	(
		"LeBron",
		"Wade",
		"Bosh"
	)
  );
  
foreach ($families as $value)
{
	foreach ($value as $value)
	{
		echo $value . "</br>";
	}
}; 
echo "<pre>";
 print_r($families);
 echo "</pre>";
?>
