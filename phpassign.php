<?php

$teams = array
  (
	"The Mavs'"=>array
	(
		"Dirk",
		"JT",
		"Chandler"
	),
	"Crushed"=>array
	(
		"the"
	),
	"the Heat's"=>array
	(
		"LeBron",
		"Wade",
		"Bosh"
	)
  );
  

foreach($teams as $key => $value)
{
	echo $key . "</br>";
	foreach ($value as $value)
	{
		echo $value . "</br>";
	}
};

echo "<pre>";
print_r($teams);
echo "</pre>";
 

?>
