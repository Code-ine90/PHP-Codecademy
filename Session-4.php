<?php 

    # Built-in PHP functions

    # echo is not a function, but one of the quirks of PHP is that is can be used in a way that looks like we are invoking a function. We can wrap an argument for echo in parentheses.

    echo("This works!\n");
    echo "This also works!\n";

    # echo can also be used to print multiple string arguments. However, unlike a function we can't wrap them in parentheses for it to work.

    echo "This", " ", "also works!", "\n";
    //echo("But", " this does not work", "\n");

    # gettype()

    # The gettype() function takes a variable as it's argument aand returns a string value representing the data type of the argument.

    $first = "Welcome to the magical world of built-in functions.";
  
    $second = 82137012983; 

    echo gettype($first) . "\n"; // Outputs "string"
    echo gettype($second) . "\n"; // Outputs "integer"

    # The var_dump function can take a variable argument and outputs details about the argument.

    echo var_dump($first); // Prints string(51) "Welcome to the magical world of built-in functions."
    echo var_dump($second); // Prints int(82137012983)

    # So the var_dump for strings outputs the variable type, the length of the string, and the actual content of the variable. The var_dump for an integer outputs the variable type (as integer) and the content of the variable (The number).

    # The strrev() function will take a string assigned as it's argument and return the string with all of the characters from the original string in reverse order.

    echo strrev(".pu ti peeK .taerg gniod er'uoY"); // Will print "You're doing great. Keep it up."

    # The strtolower() function will take a string as it's argument and change all of the characters in that string to lower case.

    echo strtolower("SOON, tHiS WILL Look NoRmAL."); // Prints "soon, this will look normal"

    # Some built-in functions can take multiple arguments. The str_repeat() function takes a string as it's first argument and a number as it's second. It returns a string that contains the original string, repeated the number of times of the second argument.

    echo str_repeat("\nThere's no place like home.\n", 3); // Prints "\nThere's no place like home.\n\nPrints There's no place like home.\n\nPrints There's no place like home.\n"

    # Substrings - 

    # The function substr_count() can be used to return the number of instances of a substring within a string. 