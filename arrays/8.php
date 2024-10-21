<?php

/**
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
 *
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 *
 * You can return the answer in any order.
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $missingToTarget = [];
        $targetIndexes = [];

        for($i = 0; $i < count($nums); $i++)
        {
            $missingToTarget[] = $nums[$i] - $target;
            for($j = $i + 1; $j < count($nums); $j++)
            {
                if (($nums[$i] + $nums[$j]) === $target)
                {
                    $response = [$i, $j];
                    return $response;
                }
            }
        }
    }
}