<?php


Class MagicMethods{

public function newFunction(){
	echo "New function";
}

public function test(){
	echo "Test function";
}

public function __call($name, $arguments){
   echo $name;
}
}

$a = New MagicMethods();
echo $a->newFunction();
echo "<br/>";
echo $a->newFunction11111();

