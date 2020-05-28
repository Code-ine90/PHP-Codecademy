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