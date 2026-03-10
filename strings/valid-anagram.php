/**
 * Given two strings s and t, return true if t is an anagram of s, and false otherwise.
 */
class Solution {
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if (strlen($s) !== strlen($t)) {
            return false;
        }

        $count = [];

        // Count chars from s
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];

            if (!isset($count[$char])) {
                $count[$char] = 0;
            }

            $count[$char]++;
        }

        // Subtract using t
        for ($i = 0; $i < strlen($t); $i++) {
            $char = $t[$i];

            if (!isset($count[$char]) || $count[$char] === 0) {
                return false;
            }

            $count[$char]--;
        }

        return true;
    }
}