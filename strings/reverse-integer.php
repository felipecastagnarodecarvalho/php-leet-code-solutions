/**
 * Given a signed 32-bit integer x, return x with its digits reversed.
 * If reversing x causes the value to go outside the signed 32-bit integer range [-2³¹, 2³¹ - 1],
 * then return 0.
 * 
 */
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $rev = 0;

        while ($x != 0) {
            $pop = $x % 10;
            $x = intval($x / 10);

            // Check overflow before multiplying
            if ($rev > 214748364 || ($rev == 214748364 && $pop > 7)) return 0;
            if ($rev < -214748364 || ($rev == -214748364 && $pop < -8)) return 0;

            $rev = $rev * 10 + $pop;
        }

        return $rev;
    }
}