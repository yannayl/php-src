--TEST--
Test ksort() function : usage variations - unexpected values for 'sort_flags' argument
--FILE--
<?php
/* Prototype  : bool ksort(array &array_arg [, int sort_flags])
 * Description: Sort an array by key, maintaining key to data correlation 
 * Source code: ext/standard/array.c
*/

/*
 * Testing ksort() by providing different unexpected values for flag argument
*/

echo "*** Testing ksort() : usage variations ***\n";

//get an unset variable
$unset_var = 10;
unset ($unset_var);

// resource variable
$fp = fopen(__FILE__, "r");

// an array for checking unexpected behavior
$unsorted_values = array(10 => 10, 2 => 2, 45 => 45);

//array of unexpected values to iterate over
$unexpected_values = array (

       // int data
/*1*/  -2345,

       // float data
/*2*/  10.5,
       -10.5,
       10.5e2,
       10.6E-2,
       .5,

       // null data
/*7*/  NULL,
       null,

       // boolean data
/*9*/  true,
       false,
       TRUE,
       FALSE,

       // empty data
/*13*/ "",
       '',

       // string data
/*15*/ "string",
       'string',

       // object data
/*16*/ new stdclass(),

       // undefined data
/*17*/ @undefined_var,

       // unset data
/*18*/ @unset_var,

       // resource variable
/*19*/ $fp

);

// loop though each element of the array and check the working of ksort()
// when 'sort_flags' arugment is supplied with different values
echo "\n-- Testing ksort() by supplying different unexpected values for 'sort_flags' argument --\n";

$counter = 1;
for($index = 0; $index < count($unexpected_values); $index ++) {
  echo "-- Iteration $counter --\n";
  $value = $unexpected_values [$index];
  $temp_array = $unsorted_values;
  var_dump( ksort($temp_array, $value) ); 
  var_dump($temp_array);
  $counter++;
}

echo "Done";
?>
--EXPECTF--
*** Testing ksort() : usage variations ***

-- Testing ksort() by supplying different unexpected values for 'sort_flags' argument --
-- Iteration 1 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 2 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 3 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 4 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 5 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 6 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 7 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 8 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 9 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 10 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 11 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 12 --
bool(true)
array(3) {
  [2]=>
  int(2)
  [10]=>
  int(10)
  [45]=>
  int(45)
}
-- Iteration 13 --

Warning: ksort() expects parameter 2 to be long, Unicode string given in %s on line %d
bool(false)
array(3) {
  [10]=>
  int(10)
  [2]=>
  int(2)
  [45]=>
  int(45)
}
-- Iteration 14 --

Warning: ksort() expects parameter 2 to be long, Unicode string given in %s on line %d
bool(false)
array(3) {
  [10]=>
  int(10)
  [2]=>
  int(2)
  [45]=>
  int(45)
}
-- Iteration 15 --

Warning: ksort() expects parameter 2 to be long, Unicode string given in %s on line %d
bool(false)
array(3) {
  [10]=>
  int(10)
  [2]=>
  int(2)
  [45]=>
  int(45)
}
-- Iteration 16 --

Warning: ksort() expects parameter 2 to be long, Unicode string given in %s on line %d
bool(false)
array(3) {
  [10]=>
  int(10)
  [2]=>
  int(2)
  [45]=>
  int(45)
}
-- Iteration 17 --

Warning: ksort() expects parameter 2 to be long, object given in %s on line %d
bool(false)
array(3) {
  [10]=>
  int(10)
  [2]=>
  int(2)
  [45]=>
  int(45)
}
-- Iteration 18 --

Warning: ksort() expects parameter 2 to be long, Unicode string given in %s on line %d
bool(false)
array(3) {
  [10]=>
  int(10)
  [2]=>
  int(2)
  [45]=>
  int(45)
}
-- Iteration 19 --

Warning: ksort() expects parameter 2 to be long, Unicode string given in %s on line %d
bool(false)
array(3) {
  [10]=>
  int(10)
  [2]=>
  int(2)
  [45]=>
  int(45)
}
-- Iteration 20 --

Warning: ksort() expects parameter 2 to be long, resource given in %s on line %d
bool(false)
array(3) {
  [10]=>
  int(10)
  [2]=>
  int(2)
  [45]=>
  int(45)
}
Done
