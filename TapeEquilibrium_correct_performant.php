<?php

/**
 * Now this function is correct and performant.
 *
 * Detected time complexity: O(N)
 * Only 1 loop solves the problem.
 *
 * Task score: 100% (correctness 100% + performance 100%)
 */
function solution($A) {
    // write your code in PHP7.0
    $tot = array_sum($A);
    $mid = $tot/2;
    $left = 0;
    $diff = null;
    for($i=0,$l=count($A)-1; $i<$l; $i++){
        $left += $A[$i];
        $right = $tot - $left;
        $thisDiff = abs($left - $right);
        // echo "$left {$thisDiff}\n";
        $diff =  (null !== $diff && $diff < $thisDiff) ? $diff : $thisDiff;
    }
    return $diff;
}
