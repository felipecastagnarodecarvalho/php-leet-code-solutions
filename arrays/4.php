<?php

/**
 * Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.
 */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        // Use an associative array for constant-time lookups
        $seen = [];

        foreach ($nums as $num) {
            // If the number is already in the array, return true
            if (isset($seen[$num])) {
                return true;
            }
            // Mark the number as seen
            $seen[$num] = true;
        }

        // If no duplicates are found, return false
        return false;
    }
}