<?php
// Write a PHP function to sort an array of strings by their length, in ascending order.
echo "Code: 1\n";
function sortArrayByLength( $array ) {
    usort( $array, function ( $a, $b ) {
    return strlen( $a ) - strlen( $b );
} );
    return $array;
}
$words = [ "dog", "elephant", "lion", "cat", "bird" ];
$sorted_words = sortArrayByLength( $words );
print_r( $sorted_words );

//Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
echo "Code: 2\n";
function concatReverse( $str1, $str2 ) {
    $len1 = strlen( $str1 );
    $len2 = strlen( $str2 );
    $result = "";

    for ( $i = 0; $i < $len1; $i++ ) {
        $result .= $str1[$i];
        if ( $i == $len1 - 1 ) {
            for ( $j = $len2 - 1; $j >= 0; $j-- ) {
                $result .= $str2[$j];
            }
        }
    }

    return $result;
}
$str1 = "Hello";
$str2 = "World";
$result = concatReverse($str1, $str2);
echo "For $str1 and $str2 result = $result";

//Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
echo "\nCode: 3\n";
function removeFirstAndLast( $arr ) {
    array_shift( $arr );
    array_pop( $arr );
    return $arr;
}
$arr = [ "apple", "banana", "orange", "pear", "grape" ];
$result = removeFirstAndLast( $arr );
print_r( $result );

//Write a PHP function to check if a string contains only letters and whitespace.
echo "Code: 4\n";
function containsOnlyLettersAndWhitespace( $str ) {
    return preg_match( '/^[a-zA-Z\s]+$/', $str ) === 1;
}
$str1 = "I want to be a developer";
$str2 = "Apple123";
$result1 = containsOnlyLettersAndWhitespace( $str1 );
$result2 = containsOnlyLettersAndWhitespace( $str2 );
echo "result-1 : ";
echo $result1 ? "true" : "false"; // outputs "true"
echo PHP_EOL;
echo "result-2 : ";
echo $result2 ? "true" : "false"; // outputs "false"

//Write a PHP function to find the second largest number in an array of numbers.
echo "\nCode: 5\n";
function findSecondLargest( $arr ) {
    $largest = $arr[0];
    $secondLargest = $arr[0];

    foreach ( $arr as $num ) {
        if ( $num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } else if ( $num > $secondLargest && $num != $largest ) {
            $secondLargest = $num;
        }
    }

    return $secondLargest;
}


$arr = [ 1, 2, 5, 6, 4, 8 ];
$result = findSecondLargest( $arr );
echo "The second largest number in this array = $result";