<?php

/** constants */
echo "Hello my name is constant";
echo "<br>";

/** to define constants we have two ways
* 1. using define(name, value) function that take two parameters name of constant and
* value of constant
*/

echo define("STATUS_PAID", "paid"); /** outputs 1 refers that the constant is defined successfully*/
echo "<br>";
echo STATUS_PAID;
echo "<br>";
//to check if the constant is defined or not we use defined(name of constant)
echo defined('STATUS_PAID');
echo "<br>";

/** 2. another way to define constants is to use const keyword */
const STATUS_PAID2 = 'not paid';
echo STATUS_PAID2;
echo "<br>";

/**difference between constants defined by define function and const keyword is that
*constants created with const keyword are actually defined at a compile time while
*constants created with define function are defined at a runtime.
*/

/** difference between compile time and run time
 * The compile time is the time at which the source code is converted into an executable code.
 * This process involves checking the syntax of the code, verifying the types of variables,
 * and generating machine code. Any errors that occur during this process are called
 * compile-time errors. Examples of compile-time errors include syntax errors, type errors,
 * and missing libraries.
 *
 * The run time is the time at which the executable code starts running. During this process,
 * the computer reads the machine code generated during the compile time and executes it.
 * Any errors that occur during this process are called run-time errors. Examples of run-time
 * errors include division by zero, null pointer exceptions, and stack overflow123.
 * In summary, the main difference between compile time and run time is that compile time
 * refers to the time when the code is compiled into an executable file, while run time
 * refers to the time when the executable file is executed by the computer
 */

/**
 * So you can't define constants with the const keyword within your control structures like
 * loops or if else
 * But you could define constants using define function
 */

/**Another difference  ==> you could use variables to define your constant names,something like this*/
$paid = 'PAID3';
define('STATUS_'. $paid, $paid);
echo STATUS_PAID3;
echo "<br>";
/**even though the IDE will highlight it as it's not been defined, we created it dynamically*/

/** when we use constants
* whenever u have some static data that doesn't change too often
*/

/**
 * also there are predefined constants like PHP_VERSION
 * example :-
 */
echo PHP_VERSION;
echo "<br>";

/**
 * magic constants :-
 * they are pretty much constants  but there are called magic because their values can actually
 * change depending on where they are used so for example
 * __LINE__ that contains the value of the line number where it is used
 * also __FILE__ will print the file path where it is
 */
echo __FILE__;
echo "<br>";
echo __LINE__;
echo "<br>";

/** Variable Variables */
$foo = 'bar';
$$foo = 'baz';
/**
 * Basically take the value of the variable and treats that as the name of the new variable
 * so in this case this basically is same thing as $bar = 'baz'
 * also you could print that out like this
 */
echo $foo . $bar;
echo "<br>";

/** In other proper way to print this out would be using variable variable */
echo $foo , $$foo;
echo "<br>";

/** also if you wanted to enclose this within the quotes like this will print bar , $bar*/
echo "$foo , $$foo";
echo "<br>";
/** In order to make this work, you need to enclose the whole thing in brackets like this */
echo "$foo , {$$foo}";
echo "<br>";
/** Another way is you remove one dollar sign and put it outside the brackets */
echo "$foo , ${$foo}";
echo "<br>";