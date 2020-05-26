<?php

# Associative Arrays

# By using a map, we can associate keys with values. A key is a string or integer that we use to acces a value (Of any type).

# We could create a map with a key of "fullname" and a value of "Stuart White", this is more understandable than associating the name with an index 0.

# We can then access the value by using the associated key.

# In the ordered arrays we have been previously using, they are implemented as a map. The index locations are the keys. 

# Associative arrays allow us to assign more meaningful keys to a value, as opposed to indices.

# Associative arrays are collections of key=>value pairs. 

# The key must be either a string or an integer, while the values held can be any type.

# We use the (=>) operator to associate a key with it's value.

$php_array = array(
    "language" => "PHP",
    "creator" => "Rasmus Lerdorf",
    "year_created" => 1995,
    "filename_extensions" => [
        ".php", 
        ".phtml", 
        ".php3", 
        ".php4", 
        ".php5", 
        ".php7", 
        ".phps", 
        ".php-s", 
        ".pht", 
        ".phar"
        ]
);

print_r($php_array); /* Prints:
Array
(
    [language] => PHP
    [creator] => Rasmus Lerdorf
    [year_created] => 1995
    [filename_extensions] => Array
        (
            [0] => .php
            [1] => .phtml
            [2] => .php3
            [3] => .php4
            [4] => .php5
            [5] => .php7
            [6] => .phps
            [7] => .php-s
            [8] => .pht
            [9] => .phar
        )

)
*/

$php_short = [
    "language" => "PHP",
    "creator" => "Rasmus Lerdorf",
    "year_created" => 1995,
    "filename_extensions" => [
        ".php", 
        ".phtml", 
        ".php3", 
        ".php4", 
        ".php5", 
        ".php7", 
        ".phps", 
        ".php-s", 
        ".pht", 
        ".phar"
        ]
    ];

print_r($php_short); // Prints the same as $php_array.
  
# As with ordered arrays, using echo to print them only prints "array".

# The implode() function can be used to combine the values into a single string, which can be printed with echo.

# However the implode() function only combines the values into a string, and we can't see the keys in the array or the relationship between them.

# We can display all of the information by using the print_r() function however.

$september_hits = [
    "The Sixth Sense" => 22896967,
    "Stigmata" => 18309666,
    "Blue Streak" => 19208806,
    "Double Jeopardy" => 23162542
  ];
  
  echo implode(", ", $september_hits); // Prints: 22896967, 18309666, 19208806, 23162542 
  echo "\n";
  
  print_r($september_hits); /* Prints: 
  Array
  (
      [The Sixth Sense] => 22896967
      [Stigmata] => 18309666
      [Blue Streak] => 19208806
      [Double Jeopardy] => 23162542
  )
  */

$assignment_one = [
    "Alex"=> 87,
    "Kenny"=> 91,
    "Natalia"=> 91,
    "Lily"=> 67,
    "Dan"=> 81,
    "Kat"=> 77,
    "Sara" => 65
    ];

$assignment_two = [
    "Alex"=> 91, 
    "Kenny"=> 99, 
    "Natalia"=> 100, 
    "Lily"=> 61, 
    "Dan"=> 88, 
    "Kat"=> 90
    ];

$assignment_three = [
    "Alex"=> 78, 
    "Kenny"=> 92, 
    "Natalia"=> 94, 
    "Lily"=> 79, 
    "Dan"=> 73, 
    "Sara" => 61
    ];

$student_name = "Alex";

# We can access the value a given key points to by using the square brackets ([]).

# We can also add a new element to an associative array using the assignment operator (=).

# The computer treats all code between square brackets as an expression.

# the code will be evaluated before the array is accessed, allowing us to use variables, functions and operators within the square brackets.

$assignment_two["Sara"] = 65; // Appends the key "Sara" with the value of 65 to the end of $assignment_two.
$assignment_three["Kat"] = 97; // Appends the key "Kat" with the value of 97 to the end of $assignment_three.

print_r($assignment_two); /* Prints:
Array
(
    [Alex] => 91
    [Kenny] => 99
    [Natalia] => 100
    [Lily] => 61
    [Dan] => 88
    [Kat] => 90
    [Sara] => 65
)

Sara's new score has been appended successfully to the end of the array.
*/

$dans_grades = [
    $assignment_one["Dan"],
    $assignment_two["Dan"],
    $assignment_three["Dan"]
]; // Creates a new ordered array with Dan's scores as the values attached to the indices.
print_r($dans_grades); /* Prints:
Array
(
    [0] => 81
    [1] => 88
    [2] => 73
)
*/

echo $assignment_two[$student_name]; // Prints: 91. This is because "Alex" is assigned to $student_name, so we are looking for the value held by the key "Alex" in the $assignment_two array.



