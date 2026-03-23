/**
 * Implement the myAtoi(string s) function, which converts a string to a 32-bit signed integer.
*/
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
    $i = 0;
    $n = strlen($s);
    $sign = 1;
    $result = 0;

    $INT_MAX = 2147483647;
    $INT_MIN = -2147483648;

    // 1. Skip leading whitespace
    while ($i < $n && $s[$i] === ' ') {
        $i++;
    }

    // 2. Check sign
    if ($i < $n && ($s[$i] === '+' || $s[$i] === '-')) {
        $sign = ($s[$i] === '-') ? -1 : 1;
        $i++;
    }

    // 3. Convert digits
    while ($i < $n && ctype_digit($s[$i])) {
        $digit = (int)$s[$i];

        // 4. Handle overflow before multiplying
        if (
            $result > intdiv($INT_MAX, 10) ||
            ($result === intdiv($INT_MAX, 10) && $digit > 7)
        ) {
            return $sign === 1 ? $INT_MAX : $INT_MIN;
        }

        $result = $result * 10 + $digit;
        $i++;
    }

    return $result * $sign;
}
}