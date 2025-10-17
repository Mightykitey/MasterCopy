<?php

session_start(); // Start the session for this page to allow session variables (like flash messages)

// Include required PHP files only once
require_once "assets/commonfunk.php"; // Common utility functions
require_once "assets/dabco.php";      // Database connection functions

// Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        // Call the function to add a new patient, passing DB connection and POST data
        new_patients(dabco_insert(), $_POST); // Calls the "subroutine" to insert the patient
        $_SESSION['usermessage'] = "Success: Console registered!"; // Set a success message in the session
    } catch (Exception $e) {
        // If any exception occurs, set the error message in the session
        $_SESSION['usermessage'] = $e->getMessage();
    }
}

// Output the HTML document
echo "<!doctype html>";
echo "<html>";

echo "<head>";
echo "<title>Registration</title>"; // Page title
echo "<link href='css/styles.css' rel='stylesheet'>"; // Link to external CSS
echo "</head>";

echo "<body>";

echo "<div id='main'>"; // Main container
echo "<h1>Primary Oaks Surgery</h1>"; // Page heading
require_once "assets/nav.php"; // Include navigation menu
echo "</div>";

// Content area with the registration form
echo "<div class='content'>";
echo "<form method='post' action=''>"; // Form posts back to the same page
echo "<br>";

// First Name field
echo "<label for='fname'>Name:  </label>";
echo "<input type='text' name='fname' value='Fist Name'>"; // NOTE: value should be empty or placeholder
echo "<br>";

// Last Name field
echo "<label for='lname'>Surname:  </label>";
echo "<input type='text' name='lname' value='last Name'>";
echo "<br>";

// Date of Birth field
echo "<label for='dob'>Date of Birth:  </label>";
echo "<input type='text' name='dob' value='Date of Birth'>";
echo "<br>";

// Email field
echo "<label for='email'>Email:  </label>";
echo "<input type='text' name='email' value='Email'>";
echo "<br>";

// Password field
echo "<label for='pwd'>Password:  </label>";
echo "<input type='password' name='pwd' value='Password'>"; // NOTE: Don't use default value in password fields
echo "<br>";

// Submit button is missing — should be added to make the form work
echo "<input type='submit' value='Register'>";

echo "</form>";
echo "</div>";

echo "</body>";
echo "</html>";
?>
