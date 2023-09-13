<!-- Two ways of writing PHP -->
<!-- /*
<?php
echo "<h1>Hello World!</h1>";
echo "<h1>My name is Jose Saboya</h1>";
?>
-->

<!-- <h1>
  <?php
    echo "Hello World!";
    echo "\nMy name is Jose Saboya";
  ?>
</h1> -->

<?php
// VARIABLES
// May contain alphabetic characters, numbers, and underscores
// No Special Characters
// Can start with a letter or underscore
// Can't start with a numbers
// ---------------------------------
$custName = "Jose Saboya"; // Camel casing preferred by PHP developers
$cust_name = "Jose Saboya"; // descriptive, clear abbreviations, no numbers nor symbols


$age = 33;
// echo $age;

// Data Types
// ----------------------------
// null     bool
// int      float
// string   array
// object   callable
// resource
?>


<?php $expression = False;?>

<?php if ($expression == true): ?>
  <p>This is displayed if the expression is true.</p>
<?php else: ?>
  <p>This is displayed if the expression is false.</p>
<?php endif; ?>
