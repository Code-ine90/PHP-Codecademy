<? PHP

#Arrays

# One type of data structure that is key to computer science is the array. A list of ordered, stored data. In PHP this is called an Ordered Array.

# The location of an element in an array is known as it's index, and the index starts at 0. The second element is indexed at 1, and so on.

#The reason for this is that in the original implementation of array data structures, the elements of an array were stored in side-by-side slots in the memory.

# It  was too inefficient to keep track of all these memory locations, so the computer only stored the memory adress of the first element.

# It could then refer to other elements in the array, by how far along it was from the memory adress of the first element.

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

$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];

# You are also able to access elements within an array by using the array variables name and the location index surrounded by square brackets [].

$winners = [$round_one[2], $round_two[0], $round_three[4]];

echo implode(", ", $winners); // Prints "first winner, second winner, third winner"

# We can also make adjustments to existing arrays.

$change_me = [3, 6, 9];

# To add an element to the end of an array, we use the variablename with brackets on the end ($array_variable[]), followed by the assignment operators (=), and then the element we want to add.

$change_me[] = "A string element"; // Add's the string "A string element" to the end of the array. 
echo implode(", ", $change_me);
echo "\n";

$change_me[] = 12; // Appends 12 to the array.
echo implode(", ", $change_me);
echo "\n";

# We can also reassign an individual element within an array. 

$change_me[1] = "tadpole"; // This will change the element at 1st index to be "tadpole", where it was 6 before.
echo implode(", ", $change_me);
echo "\n";

print_r($change_me);

# We can also add multiple elements to the array at a time using the array_push() function and we can remove array elements with the array_pop() function.

$stack = ["wild success", "failure", "struggle"];

# The array_push() function takes an array as it's first argument. Any arguments that follow after that are elements to be added to the end of the array.

# array_push() adds the new elements to the array and returns the new number of elements in the array.

$stack_num = array_push($stack, "blocker", "impediment"); // Adds "blocker" and "impediment" to the end of $stack. It then counts the number of elements in the array and returns the number to be assigned to $stack_num.
echo $stack_num; // Prints: 5
echo "\n";

# The array_pop() function takes an array as it's argument. It will remove last element from the array and return the removed element.

$stack_popped = array_pop($stack); // Removes the last element from the $stack array, and assigned the removed element to $stack_popped.
echo $stack_popped; // Prints: impediment
echo "\n";
print_r($stack); /* Prints:
Array
(
    [0] => wild success
    [1] => failure
    [2] => struggle
    [3] => blocker
)
*/
echo "\n";

$stack_popped = array_pop($stack); // Removes and assigns the last element again.
echo $stack_popped; // Prints: blocker
echo "\n";
array_pop($stack); // Removes the element, but we are not assigning the returned value to a variable.
array_pop($stack);
echo print_r($stack); /* Prints:
Array
(
    [0] => wild success
)
*/

