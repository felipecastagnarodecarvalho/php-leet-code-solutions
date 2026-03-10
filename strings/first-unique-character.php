/**
 * Given a string s, find the first non-repeating character in it and return its index. If it does not exist, return -1.
 * 
 */
class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $count = [];

        // Count occurrences
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];

            if (!isset($count[$char])) {
                $count[$char] = 0;
            }

            $count[$char]++;
        }

        // Find first unique character
        for ($i = 0; $i < strlen($s); $i++) {
            if ($count[$s[$i]] === 1) {
                return $i;
            }
        }

        return -1;
    }
}