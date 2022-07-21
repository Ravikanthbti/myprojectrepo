<?php

$n=17;
$count=0;
for($i=1;$i<=$n;$i++){

    if($n%$i==0){
        $count++;
    }
}
if($count==2){
    echo "prime";
}else{
    echo "not prime";
}


?>