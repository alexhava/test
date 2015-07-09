<?php
class Test {
	
	static $static;
	var $test_var = 'Var of the Test class';
	
	public function set_test_var($val)
	{
		self::$static = 5;
		$this->test_var = $val;
	}
	
	public function get_test_var()
	{
		return $this->test_var;
	}
}

Test::$static = 3;
$test_obj1 = new Test();
$test_obj2 = new Test();
$test_obj2->set_test_var('Var of the obj 2');
echo Test::$static;
$test_obj1->test_var = 1;
echo $test_obj1->get_test_var();
echo $test_obj2->get_test_var();

