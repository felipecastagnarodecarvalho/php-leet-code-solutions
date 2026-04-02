<?php

/**
 * Remove Duplicates from Sorted Array
 *
 * Given an integer array `nums` sorted in non-decreasing order, remove the duplicates
 * in-place such that each unique element appears only once. The relative order of
 * the elements should be kept the same.
 *
 * The function should modify the input array so that the first `k` elements of `nums`
 * contain the unique elements in the order they initially appeared. The remaining
 * elements beyond `k` are not important.
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $k = 0;

        foreach ($nums as $num) {
            // Allow first 2 elements OR ensure current != nums[k-2]
            if ($k < 2 || $num !== $nums[$k - 2]) {
                $nums[$k] = $num;
                $k++;
            }
        }

        return $k;
    }
}
