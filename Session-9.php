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

$current_month = date("F");

function checkRenewalMonth($renewalMonth) {
if ($renewalMonth !== date("F")) {
    return "Welcome!";
} else {
    return "Time to renew";
}
}

echo checkRenewalMonth("January"); // Prints: "Welcome!"
echo "\n";
echo checkRenewalMonth($current_month); // Prints: "Time to renew"

// There is also the equal operator (==), this is similar to the identical operator but not as strict. 

// Another type of conditional is the elseif, with this one you can write multiple if statements and the computer will continue through each until it finds a condition that is met or gets to the end of the statements. You can write the statements with (else if) instead of (elseif), but elseif is more universal so I tend to use that.

function whatRelation($matchPercentage) {
    if ($matchPercentage === 0) {
      echo "not genetically related";
    } elseif ($matchPercentage < 3) {
      echo "third cousins";
    } elseif ($matchPercentage < 6) {
      echo "second cousins";
    } elseif ($matchPercentage < 14) {
      echo "first cousins";
    } elseif ($matchPercentage < 35) {
      echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
    } elseif ($matchPercentage < 100) {
      echo "parent and child or full siblings";
    } else {
      echo "identical twins";
    }
   }
   
   whatRelation(100); // Prints: identical twins
   echo "\n";
   whatRelation(0); // Prints: not genetically related
   echo "\n";
   whatRelation(54); // Prints: parent and child or full siblings


// Instead of using an if/elseif statement with many identical operator (===) comparisons, we can use a switch statement instead. A switch statement compares cases with the input value and executes a block of code if the comparison is true. 

function airQuality($color) {
    switch ($color){
      case "green":
        echo "good";
        break; // Stops the code and ends the statement.
      case "yellow":
        echo "moderate";
        break;
      case "orange":
        echo "unhealthy for sensitive groups";
        break;
      case "red":
        echo "unhealthy";
        break;
      case "purple":
        echo "very unhealthy";
        break;
      case "maroon":
        echo "hazardous";
        break;
      default:
        echo "invalid color";
    }
  }
  
  // Each case is compared with the input value and the code is executed, at the end of each code block the break ends the switch statement.
  
  airQuality("red"); // Prints: "unhealthy"
  echo "\n";
  airQuality("blue"); // Prints: "invalid color"
  echo "\n";
  airQuality("green"); // Prints: "good"
  echo "\n";
  airQuality("maroon"); // Prints: "hazardous"

  // If you do not use the keyword (break) at the end of each statement, then you will encounter something called "fall through". This is when the first matching case's block will run, but also any subsequent case's code until a break or return statement is encountered or the end of the switch statement. 

  // This can actually be useful if you have if you have multiple cases that execute the same code.

  function returnSeason($month) {
    switch ($month) {
      case "December":
      case "January":
      case "February":
        return "winter";
        break;
      case "March":
      case "April":
      case "May":
        return "spring";
        break;
      case "June":
      case "July":
      case "August":
        return "summer";
        break;
      case "September":
      case "October":
      case "November":
        return "fall";
        break;
    }
  }

  echo returnSeason(date("F")); // Prints whatever the season is for the current month.
  echo "\n";
  echo returnSeason("May"); // Prints: "spring"

  // Another type of operator is the ternary (?:) operator. This takes three operands and returns a value. The first operand is the condition to be checked, which is followed by a question mark (?). The second operand is an expression to return if the condition is true, this is followed by a colon. The third operand is the expression to be returned if the condition is false.

  // The use of a ternary is to return a value, not to execute code.

  $isClicked = FALSE;
  $link_colour = $isClicked ? "purple" : "blue";
  echo $link_colour; // Prints: "blue"
  echo "\n";

  function ternaryCheckout($items) {
    return $items <= 12 ? "express lane" : "regular lane";
  }

  echo ternaryCheckout(11); // Prints: "express lane"
  echo "\n";
  echo ternaryCheckout(13); // Prints: "regular lane"
  echo "\n";

  function ternaryVote($age) {
    return $age >= 18 ? "yes" : "no";
  }

  echo ternaryVote(12); // Prints: "no"
  echo "\n";
  echo ternaryVote(21); // Prints: "yes"

// Any value or expression in a condition will be converted to TRUE or FALSE. 

if ("What's going on?") {
  echo "Let me explain";
}

echo "\n";

// This block of code checks the 'truthiness' of the value, and converts the value to true. Code that is converted to TRUE is often refered to as 'truthy' and one that equates to FALSE as 'falsy' as they are not actually equivalent to those boolean values but are treated as such in certain contexts. 

// Examples of falsy values are empty strings, null, undefined or undeclared values, an empty array, the number 0 or the string "0".

function truthyOrFalsy($value) {
  if($value) {
    return "True";
  } else {
    return "False";
  }
}

echo truthyOrFalsy("Hello"); //Prints: "True" because it holds a value.
echo "\n";
echo truthyOrFalsy(0); // Prints: "False"
echo "\n";
echo truthyOrFalsy(null); // Prints: "False"