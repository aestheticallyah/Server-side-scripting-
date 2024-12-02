<?php
function isPalindrome($number) {
// Convert the number to a string
$strNumber = strval($number);
// Reverse the string
$reversed = strrev($strNumber);
// Check if the original string is equal to the reversed string
return $strNumber === $reversed;
}
// Example usage
$number = 121; // Replace with any number to test
if (isPalindrome($number)) {
echo "$number is a palindrome.";
} else {
echo "$number is not a palindrome.";
}
?>