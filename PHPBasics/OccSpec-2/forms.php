<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo"<head>";

echo"</head>";



echo "<body>";
if ($_SERVER["REQUEST_METHOD"] === "POST") { //super global(server/post)(=== is an absolute)
    echo "Number of tickect: " . $_POST["num"] . "<br>";
    echo "Your email: " . $_POST["email"] . "<br>";
    echo "Your password: " . $_POST["password"] . "<br>";
    echo "The date record: " . $_POST["date"] . "<br>";
    echo "You gender: " .(isset($_POST["gender"]) ? $_POST["gender"] : "not selected") . "<br>";
    echo " your employment state: " . (isset($_POST["e"]) ? $_POST["e"] : "not selected") . "<br>";
    echo " your employment state: " . (isset($_POST["ne"]) ? $_POST["ne"] : "not selected") . "<br>";
    echo " your employment state: " . (isset($_POST["se"]) ? $_POST["se"] : "not selected") . "<br>";




}


    echo "<form method='post' action=''>"; // request(post)
    // is there is not sent it just reload the page
        echo"<label for='num'>No. of ticket </label>";
        // this a label in front of the box's
        echo "<input type='text' name='num' id='num' placeholder='number of tickets required'>";
        // most thing start with an input. declare a name(num). placeholder text in the box's
        echo"<br>";
        echo"<label for='mail'>Email </label>";
        echo "<input type='text' name='email' id='email' placeholder='Email'>";


        echo "<br>";
        echo"<td><label for='pss'> Password </label>";
        echo "<input  type='password' name='password' id='pss' placeholder='password'>";
        // it hides what your typing



        echo "<br>";
        echo"<label for='submit'> Pick a date </label></td>";
        echo"<input type='datetime-local' name='date' id='date' placeholder='date'>";



        echo "<br>";
        echo"<label for='mg'>male</label>";
        echo"<input type='radio' name='gender' id='mg' value='male'>";



        echo"<br>";
        echo"<label for='fg'>female </label>";
        echo"<input type='radio' name='gender' id='fg' value='female'>";



        echo"<br>";
        echo"<label for='og'>other </label>";
        echo"<input type='radio' name='gender' id='og' value='other'>";

        echo"<br>";
        echo"<label for='work'>employed</label>";
        echo"<input type='checkbox' name='e' id='working' value='employed'>";

        echo"<br>";
        echo"<label for='work'>not employed</label>";
        echo"<input type='checkbox' name='ne' id='working' value='not employed'>";

        echo"<br>";
        echo"<label for='work'>self-employed</label>";
        echo"<input type='checkbox' name='se' id='working' value='self employed'>";

        echo "<br>";
        echo"<label for='lgn'> Login in </label>";
        echo "<input  type='submit' name='submit' id='lgn' value='login'>";

        echo "</form>";

    echo "<a href='index.php'> go back to main page</a> ";
    echo"<link rel='stylesheet' href='css/styles.css'>";

echo"</table>";
echo "</body>";
echo "</html>";
?>