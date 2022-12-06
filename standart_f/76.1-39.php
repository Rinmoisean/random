<?php
//1
	$arr = [1, 2, 3, 4, 5];
    $result = in_array(3,$arr);
    var_dump($result);
	 echo '<br>'; echo'<br>';
//2-4
	$arr = [1, 2, 3, 4, 5];
	echo array_product($arr).'<br>';
    echo array_sum($arr).'<br>';
    echo count($arr);
	 echo'<br>';echo'<br>';
//5
var_dump(range(1,100));
echo'<br>';echo'<br>';
//6 
var_dump(range('a','z'));
echo'<br>';echo'<br>';
//7
echo $result =  implode('-', [1, 2, 3, 4, 5, 6, 7, 8, 9]) ;
echo'<br>';echo'<br>';
//8
echo array_sum(range(1, 100));
echo'<br>';echo'<br>';
//9
echo array_product(range(1, 100));
echo'<br>';echo'<br>';
//10
$arr1 = [1, 2, 3];
	$arr2 = ['a', 'b', 'c'];

    $res = array_merge($arr1, $arr2);
    var_dump($res);
	 echo'<br>';echo'<br>';
	 //11
	 $arr = [1, 2, 3, 4, 5];
    array_slice($arr, 1, 3);
    var_dump($arr);
	 echo'<br>';echo'<br>';
	 //12-15
	 $arr = [1, 2, 3, 4, 5];
    $res = array_splice($arr, 1, 2);
    var_dump($res);
	 echo'<br>';echo'<br>';
	 $re = array_splice($arr, 1, -1);
    var_dump($re);
	 echo'<br>';echo'<br>';
	 array_splice($arr, 2, 0, ['a', 'b', 'c']);
    var_dump($arr);
	 echo'<br>';echo'<br>';
	 array_splice($arr,1,0,['a','b']);
    array_splice($arr,4,0,['c']);
    array_splice($arr,6,0,['e']);
	 echo'<br>';echo'<br>';
	 //16
	 $arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);
var_dump($values);
var_dump($keys);
echo'<br>';echo'<br>';
//17

$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];

 $result = array_combine($arr1, $arr2);
 var_dump($result);
 echo'<br>';echo'<br>';

 //18
 $arr = ['a' => 1, 'b' => 2, 'c' 
		=> 3]; 
        var_dump(array_flip($arr));
		  echo'<br>';echo'<br>';
 //19
 $arr = [1, 2, 3, 4, 5];
    var_dump(array_reverse($arr)); 
	 echo'<br>';echo'<br>';
	 
//20
$arr = ['a', '-', 'b', '-', 'c', 
		'-', 'd']; 
        echo array_search('-', $arr);
		  echo'<br>';echo'<br>';
//21
$arr = ['a', '-', 'b', '-', 'c', 
		'-', 'd']; 
        array_search('-', $arr);
        $result = array_splice($arr, 1, 1);
        var_dump($result);
		  echo'<br>';echo'<br>';
//22
$arr = ['a', 'b', 'c', 'd', 'e'];
	$res = array_replace($arr, [0=>'!', 3=>
		'!!']); 
	var_dump($res);
	echo'<br>';echo'<br>';
//23
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', 
		'4'=>'b']; 
    uksoft($arr);
    var_dump($arr);
	 echo'<br>';echo'<br>';
//24
$arr = ['a' => 1, 'b' => 2, 'c' 
		=> 3]; 
        echo array_rand($arr);
		  echo'<br>';echo'<br>';
//25
$arr = ['a' => 1, 'b' => 2, 'c' 
		=> 3]; 
        $key = array_rand($arr);
        echo $arr[$key];
		  echo'<br>';echo'<br>';
//26-29
$arr = [1, 2, 3, 4, 5];
    shuffle($arr);
	var_dump($arr);
	echo'<br>';echo'<br>';
	$arr = range(1, 25);
shuffle($arr);
var_dump($arr);
echo'<br>';echo'<br>';
$arr = range('a', 'z');
shuffle($arr);
var_dump($arr);
echo'<br>';echo'<br>';
$arr = 'fdjwuy';
       echo str_shuffle($arr);
		 echo'<br>';echo'<br>';
//30
$arr = ['a', 'b', 'c', 'b', 'a'];
var_dump(array_unique($arr));
echo'<br>';echo'<br>';
//31
$arr = [1, 2, 3, 4, 5];
    array_shift($arr);
    array_pop($arr);
    var_dump($arr);
	 echo'<br>';echo'<br>';
//32
$arr = [1, 2, 3, 4, 5];
array_unshift($arr,0);
array_push($arr, 6);
var_dump($arr);
echo'<br>';echo'<br>';
//33
$arr = ['a', 'b', 'c'];
    $res =  array_pad($arr, 5, '-');
    var_dump($res);
	 echo'<br>';echo'<br>';
//34
var_dump(array_fill(0, 10, 'x'));
echo'<br>';echo'<br>';
//35
$arr = ['a', 'b', 'c', 'd'];
	
	$result = array_chunk($arr, 5);
	var_dump($result);
	echo'<br>';echo'<br>';
//36
$arr = ['a', 'b', 'c', 'b', 'a'];
    var_dump(array_count_values($arr));
	 echo'<br>';echo'<br>';
//37
$arr = [1, 2, 3, 4, 5];
    $result = array_map('sqrt', $arr);
	var_dump($result);
	echo'<br>';echo'<br>';
//38
$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
    $result = array_intersect($arr1, $arr2);
	var_dump($result);
	echo'<br>';echo'<br>';
//39
$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
    $result = array_diff($arr1, $arr2);
    var_dump($result);
	 echo'<br>';echo'<br>';

?>