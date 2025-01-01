# PHP Recursive Data Processing Bug

This repository demonstrates an uncommon bug encountered when recursively processing data in PHP. The `processData` function aims to recursively traverse an array, splitting string values containing commas and processing nested arrays. However, it exhibits unexpected behavior in scenarios involving large datasets or deeply nested arrays.

## Bug Description
The `processData` function, while seemingly functional for simple input, has limitations related to memory consumption and potential infinite recursion with complex or cyclical input structures. This could lead to errors like stack overflow in extreme cases or incorrect data transformation.

## Solution
The solution involves adding checks to prevent issues with large data and infinite recursion. This might entail imposing limits on recursion depth or detecting cyclical structures.  Also, the current recursive approach is often suboptimal. A more efficient iterative approach is presented in the bugSolution.php file.

## How to reproduce
1. Clone the repository.
2. Run `bug.php` with the sample input.  Try modifying the input to have deeply nested arrays or large strings to observe the unexpected behavior.
3. Run `bugSolution.php` to see a more robust solution.