<?php

# Conditionals

# One of the type of conditional is an if statement

# An if statement follows this basic structure:
/* 
if (condition) {
  do the thing in this code block
}
*/

# In an if statement, if condition is true then the code block will run 


    $learner_one = [
        "is_correct"=>FALSE, 
        "box"=>[
            "shape"=>"none", 
            "color"=>"none"
            ]
        ];
        
    $learner_two = [
        "is_correct"=>TRUE, 
        "box"=>[
            "shape"=>"none", 
            "color"=>"none"
            ]
        ];

    function markAnswer($is_it_correct, &$checkbox) {
    if ($is_it_correct) { // This line checks that variable $is_it_correct and if it evaluates to TRUE, then it runs the first section of code. If it evaluates to FALSE it runs the else section of code.
        $checkbox["shape"] = "checkmark";
        $checkbox["color"] = "green";
    } else {
        $checkbox["shape"] = "x";
        $checkbox["color"] = "red";
    }
    }

    markAnswer($learner_two["is_correct"], $learner_two["box"]); // Changes the "shape" and "color" values in our variables!
    print_r($learner_two); /* Prints:
    Array

    [is_correct] => 1
    [box] => Array
        (
            [shape] => checkmark
            [color] => green
        )

    )
    */


# With if statements, the condition (Or expression) can hold a boolean value like TRUE or FALSE, a variable that is assigned one of those values, or an expression that evaluates to TRUE or FALSE.

# The less than operator (<) will return TRUE if the operand on the left of it is lower than the right operand.

# The less than or equal to operator (<=) is similar, but will return true if the left operand is less than or equal to the right operand.

# The greater than (>) and greater than or equal to (>=) operators function in much the same way, but with the obvious differences.

    function chooseCheckoutLane($item_number) {
        if ($item_number <= 12) {
        return "express lane";
        } else {
        return "regular lane";
        }
    }
    
    function canIVote($age) {
        if ($age >= 18) {
        return "yes";
        } else {
        return "no";
        }
    }
    
    echo chooseCheckoutLane(12); // Prints: express lane
    echo "\n";
    echo chooseCheckoutLane(13); // Prints: regular lane
    echo "\n";
    echo canIVote(17); // Prints: no
    echo "\n";
    echo canIVote(18); // Prints: yes