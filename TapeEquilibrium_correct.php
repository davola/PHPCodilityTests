<?php

/**
 * While this function is correct, it is not optimized.
 *
 * Detected time complexity: O(N * N)
 *
 * Task score: 53% (correctness 100% + performance 0%)
 */
function solution($A) {
    // write your code in PHP7.0
    $min = null;
    for($P=1, $N=count($A); $P < $N; $P++){
        $left = $right = 0;
        foreach($A as $idx => $val){
            if ($idx<$P){
                $left += $val;
            }
            else{
                $right += $val;
            }
        }
        //echo "$diff\n";
        $diff = abs($left - $right);
        if (null === $min || $diff < $min){
            $min = $diff;
        }
    }
    return $min;
}
