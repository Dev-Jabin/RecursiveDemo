<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-05
 * @Email:  jpyan2906@gmail.com
 */
class Fibonacci
{
	public function __construct()
	{
		# code...
	}

	public function fibonacci($n)
	{
		if ($n<0) {
			throw new Exception("input error type", 1);
		}
		if ($n<=1) {
			return $n;
		}
		$fibItem1 = $this->fibonacci($n-2);
		$fibItem2 = $this->fibonacci($n-1);
		$sum = $fibItem1 + $fibItem2;
		return $sum;
	}

	public function printFib($n)
	{
		for ($i=0; $i <= $n; $i++) { 
			echo $this->fibonacci($i)."  ";
		}
	}
}

$fibonacciObj = new Fibonacci();
$fibonacciObj->printFib(10);
echo "\n";