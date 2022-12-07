<?php
//1
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

function r( $arr ) {
    if ( is_array( $arr ) && count( $arr ) > 0 ) {
        $keys = array_keys( $arr );    
        echo $keys[0]." => ".$arr[ $keys[0] ]."\n";
        array_shift( $arr );
        r( $arr );
    }
}

r( $arr );
echo '<br>';
echo '<br>';
//2
function rec( $arr, &$summ ) {
    if ( is_array( $arr ) && count( $arr ) > 0 ) {
        $keys = array_keys( $arr );    
        $summ = $summ + $arr[ $keys[0] ];
        array_shift( $arr );
        rec( $arr, $summ );
    }
}

$summ = 0;
rec( $arr, $summ );

echo "summ = ".$summ."\n";

?>