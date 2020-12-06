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

The 1 after [is_correct] indicates a true value. I think. I looked it up and I was right. A true value is output as 1 and false produces no output.
*/
markAnswer($learner_one["is_correct"], $learner_one["box"]);
print_r($learner_one);


// The condition or expression in an if statement can hold a boolean value, a variable assigned to one of those values or an expression that evaluates to TRUE or FALSE.

// The less than (<) operator will return true if the operand on the left is less than the one on the right, or false if not

// There is also the less than or equal to (<=) operator, which as the name suggests, will return true of the left operand is less than or equal to the right one.

// You also get the greater than (>) operator, and similarly the greater than or equal to (>=) operator. Self explanatory really.

function chooseCheckoutLane ($numItems) {
    if ($numItems <= 12) {
    return "express lane";
    } else {
    return "regular lane";
    }
}

echo chooseCheckoutLane(12); // Prints: "express lane"
echo "\n";
echo chooseCheckoutLane(5); // Prints: "express lane"
echo "\n";
echo chooseCheckoutLane(15); // Prints: "regular lane"
echo "\n";

function canIVote($age) {
    if ($age >= 18) {
    return "yes";
    } else {
    return "no";
    }
}

echo canIVote(17); // Prints: "no"
echo "\n";
echo canIVote(18); // Prints: "yes"

// The identical operator (===) will return TRUE if the operand is the same on both left and right of the operator.

function agreeOrDisagree($str_one, $str_two) {
if ($str_one === $str_two) {
    return "You agree!";
} else {
    return "You disagree!";
}
}

$hello = "hel" . "lo";

echo agreeOrDisagree("hello", "Hello"); // Prints: "You Disagree!" - because one is capitalised and the other is not
echo "\n";
echo agreeOrDisagree("hello", "hello"); // Prints: "You agree!"
echo "\n";
echo agreeOrDisagree("hello", $hello); // PrintsL "You agree!" - The two sections when the variable is defined are concatonated into a single string. 
echo "\n";

// You can also use the not identical operator (!==) to similar effect. This will return true if the two operands are different and false if they are the same.

function checkRenewalMonth($renewalMonth) {
if ($renewalMonth !== date("F")) {
    return "Welcome!";
} else {
    return "Time to renew";
}
}

echo checkRenewalMonth("January"); // Prints: "Welcome!"
echo "\n";
echo checkRenewalMonth("November"); // Prints: "Time to renew"

// There is also the equal operator (==), this is similar to the identical operator but not as strict. 




