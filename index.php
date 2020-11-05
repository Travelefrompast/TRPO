<?php
Class A
{
	public function lin($a, $b)
	{
		if($a==0)
		{
			return null;
		}
		$x=-($b/(2*$a));
		return $x;
	}
}
Class B extends A
{
	protected function dis($a, $b, $c)
	{
		$d=($b*$b-(4*$a*$c));
		return $d;
	}
	public function korni($a, $b, $c)
	{
		if ($a==0)
		{
			return $this->lin($b,$c);
		}
		$d=$this->dis($a, $b, $c);
		if($d>0)
		{
			$d=sqrt($d);
			return $this->x=array((-$b+$d)/(2*$a),(-$b-$d)/(2*$a));
		}
		if($d==0)
		{
			$x=(-($b)/(2*$a));
			return $this->x=array((-$b+$d)/(2*$a));
		}
	}
}
$a=new A();
$b=new B();
var_dump($b->korni(2,5,2));
?>