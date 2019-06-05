<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-05
 * @Email:  jpyan2906@gmail.com
 */

class Hanoi
{
	private $moveCount;
	public function __construct()
	{
		$this->moveCount = 0;
	}

	private function move($ori, $dest)
	{
		$this->moveCount++;
		echo "第".$this->moveCount."次::"." $ori===>>>$dest\n";
	}

	public function hanoi($disks,$ori,$mid,$dest)
	{
		if ($disks == 1) {
			$this->move($ori,$dest);
		}else{
			$this->hanoi($disks-1,$ori,$dest,$mid);
			$this->move($ori,$dest);
			$this->hanoi($disks-1,$mid,$ori,$dest);
		}
	}
}

$hanoiObj = new Hanoi();
$hanoiObj->hanoi(3,'A','B','C');