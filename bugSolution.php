<?php
function calculateSum(array $numbers): int
{
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately
      // You could choose to throw an exception, ignore it, or use a default value.
      // This solution chooses to ignore it
    }
  }
  return $sum;
}

// Example usage:
$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbersWithNonNumeric = [1, 2, 'a', 4, 5];
echo calculateSum($numbersWithNonNumeric); // Output: 12

?> 