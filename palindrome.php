<?php
$input = isset($argv[1]) ? $argv[1] : die("No input given\n");

/**
 * Exercise 2 Palindrome
 *
 * A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward. For
 * this exercise you will write a script that will determine if the given input is a palindrome.
 *
 * Output "Yes, '<input>' is a palindrome!" if the given input is a palindrome, otherwise output "No, '<input>' is not a palindrome."
 *
 * Examples:
 * Input: 'Radar'
 * Output: Yes, 'Radar' is a palindrome!
 *
 * Input: 'FOO'
 * Output: No, 'FOO' is not a palindrome.
 *
 * Input: '10101'
 * Output: Yes, '10101' is a palindrome!
 *
 * palindrome.php
 * Daniel Burgner PHP 101
 * August 26, 2015
 */

$output = '';
for ($i = (strlen($input) - 1); $i >= 0; --$i) {
	$output .= $input[$i];
}

if (strtolower($input) == strtolower($output)) {
	print "Yes, $input is a palindrome!\n";
}
if (strtolower($input) != strtolower($output)) {
	print "No, $input is not a palindrome!\n";
}
