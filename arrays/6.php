<?php

/**
 * You are given a large integer represented as an integer array digits, where each digits[i] is the ith digit of the integer.
 * The digits are ordered from most significant to least significant in left-to-right order. The large integer does not contain any leading 0's.
 *
 * Increment the large integer by one and return the resulting array of digits.
 */
class Solution {
    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $n = count($digits);

        // Traverse the digits array from the end
        for ($i = $n - 1; $i >= 0; $i--) {
            // If the current digit is less than 9, increment it and return the array
            if ($digits[$i] < 9) {
                $digits[$i]++;
                return $digits;
            }

            // Otherwise, set the current digit to 0 and continue to the next digit
            $digits[$i] = 0;
        }

        // If all digits were 9, we need to manually create a new array with 1 followed by all 0's
        $newDigits = [1]; // Start with 1
        for ($i = 0; $i < $n; $i++) {
            $newDigits[] = 0; // Append 0's
        }

        return $newDigits;
    }
}