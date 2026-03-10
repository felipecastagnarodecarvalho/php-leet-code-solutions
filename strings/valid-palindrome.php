/**
 * A phrase is a palindrome if, after converting all uppercase letters into lowercase letters
 * and removing all non-alphanumeric characters, it reads the same forward and backward.
 * Alphanumeric characters include letters and numbers.
 * Given a string s, return true if it is a palindrome, or false otherwise.
 */
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $left = 0;
        $right = strlen($s) - 1;

        while ($left < $right) {

            while ($left < $right && !ctype_alnum($s[$left])) {
                $left++;
            }

            while ($left < $right && !ctype_alnum($s[$right])) {
                $right--;
            }

            if (strtolower($s[$left]) !== strtolower($s[$right])) {
                return false;
            }

            $left++;
            $right--;
        }

        return true;
    }
}