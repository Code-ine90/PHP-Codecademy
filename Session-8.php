<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Learning PHP and HTML</h1>
    <p>This first paragraph is standard HTML</p>
    <?php echo '<p>This is inserted using the long syntax.</p>'?> <!-- This line uses the opening and closing PHP tags and echo to add text to the HTML. -->
    <?="<p>Let's insert some text into our HTML using PHP! This was inserted using the shorthand syntax.</p>";?> <!-- Adding text like this is so common that PHP provides shorthand syntax for doing it. We used it in this line!-->
    <p>This last paragraph is also standard HTML</p> 
        

    <!-- Superglobals are automatic global variables which are available in all scopes throughout a script. Some of the superglobals are:
    $GLOBALS
    $_SERVER
    $_GET
    $_POST
    $_FILES
    $_COOKIE
    $_SESSION
    $_REQUEST
    $_ENV 

    We will be looking at three superglobals:
    $_GET - This contains an associative array of variables passed to the current script using query parameters in the URL.

    $_POST - This contains an associative array of variables passed to the current script using a form submitted using the "POST" method.

    $_REQUEST - This contains the contents of $_GET, $_POST and $_COOKIE
    -->

    $_REQUEST:
    <?php print_r($_REQUEST); /* Prints the contents of $_GET and $_POST
    Array (
        [get_name] => 123
        [post_name] => 456
    ) 
    */
    ?>

    <br>

    $_GET:
    <?php print_r($_GET); /* Prints the contents of the form with the method "get", which are stored in the superglobal $_GET 
    Array (
        [get_name] => 123
    )
    */
    ?>

    <br>

    $_POST:
    <?php print_r($_POST); /* Prints the contents of the form with the method "post", which are stored in the superglobal $_POST 
    Array (
        [post_name] => 456
    )
    */
    ?>

    <form method="get">
    GET Form: <input type="text" name="get_name">
    <input type="submit" value="Submit GET">
    </form>
    <form method="post">
    POST Form: <input type="text" name="post_name">
    <input type="submit" value="Submit POST">
    </form>
    <a href="Session-8.php">Reset</a>

    <form method="get"> <!-- sets the form method to "get", so that the form entries are passed as parameters in a URL query string. -->
    Country:
    <input type="text" name="country"> <!-- The name for this input is set to "country" -->
    <br>
    Language:
    <input type="text" name="language"> <!-- The name for this input is set to "language" -->
    <br>
    <input type="submit" value="Submit"> <!-- When the data from the form is submitted, it is stored as an array in $_GET -->
    </form>
    <br>
    <?php print_r($_GET);?> <!-- In this case the array in $_GET is:
    Array (
        [country] => UK
        [language] => English
    )
    -->
    <p>Your language is: <?=$_GET["language"];?></p> <!-- Takes the value from the [language] key stored in the $_GET array, and outputs it into the page -->
    <p>Your country is: <?=$_GET["country"];?></p> <!-- Takes the value from the [country] key stored in the $_GET array, and outputs it into the page -->
    <a href="index.php">Reset</a>

    <form method="post">
    Favorite Color:
    <input type="text" name="color">
    <br>
    Favorite Food:
    <input type="text" name="food">
    <br>
    <input type="submit" value="Submit">
    </form>
    <br>
    <p>Best food is: <?=$_POST["food"]?></p> <!-- Much the same as before with the "get" method, we take the value from the [food] key in the $_POST array, and use the short syntax to echo it onto the page. -->
    <p>Best color is: <?=$_POST["color"]?></p>
    <a href="index.php">Reset</a>

    <!-- If we wanted to have the users navigate to another page and handle the form input there, we can use the action="" attribute in the forms HTML. For this we specify the URL we want to use. This works for both GET and POST methods. -->



</body>
</html>