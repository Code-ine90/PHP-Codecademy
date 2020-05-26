<?php

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

/*
Let’s use arrays (and our imaginations) to go on a journey through the history of the 100-meter dash.

In 1991 Carl Lewis broke the record of 9.90 seconds. His record was topped in 1994 by Leroy Burrell. Next in 1996, Donovan Bailey took the record only to have his record usurped by Maurice Greene in 1999, then Tim Montgomery in 2002.

We’ve provided an array $record_holders. Use the array_unshift() function to add "Carl Lewis", "Leroy Burrell", "Donovan Bailey", "Maurice Greene", and "Tim Montgomery" to the $record_holders.

Add the names so that older records always have higher index locations than more recent records.
*/
$record_holders = [];
array_unshift($record_holders, "Tim Montgomery", "Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");
print_r($record_holders); /* Prints:
Array
(
    [0] => Tim Montgomery
    [1] => Maurice Greene
    [2] => Donovan Bailey
    [3] => Leroy Burrell
    [4] => Carl Lewis
)
*/

# Tim Montgomery’s record was invalidated. Use the array_shift() function to remove him from the $record_holders array.

$removed = array_shift($record_holders);
echo $removed; // Prints: Tim Montgomery
echo "\n";

# Next up we have "Asafa Powell" in 2005 followed by "Justin Gatlin" in 2006. Use the array_unshift() function to add them to the $record_holders array.

array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");
print_r($record_holders); /* Prints:
Array
(
    [0] => Justin Gatlin
    [1] => Asafa Powell
    [2] => Maurice Greene
    [3] => Donovan Bailey
    [4] => Leroy Burrell
    [5] => Carl Lewis
)
*/

# Justin Gatlin’s record was also invalidated. Use the array_shift() function to remove him from the $record_holders array.

$removed = array_shift($record_holders);
echo $removed; // Prints: Justing Gatlin
echo "\n";

# Last but not least, use array_unshift() function to add "Usain Bolt" to the $record_holders array.

array_unshift($record_holders, "Usain Bolt");
$print_record = print_r($record_holders, true); // This is just a way of returning the array instead of printing it, which can then be assigned to a variable
echo $print_record; /* Prints:
Array
(
    [0] => Usain Bolt
    [1] => Asafa Powell
    [2] => Maurice Greene
    [3] => Donovan Bailey
    [4] => Leroy Burrell
    [5] => Carl Lewis
)
*/

# We can use arrays to hold elements of any type.... Even more arrays!

$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];

print_r($treasure_hunt); /* Prints: 
Array
(
    [0] => garbage
    [1] => cat
    [2] => 99
    [3] => Array
        (
            [0] => soda can
            [1] => 8
            [2] => :)
            [3] => sludge
            [4] => Array
                (
                    [0] => stuff
                    [1] => lint
                    [2] => Array
                        (
                            [0] => GOLD!
                        )

                    [3] => cave
                    [4] => bat
                    [5] => scorpion
                )

            [5] => rock
        )

    [4] => glitter
    [5] => moonlight
    [6] => 2.11
)
*/

# We can use chained operations to access and change elements within a nested array.

# To find the gold in our $treasure_hunt, we will have to do some digging.

echo $treasure_hunt[3][4][2][0]; // Prints: GOLD!

// We succesfully dug our way down through the nested arrays and found the gold.



