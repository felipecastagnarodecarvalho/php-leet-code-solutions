<?php

/**
 * Given an integer array nums, rotate the array to the right by k steps, where k is non-negative.
 */
class Solution {
    /**
     * Rotate the array to the right by k steps.
     *
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        // Get the length of the array
        $n = count($nums);

        // To optimize, if k is greater than the length of the array, we can reduce it
        // by rotating only k % n times (full rotations return the array to its original state)
        $k = $k % $n;

        // Step 1: Reverse the entire array
        $this->reverse($nums, 0, $n - 1);

        // Step 2: Reverse the first k elements
        $this->reverse($nums, 0, $k - 1);

        // Step 3: Reverse the remaining n - k elements
        $this->reverse($nums, $k, $n - 1);
    }

    /**
     * Helper function to reverse a portion of the array between two indices.
     *
     * @param Integer[] $nums
     * @param Integer $start
     * @param Integer $end
     * @return void
     */
    private function reverse(&$nums, $start, $end) {
        while ($start < $end) {
            // Swap elements at indices $start and $end
            $temp = $nums[$start];
            $nums[$start] = $nums[$end];
            $nums[$end] = $temp;
            // Move towards the center
            $start++;
            $end--;
        }
    }
}