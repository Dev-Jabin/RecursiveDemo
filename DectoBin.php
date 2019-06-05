<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-05
 * @Email:  jpyan2906@gmail.com
 */
class DectoBin
{
	
	function __construct()
	{
		# code...
	}

	public function ten2two($n)
	{
		if ($n<1) {
			return;
		}else{
			$this->ten2two(intval($n/2));
			echo ($n%2);
		}
	}
}

$dectobinObj = new DectoBin();
$dectobinObj->ten2two(42);
echo "\n";