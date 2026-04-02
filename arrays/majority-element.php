<?php
/**
 * Given an array nums of size n, return the majority element.
 * The majority element is the element that appears more than ⌊n / 2⌋ times. You may assume that the majority element always exists in the array.
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $count = 0;
        $candidate = null;

        foreach ($nums as $num) {
            if ($count === 0) {
                $candidate = $num;
            }

            if ($num === $candidate) {
                $count++;
            } else {
                $count--;
            }
        }

        return $candidate;
    }
}