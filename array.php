<?php

$colors=["red","green","blue",10,10.5];

// echo "<pre>";
// print_r($colors);
// echo "</pre>";
$length=count($colors);

for($i=0; $i<=$length-1; $i++){

echo  "using loop " . $colors[$i] ."<br>";

}

$n=3;
$m=5;
for($i=1;$i<=10;$i++){
    echo $n*$i ." ";
}
    echo "<br>";

    for($j=1;$j<=10;$j++){

        echo $m*$j ." ";
    }


?>