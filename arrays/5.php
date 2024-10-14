<?php

/**
 * Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.
 * You must implement a solution with a linear runtime complexity and use only constant extra space.
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $seen = [];
        $duplicated = [];

        foreach($nums as $num)
        {
            if (isset($seen[$num]))
            {
                $duplicated[$num] = true;
            }

            $seen[$num] = true;
        }

        foreach($nums as $num)
        {
            if (!isset($duplicated[$num]))
            {
                return $num;
            }
        }

        return null;
    }
}