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
    # A substring is a portion of a string. For example "hello" is a substring of "Oh hello, how are you?". "el" is substring of "hello".

    # The function substr_count() can be used to return the number of instances of a substring within a string. 

    # The substr_count() function takes two arguments, the string to be searched through, and the string to search for. The string being searched throuh is sometimes called a haystack, and the string being searched for is sometimes called a needle.

    $essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different though.";
  
    $essay_two = "Obviously this is a really good book. You obviously would not have made us read it if it wasn't. I felt like the ending was too obvious though. It was so obvious who did it right away. I think the thing with the light was obviously a metaphor for life. It would have been better if the characters were less obvious about their secrets."; 

    echo substr_count($essay_one, "really") . "\n"; // Prints 6, as there are 6 counts of the word really in the string held by $essay_one
    echo substr_count($essay_two, "obvious") . "\n"; // Prints 5. The substr_count() function is not concerned by what characters come before or after the needle, it will count both "obvious" and "obviously" in it's count.

    # Two other inbuild functions that come in handy in PHP are to manipulate numbers. The first is the abs() function.

    # The abs() will return the abosolute value of it's number argument.

    echo abs(-10.99); // Prints 10.99.

    # We can use this to calculate the difference between two numbers.

    function calculateDistance($num1, $num2)
    {
        $answer = ($num1) - ($num2);
        return abs($answer);
    }

    echo calculateDistance(-1, 99);

    echo "\n";

    # Another useful function is the round() function. This will return the nearest integer to its number argument.

    echo round(1.2); // Prints 1
    echo round(1.5); // Prints 2

    # We can use this in-built function to help us calculate tips.

    function calculateTip($meal_cost)
    {
        $meal_and_tip = $meal_cost + (($meal_cost/100) * 18);
        return round($meal_and_tip);
    }

    echo calculateTip(88.77); // Should print 105

    # rand() is another in-built function for working with numbers. It is used to generate a random number. If it is invoke without arguments it will generate a number between 0 and the largest number the current environment will allow.

    echo rand(); // Prints a random number between 0 and the higest number allowed by the environment.

    # To find the largest number the current environment will allow we can use another function called getrandmax().

    $max = getrandmax();

    echo $max; // Prints the largest number the current environment will allow.

    # Functions are often very strict on what arguments they can be called with. rand() is a little more flexible. 

    # We can have more control over the random number that is generated by calling the rand() function with two arguments. These arguments are the smallest allowable number and the largest.

    # These arguments are inclusive. So if we invoke rand() with two arguments, the random number could also be either of the numbers in the arguments.

    echo rand(1, 2); // Will print either 1 or 2

    echo rand(52, 1); // Will print a random number, that is between 1 and 52

    

    


