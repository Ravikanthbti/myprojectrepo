<?php

$colors=array("red","green","yellow" );
$fruit=array("apple","guvava","banana" );
$cars=array("bmw","audi","rr" );

$newarr=array_merge($colors,$fruit,$cars);
print_r($newarr);
echo "<br>";
$name=array("red","green","yellow" );
$age=array(45,50,20 );
//array combine only take two parameters
$newarrr=array_combine($name, $age);
print_r($newarrr);


?>