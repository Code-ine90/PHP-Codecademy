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
    
  print_r($learner_one);
    
  function markAnswer($is_it_correct, &$checkbox) {
    if ($is_it_correct) {
      $checkbox["shape"] = "checkmark";
      $checkbox["color"] = "green";
    } else {
      $checkbox["shape"] = "x";
      $checkbox["color"] = "red";
    }
  }
  
  markAnswer($learner_two["is_correct"], $learner_two);
  print_r($learner_two);