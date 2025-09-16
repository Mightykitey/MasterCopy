<?php

session_start();/*each page that needs a session, not file*/

if ($_SERVER["REQUEST_METHOD"] === "POST") { // super global veurable



}


echo"<!doctype html>";

echo"<html>";

echo"<head>";

    echo"<title>session work</title>";
echo"<link rel='css/styles.css' rel='stylesheet'>";

echo"</head>";

echo"<body>";


echo "</div>";
echo"<h1>session work</h1>"; /*take user input and stores it somewhere else*/
    echo"<p></p>";
    echo"<form>";
        echo "<form method='post' action=''>";
        echo"<label=''>Please enter</label>";
        echo"<br>";
        echo"<input type='text' name='email' id='email' placeholder='Email'>";

        echo"<br>";

        echo"<label='lgn'>sudmit</label>";
        echo"<br>";
        echo "<input  type='submit' name='submit' id='lgn' value='submit'>";

    echo"</form>";


echo"</body>";

echo"</html>";

