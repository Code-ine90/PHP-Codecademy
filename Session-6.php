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

  