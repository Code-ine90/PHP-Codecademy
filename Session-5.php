<? PHP

#Arrays

# One type of data structure that is key to computer science is the array. A list of ordered, stored data. In PHP this is called an Ordered Array.

# The location of an element in an array is known as it's index, and the index starts at 0. The second element is indexed at 1, and so on.

#The reason for this is that in the original implementation of array data structures, the elements of an array were stored in side-by-side slots in the memory.

# It  was too inefficient to keep track of all these memory locations, so the computer only stored the memory adress of the first element.

# It could then refer to other elements in the array, but how far along it was from the memory adress of the first element.

 # The first element was 0 spots away from this memory adress, so it was 0th index. The second was 1 spot away, so was 1st index, and so on.

# The built in array() function can be used to build ordered arrays in PHP. 

# The array() function returns an array. Each argument that the function was invoked with becomes an element in the array, in the order they were passed in.

# Arrays are most often stored in variables. Array variables are created the same way as variables of other data types, using the assignment operator.

$my_array = array(0, 1, 2);

# PHP Arrays can store elements of any data type.

$string_array = array("This is the first element", "This is the second");

$mixed_array = array(1, "Chicken breast", 22.5, "Grams of cheese");

# There is also the built in count() function in PHP which we can use to count the number of elements in an array. 

echo count($my_array);
echo "\n";
echo count($string_array);
echo "\n";
echo count($mixed_array);
echo "\n";

$first_array = array("I am ", 29, " years old. I have ", 0, "dogs");

echo count($first_array);

# An array can also be created by wrapping comma seperated elements in square brackets ([ ]), rather than using the array() function.

# This is sometimes refered to as short array syntax. 

$with_function = array("PHP", "popcorn", 555.55);

# We can also place each element on its own line to make it easier to read.

$with_short = [
  "PHP",
  "popcorn",
  555.55
];

$message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];

$favorite_nums = [7, 201, 33, 88, 91];
// Write your code below:

# Because arrays are more complicated data types than strings or integers, echo won't work.

# When you use echo to try and print an array, it will just print "Array".

# To print an array, we can use another in-built function. print_r() outputs arrays in a readable format. 

print_r($favorite_nums); // Prints:
/*
Array
(
    [0] => 7
    [1] => 201
    [2] => 33
    [3] => 88
    [4] => 91
) */

# We can convert arrays into strings using the built in implode() function. This takes two arguments: the $glue and the $pieces.

# The $glue argument is a string that is used between each element, while the $pieces argument is the array to be joined together.

echo "\n";
echo implode("!", $message); // Prints "Oh hey! You're doing great! Keep up the good work!".
echo "\n";

echo implode(", ", $favorite_nums); // Prints "7, 201, 33, 88, 91"
echo "\n";

