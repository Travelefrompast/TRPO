<?php
class A {}
class B extends A {
	protected $a;
	protected $b;
	public function __construct($a,$b){
		$this->a = $a;
		$this->b = $b;
	}
}
$a1=new A();
$a2=new A();
$a3=new A();
$b4=new B($a2,$a3);
$b5=new B($a1,$b4);
var_dump($b5);
?>