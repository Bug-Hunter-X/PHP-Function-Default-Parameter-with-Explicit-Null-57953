# PHP Function Default Parameter with Explicit Null
This example demonstrates a subtle issue in PHP involving function parameters with default values and explicit null values.  When you intentionally pass null to a parameter with a default value, PHP might not behave as you intuitively expect.

The `bug.php` file shows a function with a parameter that has a default value. The `bugSolution.php` file presents a solution to handle this situation robustly.