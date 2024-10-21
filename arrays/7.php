<?php

/**
 * Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.
 *
 * Note that you must do this in-place without making a copy of the array.
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $zeros = 0;
        $newValues = [];

        for($i = 0; $i < count($nums); $i++)
        {
            if ($nums[$i] == 0) {
                $zeros++;
            } else {
                $newValues[] = $nums[$i];
            }
        }

        for($i = 0; $i < $zeros; $i++)
        {
            $newValues[] = 0;
        }

        $nums = $newValues;
    }
}