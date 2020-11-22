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

$my_car = [
    "oil" => "black and clumpy",
    "brakes" => "new",
    "tires" => "old with worn treads",
    "filth" => "bird droppings", 
    "wiper fluid" => "full", 
    "headlights" => "bright"
  ];
  print_r($my_car);
  
  # We can use the same syntax for changing array elements as we use for adding array elements
  
  # Because PHP allows us to add a new key=>value pair or change an exzisting one with the same syntax, we will need to be careful to avoid accidentally overwriting an existing value.
  
  $my_car["oil"] = "new and premium"; // Changes the value for "oil" from "black and clumpy" to "new and premium".
  $my_car["tires"] = "new with deep treads"; // Changes the value for the key "tireds".
  
  # Using the unset() function we can remove a key=>value pair entirely from an array. If the key doesn't exist in the array, then nothing will happen.
  
  unset($my_car["filth"]); // Removes the "filth" key and associated "bird droppings" value from the array.
  
  
  print_r($my_car); /* Prints:
  
  Array
  (
      [oil] => new and premium
      [brakes] => new
      [tires] => new with deep treads
      [wiper fluid] => full
      [headlights] => bright
  )
  */

# Associative arrays can use integers as keys as well as strings.

# With ordered arrays in PHP the numerical key association to values is done automatically for us.

# The structure of an ordered array is the same as an associative array.

# When we add an element to an array without a specific key, such as using array_push(), PHP will associate it with the next integer key.

# If no integer keys have been used it will associate it with the key 0.

# If integer keys have been previously used, then it will assign it the key one larger than the largest integer used so far.

# This behaviour is the same whether using ordered array or associative ones.

$hybrid_array = [
    "value one",
    "second value",
    "third value",
    "fourth value",
    8 => "five more"
  ];
  
  print_r($hybrid_array); /* Prints:
  Array
  (
      [0] => value one
      [1] => second value
      [2] => third value
      [3] => fourth value
      [8] => five more
  )
  */
  
  array_push($hybrid_array, rand()); // Should push a random number into the next integer key, which is 9.
  
  print_r($hybrid_array); /* Prints: 
  Array
  (
      [0] => value one
      [1] => second value
      [2] => third value
      [3] => fourth value
      [8] => five more
      [9] => 185246711
  )
  
  Where [9] is a random number. 
  */
  
  echo $hybrid_array[9]; // Prints the random number at index [9].
  
  # So, you can see because we used an integer as a key in our array [8], when we pushed a new element into the array, it picked up the indexing at [9].

# Joining Arrays

# Using the union (+) operator, we can take two arrays and return a new array with unique keys from the second array appended to the first array.

$giraffe_foods = [
    "dip"=>"guacamole", 
    "chips"=>"corn", 
    "entree"=>"grilled chicken"
    ];

$impala_foods = [
    "dessert"=>"cookies", 
    "vegetable"=>"asparagus", 
    "side"=>"mashed potatoes"
    ];

$rat_foods = [ 
    "dip"=>"mashed earth worms", 
    "entree"=>"trash pizza", 
    "dessert"=>"sugar cubes", 
    "drink"=>"lemon water"
    ];

$potluck = $giraffe_foods + $impala_foods; // Will return a new array into $potluck, that has all the keys from $giraffe_foods AND all of the unique keys from $impala_foods.
print_r($potluck); /* Prints:
Array
(
    [dip] => guacamole
    [chips] => corn
    [entree] => grilled chicken
    [dessert] => cookies
    [vegetable] => asparagus
    [side] => mashed potatoes
)
*/

$potluck += $rat_foods; // Returns a new array into $potluck, that was the potluck above AND any unique keys from $rat_foods.
print_r($potluck); /* Prints:
Array
(
    [dip] => guacamole
    [chips] => corn
    [entree] => grilled chicken
    [dessert] => cookies
    [vegetable] => asparagus
    [side] => mashed potatoes
    [drink] => lemon water
)
This array only had the "drink"=>"lemon water" key=>value pair added to it. This is because they "dip", "entree" and "dessert" keys already existed in $potluck, and so those keys from $rat_foods were not added.
*/

# Assigning by Value or by Reference

$doge_meme = [
    "top_text" => "Such Python", 
    "bottom_text" => "Very language. Wow.", 
    "img" => "very-cute-dog.jpg", 
    "description" => "An adorable doge looks confused."
    ];

$bad_meme = [
    "top_text" => "i don't know", 
    "bottom_text" => "i can't think of anything", 
    "img" => "very-fat-cat.jpg", 
    "description" => "A very fat cat looks happy."
    ];

# When we assign one variable to another by value, this creates two copies of the same value that they remain seperate entities.

# However, when we assign one variable to another via reference this creates two variable names that both point to the same memory space. Meaning changes in one, change the other.

# When passing arrays into functions, both built-in and those we write, we have to be aware of whether the arrays are being passed by value or reference.

function createMeme($meme) {
  $meme["top_text"] = "Much PHP";
  $meme["bottom_text"] = "Very programming. Wow.";
  return $meme;
}

print_r(createMeme($doge_meme)); /* Takes the $doge_meme array, makes a copy of it called $meme, which is then passed through the function changing the $top_text and $bottom_text variables. Prints:
Array
(
    [top_text] => Much PHP
    [bottom_text] => Very programming. Wow.
    [img] => very-cute-dog.jpg
    [description] => An adorable doge looks confused.
)
*/

print_r($doge_meme); /* Because the $meme array used in createMeme() is a copy of the $doge_meme array, the $doge_meme array remains unchanged. Prints:
Array
(
    [top_text] => Such Python
    [bottom_text] => Very language. Wow.
    [img] => very-cute-dog.jpg
    [description] => An adorable doge looks confused.
)
*/

$php_doge = createMeme($doge_meme); // This saves the output of createMeme($doge_meme) in it's own array $php_doge. 
print_r($php_doge); /* Prints: 
Array
(
    [top_text] => Much PHP
    [bottom_text] => Very programming. Wow.
    [img] => very-cute-dog.jpg
    [description] => An adorable doge looks confused.
)
*/

function fixMeme(&$meme) {
  $meme["top_text"] = "Such Meme";
  $meme["bottom_text"] = "Very fix. Wow.";
  return $meme;
}

print_r($bad_meme); /* Prints:
Array
(
    [top_text] => i don't know
    [bottom_text] => i can't think of anything
    [img] => very-fat-cat.jpg
    [description] => A very fat cat looks happy.
)
*/
fixMeme($bad_meme); // Takes the $bad_meme array, but because they function take the argument by reference, the values in $bad_meme are also changed.
print_r($bad_meme); /* Prints: 
(
    [top_text] => Such Meme
    [bottom_text] => Very fix. Wow.
    [img] => very-fat-cat.jpg
    [description] => A very fat cat looks happy.
)
*/

  