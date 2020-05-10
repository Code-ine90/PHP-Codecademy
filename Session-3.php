<?php

    # Functions

    # You use the function keyword to start defining a function, then we name it, then we create a code block within the curly brackets which will be invoked when the function is called.

    function inflateEgo() 
    {
        echo "You are awesome.";
    }

    # We can then call the function by using it's name followed by parenthesis, this tells the computer to grab the instructions specified in the function definition and execute them.

    inflateEgo(); // Should print "You are awesome."

    # Return Statements

    # As functions can be used to process data, functions have the ability to return a value in addidion to performing instructions. We can capture this returned valie in a variable.

    function printStringReturnNumber()
    {
        echo "My favourite number is: "; // This will print when the function is called.
        return 112; // This will be returned when the function is called.
    }

    $my_num = printStringReturnNumber(); // This will call the function and assign it's return value to the variable $my_num. So it should print "My favourite number is: ", and return the value 112 to the variable.

    echo $my_num; // Should print 112.

    # Return statements also immediately stops a function. So any code written after a return statement will not be executed.

    function first()
    {
    return "You did it!\n";
    }

    function second()
    {
    return "You're amazing!\n";
    }

    function third()
    {
    return "You're a coding hero!\n";
    }

    echo first() . second() . third(); // Should output You did it! You're amazing! You're a coding hero! over 3 seperate lines.

    # NULL

    # If a function doesn't have a return statement, it will still execute the code within but the function will return the NULL value. NULL is a data type that stands for the absence of a value.

    function returnNothing() 
    {
    echo "I'm running! I'm running!\n";
    }

    $result = returnNothing(); // Prints: I'm running! I'm running!

    echo $result; // Nothing is printed

    # Parameters

    # When a function is defined, we can also define parameters for it. A parameter is a variable that serves as a placeholder throughout the functions code block. When we call the function we can pass a value in, which will replace each occurance of the parameter with the value. The value passed in is known as an argument.

    function increaseEnthusiasm($string)
    {
    return $string . "!\n"; // Returns the argument put in, with an exclamation appended on the end.
    }

    echo increaseEnthusiasm("I'm awesome"); // Prints "I'm awesome!"
    echo increaseEnthusiasm("And cool"); // Prints "And cool!"

    function repeatThreeTimes($string)
    {
    return $string . $string . $string; // This should return the arguement input three times in a row.
    }

    echo repeatThreeTimes("Hello\n"); // Should print "HelloHelloHello".

    $result = repeatThreeTimes("Hi"); // Sets the value of $result to HiHiHi
    echo increaseEnthusiasm($result); // Should print "HiHiHi!"

    echo increaseEnthusiasm(repeatThreeTimes("Hi")); // This should return the same value as above "HiHiHi!", but without having to assign the return from repeatThreeTimes() function to a variable first. You can place functions as arguments in other functions, so their return values are used as the argument.

?>