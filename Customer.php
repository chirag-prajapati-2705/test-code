<?php


Class Customer{
	
    public $test = 'Public';

    protected $test1 = 'Protected Variable';
	public function __constructor(){

	
	}

	public function test(){

		echo "hello";
	}
}

class Customer1 extends Customer {



function test(){
    echo "Hello test"."<br/>";
    echo $this->test1;
}



}

$c = new Customer1();
$c->test();
echo $c->test;


/*

What is interface?
Interface is using fro code refactoring we are using for multiple inheritace purpose
We can create method without implementation.We can only define the method in inheritance but we can not implement code inside the inheritance
inheritance Test{
	public function hello();
}

What is trait?
Trait is same as like class we can create with trait keyword.
Purpose: Multiple inheritance

Difference Between interface and trait and which is best?
Trait is Best because we dont have to create all the function when we use trait inside the class.
When we use interface for multiple purpose then we need to create all the method which is defined in interface

Public :we can access inside outside the class
Protected: we can access inside the class and child class not outside the class
Private:we can access inside the class not a out side class


Inhetance: Inheritance is use for inherit the class child class extends parent class and can access the whole method and variable 

*/




