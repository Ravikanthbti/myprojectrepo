<?php
$emp=[
    [1 ,"rohit",32,2000],
    [2 ,"shalu",36,2000],
    [3 ,"rajan",35,2000],
    [4 ,"komal",34,2000]

];
 
// echo "<pre>";
// print_r($emp);
// echo "</pre>";

// foreach($emp as $val1){
//     foreach($val1 as $val2){
//         echo " ". $val2;
//     }
//     echo "<br> ";
// }

for($row=0;$row<=3;$row++){
    for($col=0;$col<=3;$col++){
        echo $emp[$row][$col];
    }
    echo "<br>";
}

for($i=0;$i<=10;$i++){
    echo $i;
}











?>