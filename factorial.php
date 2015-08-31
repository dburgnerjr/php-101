<?php
/**
 factorial.php
 Daniel Burgner PHP 101
 August 31, 2015
 */

$input = isset($argv[1]) ? $argv[1] : die("No input given\n");
$k = isset($argv[2]) ? $argv[2] : 0;

/**
 * Exercise 3 - Factorial
 *
 * For this exercise you will write a function (basic, variable or anonymous) that returns the factorial of the given
 * input.
 *
 * Ex: 5! = 1x2x3x4x5 = 120
 *
 *
 * Bonus: Use your factorial function to solve k-permutations of n
 * (k n) = n! / ((n - k)!)
 */
function factorial($n) {
	if ($n < 2) {
		return 1;
	}	
	if ($n >= 2) {
		return ($n * factorial($n - 1));
	}
}

function permutation($n, $k) {
	return factorial($n)/(factorial($n - $k));	
}

$nFactorial = factorial($input);
$nPermutation = permutation($input, $k);

print $input . ' factorial is: ' . $nFactorial . PHP_EOL;
print $k . ' permutations of ' . $nFactorial . ' is: ' . $nPermutation . PHP_EOL;
