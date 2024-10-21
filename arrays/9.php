<?php

/**
 * Determine if a 9 x 9 Sudoku board is valid. Only the filled cells need to be validated according to the following rules:
 *
 * - Each row must contain the digits 1-9 without repetition.
 * - Each column must contain the digits 1-9 without repetition.
 * - Each of the nine 3 x 3 sub-boxes of the grid must contain the digits 1-9 without repetition.
 */
class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        // Arrays to store the numbers we encounter for each row, column, and sub-box
        $rows = array_fill(0, 9, []);
        $cols = array_fill(0, 9, []);
        $boxes = array_fill(0, 9, []);

        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                $num = $board[$i][$j];

                // Skip empty cells (represented by '.')
                if ($num === '.') {
                    continue;
                }

                // Check row
                if (isset($rows[$i][$num])) {
                    return false;
                }
                $rows[$i][$num] = true;

                // Check column
                if (isset($cols[$j][$num])) {
                    return false;
                }
                $cols[$j][$num] = true;

                // Check 3x3 sub-box (map the cell to its corresponding sub-box index)
                $boxIndex = intval($i / 3) * 3 + intval($j / 3);
                if (isset($boxes[$boxIndex][$num])) {
                    return false;
                }
                $boxes[$boxIndex][$num] = true;
            }
        }

        // If no conflicts, return true
        return true;
    }
}