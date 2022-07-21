<?php
trait test{

	public function abc(){
		echo "hell abc";

	}

	public function xyz(){
		echo "hell xyz";

	}
}

trait tom{

	public function abcd(){
		echo "hell abc";

	}

	public function xyzd(){
		echo "hell xyz";

	}
}


	/**
	 * 
	 */
	class MyClass
	{
		use test,tom;
	}
	$obj=new MyClass();
	$obj->abc();
	$obj->xyz();
	$obj->xyzd();
	$obj->abcd();




?>