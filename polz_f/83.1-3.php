<?php
//1
	function isPositive($arr) {
		foreach ($arr as $elem) {
			if ($elem % 2 == 0) {
				return false;
			}
		}
		
		return true;
	}

	//2
	function isPositiv($arr) {
		foreach ($arr as $elem) {
			if ($elem % 2 !== 0) {
				return false;
			}
		}
		
		return true;
	}
?>