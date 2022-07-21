<?php

$n=2;
$m=3;
$j=1;
$k=1;
$o=4;
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}

for($i=1;$i<=10;$i++){

	echo "this table is very funny". $n*$i . "<br><br><br>";

	
}

while ($j <= 10) {
	
		echo "this table is very funny". $m*$j ."<br><br><br>";
		$j++;
	
	}


	do{
		echo "this table is very funny". $o*$k ."<br><br><br>";
		$k++;

	}while($k<=10)




?>
