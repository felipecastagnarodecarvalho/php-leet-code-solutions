<?php

/**
 * You are given an integer array prices where prices[i] is the price of a given stock on the ith day.
 *
 * On each day, you may decide to buy and/or sell the stock. You can only hold at most one share of the stock at any time. However, you can buy it then immediately sell it on the same day.
 *
 * Find and return the maximum profit you can achieve.
 */
class Solution {
    /**
    * @param Integer[] $prices
    * @return Integer
    */
    function maxProfit($prices)
    {
        $profit = 0;

        // Loop through each day in the prices array
        for ($i = 1; $i < count($prices); $i++) {
        // If the price on day i is higher than the price on day i-1, add the difference to the profit
        if ($prices[$i] > $prices[$i - 1]) {
            $profit += $prices[$i] - $prices[$i - 1];
            }
        }

        return $profit;
    }
}