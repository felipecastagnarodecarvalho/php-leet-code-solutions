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
     * Removes duplicates from a sorted array in-place and returns the count of unique elements.
     *
     * @param Integer[] $nums The reference to the input array.
     * @return Integer The count of unique elements in the modified array.
     */
    function removeDuplicates(&$nums) {
        // Remove duplicates by using the array_unique function, which keeps the first occurrence.
        $nums = array_unique($nums);

        // Return the count of unique elements in the modified array.
        return count($nums);
    }
}
