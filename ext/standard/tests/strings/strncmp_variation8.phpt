--TEST--
Test strncmp() function: usage variations - different inputs(single quoted strings)
--FILE--
<?php
/* Prototype  : int strncmp ( string $str1, string $str2, int $len );
 * Description: Binary safe case-sensitive string comparison of the first n characters
 * Source code: Zend/zend_builtin_functions.c
*/

/* Test strncmp() function with different strings for 'str1', 'str2' and considering case sensitive */

echo "*** Test strncmp() function: with different input strings ***\n";
$strings = array(
  'Hello, World',
  'hello, world',
  'HELLO, WORLD',
  'Hello, World\n'
);
/* loop through to compare each string with the other string */
$count = 1;
for($index1 = 0; $index1 < count($strings); $index1++) {
  echo "-- Iteration $count --\n";
  for($index2 = 0; $index2 < count($strings); $index2++) {
    var_dump( strncmp( $strings[$index1], $strings[$index2], (strlen($strings[$index1]) + 1) ) );
  }
  $count ++;
}
echo "*** Done ***\n";
?>
--EXPECTF--
*** Test strncmp() function: with different input strings ***
-- Iteration 1 --
int(0)
int(-1)
int(1)
int(-1)
-- Iteration 2 --
int(1)
int(0)
int(1)
int(1)
-- Iteration 3 --
int(-1)
int(-1)
int(0)
int(-1)
-- Iteration 4 --
int(2)
int(-1)
int(1)
int(0)
*** Done ***
--UEXPECTF--
*** Test strncmp() function: with different input strings ***
-- Iteration 1 --
int(0)
int(-1)
int(1)
int(-1)
-- Iteration 2 --
int(1)
int(0)
int(1)
int(1)
-- Iteration 3 --
int(-1)
int(-1)
int(0)
int(-1)
-- Iteration 4 --
int(1)
int(-1)
int(1)
int(0)
*** Done ***
