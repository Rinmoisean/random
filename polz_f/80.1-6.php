<?php
//1
	function func($num) {
		echo $num * $num * $num;
        echo func(2);
		  echo '<br>';
		  echo '<br>';
	}
	//2
		function fun($num) {
        if ($num > 0 ) {
            echo '+++';
        }
        elseif($num == 0) {
            echo 'error';
        } 
        else {
            echo '---';
        }
    }
    fun(-20);
	 echo '<br>';
		  echo '<br>';
	 //3
	 function fu($num1, $num2, $num3) {
		echo $num1 + $num2 + $num3;
	}
	
	fu(15, 2, 13);
	echo '<br>';
		  echo '<br>'; 
	//4
	
	function f($num = 5) {
		echo $num * $num;
	}

$param1 = 1;
	$param2 = 2;
	$param3 = 3;
    f($param2); 
	 echo '<br>';
    f($param3);  echo '<br>';
    f($param1); 
	 echo '<br>';
		  echo '<br>';
	//5
	function funct($num = 5) {
		echo $num * $num;
	}

    func(2); // 2 * 2 = 4
    func(3); // 3 * 3 = 9 
    func(); // 5 * 5 = 25 (функция принимает значение 5)
	 echo '<br>';
		  echo '<br>';
	//6
	function functi($num1 = 0, $num2 = 0) {
		echo $num1 + $num2;
	}

	func(2, 3); // 2 + 3 = 5 
	func(3); // 3 + 0 = 3
	func(); // 0 + 0 = 0 ($num = 0, $num2 = 0)
	echo '<br>';
		  echo '<br>';
	?>