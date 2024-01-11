<?php

/** PHP is dynamically typed or also known as weakly typed language where you are not required
 *to define the type of the variable and also the type of the variable can change after it has
 *been defined
 */

/** Difference between Dynamically typed languages and statically typed languages */
/** Dynamically typed language means that the type checking happens at run time
 *while statically typed language means that the checking happens at compile time.
 */

/** Examples on Statically Typed Languages ==> Java, C++ and C# */

 /** Because php allows such type system is more flexible, but this flexibility comes at price
 * of performance  and can sometimes result in unexpected bugs .
 */

/** Data Types & Type Casting
 * PHP supports 10 primitive  types  which are grouped by
 * */
#4 Scalar types
    # 1.bool
    # 2.int
    # 3.float
    # 4.string
#Compound types
    # 1.array
    # 2.object
    # 3.callable
    # 4.iterable
#Special types
    # 1.resource
    # 2.null

/** Scalar Types */
//bool => it is just a simple representation  of a truth value, it can either be true or false
$completed = true;
echo $completed , '<br>';
//Integers => are numeric values without the decimal point also known as whole numbers
$score = 75;
echo $score , '<br>';
//float or floating point numbers => known as doubles or decimals are numeric values with decimal point
$price = 95.5;
echo $price , '<br>';
//string =>  is just a series of characters that are enclosed with either single or double quotes
$name = "alaa";
echo $name , '<br>';

/** Get the type of the variable using (gettype or var_dump) */
//boolean
echo gettype($completed) , '<br>'; //boolean
var_dump($completed); //bool(true)
echo '<br>';

//integer
echo gettype($score) , '<br>'; //integer
var_dump($score); //int(75)
echo '<br>';

//float
echo gettype($price) , '<br>'; //double
var_dump($price);
echo '<br>';

//string
echo gettype($name) , '<br>'; //string
var_dump($name); //string(4)"alaa"
echo '<br>';

/** Arrays (Compound Types)
 *Arrays are basically just a list of items and these items can be of many different types
 *for example you could have list of integers, list of booleans or mix of integers, booleans,
 *floats and strings
 *To define an array
 */
$numbers = [1, 2, 3, 0.5, -9.2, 'hello', true]; //as you see the array is just a list of items
/** printing an array using echo it just echo array word and you will get a error that
 *php is trying to convert array to string
 */

/** but if you want to print the whole array use print_r() function */
print_r($numbers);
echo "<br>";

/** Type hinting */
function sum($x, $y)
{
    return $x + $y;
}
echo sum(2, 3) , '<br>'; // output 5
// but if you pass something like a string instead of an integer what would happen?
echo sum('2', 6) , '<br>'; // output 8
// You could specify that the variables X and Y are integers
function sum2(int $x, int $y): int
{
    var_dump($x, $y);
    echo '<br>';
    return $x + $y;
}
echo sum2('5', 7) , '<br>'; // var_dump will get an int, although we passed a string to the function
//because it's casting it into integer and this is called type Juggling or type coercion
/** basically what's happening is that even though we have type hinted this variable must be
 *integer, php will try and convert the given value to the function to the appropriate data
 *type
 * So this means that the type of the variable is determined by the context in which the variable
 *is used
 * In case php cannot do this conversion dynamically then it will throw an error like if function
 *expect to get an array, and you pass another data type like string
 */

/** Type Casting */
$x = '5';
var_dump($x); // output >> string(1)"5"
/** You could actually force this to be an integer type, and you could cast anything to the
 *data types using the name of the data type with parentheses
 */
$y = (int)$x;
var_dump($y); //output int(5) >> casted int in


