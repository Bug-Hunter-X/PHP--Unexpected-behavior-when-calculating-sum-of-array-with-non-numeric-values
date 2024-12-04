# PHP Array Sum Bug

This repository demonstrates a common bug in PHP when calculating the sum of an array containing non-numeric values. The `calculateSum` function, in its initial state, does not handle non-numeric inputs gracefully, leading to unexpected results (NaN).

The `bug.php` file contains the buggy code, while `bugSolution.php` provides a corrected version that addresses the issue by using type checking and filtering before summation.  This improved function either throws an error for invalid inputs or correctly calculates the sum by skipping non-numeric elements.