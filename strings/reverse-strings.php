/**
 * Write a function that reverses a string. The input string is given as an array of characters s.
 *
 * You must do this by modifying the input array in-place with O(1) extra memory.
 */
class Solution {
    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        // Startup variables
        $strLength = count($s);
        $tempString = $s;
        $start = 0;
        
        // Loop through the string in reverse order and assign the characters to the original string
        for ($i = $strLength; $i <= $strLength && $i > 0; $i--) {
            $s[$start] = $tempString[$i - 1];
            $start++;
        }
        
        // The original string is now reversed
         return $s;
    }
}