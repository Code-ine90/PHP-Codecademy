<?php 
    #PHP has two number types, integers and floating points. Integers are positive and negative whole numbers. Floating points are used to represent decimal numbers.

    $my_integer = 112;

    echo $my_integer;
    echo "\n";

    $my_floating_point = 2.6;

    echo $my_floating_point;

    # We can also use the addition (+) and subtraction (-) operators to perform mathmatical operations in PHP. Most of the time we don't have to worry about what type of number we are using. A float can be added to or subtracted from an integer. One quirk is that operators will return integers whenever the operator evaluated to a whole number. I.E. 8.9 + 1.1 will return 10, not 10.0.

    echo 5 + 7; // Should return 12
    echo "\n";
    echo 3.3 + 6.7 + 2; // Should return 12

    # Let's work out how much more was spent last month than this month.

    $last_month = 1187.23;
    $this_month = 1089.98;

    echo $last_month - $this_month; // Should return 97.25

    # PHP also has the multiplication (*) and division (/) operators.

    $num_cookies = 24;
    $num_friends = 7;
    $cookies_per_friend = $num_cookies / $num_friends;

    echo $cookies_per_friend; // Prints 3.4285714285714

    # Meg has learnt several programming languages. But she wants to know how long it takes her on average to learn each language. She has learnt 4 languages over 11 months, but only really studies for 16 days a month. Let's work it out!

    $num_languages = 4;
    $months = 11;

    $days = $months * 16;

    $days_per_language = $days / $num_languages;

    echo $days_per_language; // Should print 44

    # PHP also has the expnentiation (**) operator. This allows us to raise a number to the power of another number.

    echo 4 ** 2; // Should print 16, as it is 4 to the power of 2.

    # You can also use this operator on floats and negative numbers

    # PHP also has the modulo (%) operator. This operator returns the remainder after the left operand is divided by the right operand.

    echo 7 % 3; // This should print 1

    # The modulo operator will convert its operands in to integers before performing the operation. So 7.9 % 3.8 should still return 1.

    $num_cookies_2 = 27;
    $cookies_per_serving = 4;
    $left_over_cookies = $num_cookies_2 % $cookies_per_serving;
    
    echo $left_over_cookies; // Should print 3

    # Multiple operations can be chained together to get a single result

    echo 2 + 3 + 4 + 5 - 1.1; // Prints: 12.9
    echo 2 * 9 / 6; // Prints: 3

    /* Operations are evaluated in the following order:

        1. Any operation wrapped in parentheses ()
        2. Exponents (**)
        3. Multiplication (*) and Division (/)
        4. Addition (+) and Subtraction (-)

    PEDMAS can be used to help remember the order (Parentheses, Exponents, Divide, Multiply, Add, Subtract) */

    echo 1 + 3 * 9; // Prints 28, as 3 * 9 is calculated to 27, then 1 is added to this.
    echo (1 + 3) * 9; // Prints 36, as 1 + 3 is calculated to 4, then multiplied by 9

    /* I’m trying to figure out how much money I should have. At the start of the day I had $94.

        I spent $4.25 on coffee
        A friend gave me $7 that he owed me
        I went out for a meal. The bill was $23.50, but I also gave a 20% tip.
        Some friends and I found $20 on the ground and split it four ways */

    $final_money = 94 - 4.25 + 7 - (23.50 * 1.2) + 20 / 4;
    echo + $final_money; // Should print 73.55;

    /* A common task when manipulatiung number variables is to reassign them to their old variables with some operation performed on it. Such as $savings = $savings - $cost;

    But there is shorthand for this!
    
    Long syntax: $x = $x + $y;
    Short syntax: $x += $y;

    These both perform the same function. There are others for other mathematical functions:

        Subtract: -=
        Multiply: *=
        Divide: /=
        Mod: %=
    */

    $savings = 300;
    $pizza_cost = 40;
    $savings = $savings - $pizza_cost;
    echo $savings; // Prints 260

    $savings = 300;
    $savings -= $pizza_cost;
    echo $savings; // Also prints 260;

    # There are also the increment operators, post-increment (++) to add 1 and post-decrement (--) to subtract 1.

    $age = 29;
    $age++;
    echo $age; // Prints 30

    $days_until_pizza = 4;
    $days_until_pizza--;
    echo $days_until_pizza; // Should print 3

    # Now for some magical assignment operator tricks!

    $my_num = 21;
    $answer = $my_num;
  
    $answer += 2;
  
    $answer *= 2;
    
    $answer -= 2;
    
    $answer /= 2;
    
    $answer -= $my_num;
  
    echo $answer; // It's always 1!

    # Spooky!

?>