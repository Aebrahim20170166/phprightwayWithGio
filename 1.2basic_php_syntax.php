<?php

/**difference between echo and print
* first print has return value of 1
* so if I try to echo the return value of print it will get hello world then 1.
*/

echo print "hello world"; //outputs ==> hello world1
//so print can be used with expression but echo can't
echo '<br>';
//second we can concatenate more strings using echo but we cannot do this using print
echo 'Hello ', 'Alaa, ', 'We are a software company';
echo '<br>';
//if we need to assign this string to something then outputs this something we use variables
$txt = "hello world";
echo $txt;
echo '<br>';

/**also we cannot assign a value to variable called $this because it refers to object
* $this = "hello everybody"; //it will get an error cannot re-assign value to this
*/

/**variables in php by default are assigned by value
* if i have variable x have a value 5 and variable y = x, then we change x to 10 then
* we echo y it will get 5 because we pass variables by value not by referencing
*/
$x = 5;
$y = $x;
$x = 20;
echo $y;
echo '<br>';

/**but if we want y to get the last updated value of x we pass x to y by referencing like that*/
$x = 5;
$y = &$x; //that is called passing by reference
echo $y;//outputs 5
echo '<br>';
$x = 20;
echo $y;//outputs 20
echo '<br>';

/** difference between single quote and double quote */

$name = "alaa";
/** here it will print hello$name , because single quote print the text as it is */
echo 'hello $name';
echo '<br>';

/** but double quote get tha value of the variable and put it in the text*/
echo "hello $name";
echo "<br>";

/** but this is not readable (line 51) so some developers use carly braces around the variable*/
echo "hello {$name}";
echo "<br>";


/** concatenation in php using dot (.) */
echo "Hello " . $name;
echo "<br>";