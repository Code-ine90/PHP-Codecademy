

<html>
<body>
<h1>PHP and HTML</h1>
<p>This is HTML</p>

<?php

    /* The back-ends of websites will differ depending on the needs of the site. Typically, they’ll have at least the following components:

    A web server: a web server is a computer or program which listens for requests from clients and sends back responses. This component is well suited to handling delivery of static content.
    An application server: this is actually often a collection of programming logic which is needed to deliver dynamic content to a client. The application server will often handle other tasks such as site security and interacting with data.
    A data base: important information like usernames and passwords has to be stored and accessed somewhere. A large web application will often have multiple databases to store all different types of data needed to run the site smoothly.
    */

    echo "<p>This is PHP</p>";
?>

<?php 
$about_me = [
  "name" => "Aisle Nevertell",
  "birth_year" => 1902,
  "favorite_food" => "pizza"
];

function calculateAge ($person_arr){
  $current_year = date("Y");
  $age = $current_year - $person_arr["birth_year"];
  return $age;
}
?>

<h1>Welcome!</h1>
<h2>About me:</h2>

<?php
echo "<h3>My name is  {$about_me["name"]}.</h3>"; // Prints: My name is Aisle Nevertell.
echo "<p>My age is " . calculateAge($about_me) . ".</p>"; // Prints: My age is 118.
echo "<div>My favourite food is {$about_me["favorite_food"]}.</div>"; // Prints: My favourite food is pizza.
?>

<h2>Now tell me a little about you.</h2>

</body>
</html>

