<?php

    # Functions

    # You use the function keyword to start defining a function, then we name it, then we create a code block within the curly brackets which will be invoked when the function is called.

    function inflateEgo() 
    {
        echo "You are awesome.";
    };

    # We can then call the function by using it's name followed by parenthesis, this tells the computer to grab the instructions specified in the function definition and execute them.

    inflateEgo(); // Should print "You are awesome."

    # Return Statements

    # As functions can be used to process data, functions have the ability to return a value in addidion to performing instructions. We can capture this returned valie in a variable.

    function printStringReturnNumber()
    {
        echo "My favourite number is: "; // This will print when the function is called.
        return 112; // This will be returned when the function is called.
    };

    $my_num = printStringReturnNumber(); // This will call the function and assign it's return value to the variable $my_num. So it should print "My favourite number is: ", and return the value 112 to the variable.

    echo $my_num; // Should print 112.

    # Return statements also immediately stops a function. So any code written after a return statement will not be executed.

    function first()
    {
    return "You did it!\n";
    };

    function second()
    {
    return "You're amazing!\n";
    };

    function third()
    {
    return "You're a coding hero!\n";
    };

    echo first() . second() . third(); // Should output You did it! You're amazing! You're a coding hero! over 3 seperate lines.

    # NULL

    # If a function doesn't have a return statement, it will still execute the code within but the function will return the NULL value. NULL is a data type that stands for the absence of a value.

    function returnNothing() 
    {
    echo "I'm running! I'm running!\n";
    };

    $result = returnNothing(); // Prints: I'm running! I'm running!

    echo $result; // Nothing is printed

    # Parameters

    # When a function is defined, we can also define parameters for it. A parameter is a variable that serves as a placeholder throughout the functions code block. When we call the function we can pass a value in, which will replace each occurance of the parameter with the value. The value passed in is known as an argument.

    function increaseEnthusiasm($string)
    {
    return $string . "!\n"; // Returns the argument put in, with an exclamation appended on the end.
    };

    echo increaseEnthusiasm("I'm awesome"); // Prints "I'm awesome!"
    echo increaseEnthusiasm("And cool"); // Prints "And cool!"

    function repeatThreeTimes($string)
    {
    return $string . $string . $string; // This should return the arguement input three times in a row.
    };

    echo repeatThreeTimes("Hello\n"); // Should print "HelloHelloHello".

    $result = repeatThreeTimes("Hi"); // Sets the value of $result to HiHiHi
    echo increaseEnthusiasm($result); // Should print "HiHiHi!"

    echo increaseEnthusiasm(repeatThreeTimes("Hi")); // This should return the same value as above "HiHiHi!", but without having to assign the return from repeatThreeTimes() function to a variable first. You can place functions as arguments in other functions, so their return values are used as the argument.

    # A function can have multiple parameters. However if you pass in less arguments than the function expects, it will return an error I.E. multiParam($p1, $p2, $p3) called as multiParam(1, 2) will return an error as it is expecting 3 arguments to be passed to it.

    function calculateArea($num1, $num2) 
    {
    return $num1 * $num2;
    };

    echo calculateArea(5, 10) . "\n";

    function calculateVolume($num1, $num2, $num3) 
    {
    return $num1 * $num2 * $num3;
    };

    echo calculateVolume(5, 10, 4) . "\n";

    echo "The total volume of concrete to be ordered for pad 2 is: " . calculateVolume(4.2, 16, .15)  . " cubic meters";

    # We can also add a default value to a parameter. In this example, we want to calculate the tip left for a meal, but if the person wants to just use the standard 20% tip, they can leave the input blank.

    function calculateTip($mealCost, $tip = 20)
    {
    return $mealCost * (1 + ($tip/100));
    };

    echo calculateTip(100, 10) . "\n";
    echo calculateTip(100) . "\n";
    echo calculateTip(65, 15) . "\n";

    # Much the same as with variables, when we assign a variable as the argument to be passed to the function, it will not make permanent changes to the variable unless we use the reference sign (&) and make the parameter an alias for the variable.

    function addX ($param)
    {
    $param = $param . "X";
    echo $param;
    };
    $word = "Hello";
    addX($word); // Prints: HelloX
    echo $word; // Prints: Hello

    # If we prepend the parameter with the reference sign (&) we will end up with a differt output though.

    function addXPermanently (&$param)
    {
        $param = $param . "X";
        echo $param;
    };

    $word = "Hello";
    addXPermanently($word); // Prints "HelloX"
    echo $word; // Also prints "HelloX"

    # Variable Scope

    # Parameters defined for a function have a local scope, meaning that can only be used within that function.

    function calculateDaysLeft($feed_quantity, $number, $rate)
    {
    $result = $feed_quantity / ($number * $rate);
    return $result;
    }
    echo calculateDaysLeft(300, 2, 30);

    # If we tried to echo $result outside of the function, it would give us an error (Undefined variable). 

    # However many variables can rely on the same piece of data, and this may be stored in a global variable. To access a global variable in a function we have to use the "global" keyword to tell PHP to look in the global scope for the variable instead of just the local scope.

    $feed_quantity = 300;
    function calculateDaysLeft($number, $rate)
    {
    global $feed_quantity;
    $result = $feed_quantity / ($number * $rate);
    return $result;
    }
    echo calculateDaysLeft(2, 120);

    # In this next example we have been asked to change the function so that we can use the global variable $language instead of filling out the function parameters each time with the same information.

    $language = "PHP";
    $topic = "scope";

    function generateLessonName($language, $concept)
    {
    return $language . ": " . $concept;
    }

    echo generateLessonName($language, $topic);

    # This is what it looks like afterwards.

    function generateLessonName($concept)
    {
    global $language;
    return $language . ": " . $concept;
    }

    echo generateLessonName($topic); // Should print "PHP: scope"
    echo generateLessonName("parameter"); // Should print "PHP: parameters"

    

?>