<?php /* This is a comment. This <?php tag is the opening tag for PHP script. If you use it in an HTML file embedded in the code, you would use the ?> tag to close the PHP. */

// You can use // or # for single line comments.

# Like this.

    echo "This is used to print data on screen.";
    echo "This is a string. A string can be any length and contain any letters, numbers, symbols, or spaces surrounded by quotation marks.";
    echo "Certain characters require \"escape operators\" for them to work in a string. \nIs the new line operator.";
    echo "You can use " . "the concatenation operator (.) to combine" . "multiple strings.";

    $variable = "This is a variable. They are declared using the \$ followed by a variable name. We then use the assignment operator (=) to give it a value.";

    echo $variable;

    $variable_parsing = "\"variable parsing\"";

    echo "We are able to use $variable_parsing to include variables in our strings.";

    $variable_parsing = "variable value";

    echo "We can change the $variable_parsing after a variable has been assigned. This is called reassignment.";

    echo "You can assign the value of a variable to be that of another variable too.";

    $player_one_rank = "Beginner";
    $player_two_rank = $player_one_rank;

    echo $player_one_rank . " " . $player_two_rank; // Will parse Beginner Beginner.

    $player_one_rank = "Intermediate";

    echo $player_one_rank . " " . $player_two_rank; // Will parse Beginner Intermediate.

    # The above changes to $player_one_rank do not effect the $player_two_rank variable. While they are both assigned the same value at the start, the data is saved for each variable separately. You can use the reference assignment operator (=&) to instead create an alias for a variable instead of just a copy.

    $player_one_team = "Blue";
    $player_two_team =& $player_one_team;

    echo $player_one_team . " " . $player_two_team; // Should return Blue Blue.

    $player_one_team = "Red";

    echo $player_one_team . " " . $player_two_team; // Should return Red Red.

    # Operations on the right of an assignment operator (=) will be evaluated before assignment takes place.

    # You can also use the shorthand concatenation operator (.=) to append the current value of a variable with another string value.