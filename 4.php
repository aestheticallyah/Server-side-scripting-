<?php
function sumArray($array) {
$sum = 0; // Initialize the sum
foreach ($array as $value) {
$sum += $value; // Add each element to the sum
}
return $sum;
}
// Example usage
$numbers = [1, 2, 3, 4, 5];
$result = sumArray($numbers);
echo "The sum of the array is: " . $result;
?>