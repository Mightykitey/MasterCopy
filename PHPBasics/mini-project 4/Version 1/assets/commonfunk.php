<?php

// Function to insert a new patient into the database
function new_patients($conn, $post)
{
    try {
        // Prepare an SQL statement with placeholders to insert new patient data
        $sql = "INSERT INTO patients (fname, lname, dob, email, pwd) VALUES (?,?,?,?,?)"; // Using a prepared statement for security
        $stmt = $conn->prepare($sql);  // Prepare the SQL statement to prevent SQL injection

        // Bind the form data to the prepared statement parameters
        $stmt->bindParam(1, $post['fname']); // Bind first name
        $stmt->bindParam(2, $post['lname']); // Bind last name
        $stmt->bindParam(3, $post['dob']);   // Bind date of birth
        $stmt->bindParam(4, $post['email']); // Bind email

        // Hash the password using SHA-256 before storing it
        $hpwd = hash('sha256', $post['pwd']); // Secure the password by hashing
        $stmt->bindParam(5, $hpwd);           // Bind the hashed password, not the plain text

        // Execute the prepared statement to insert the data
        $stmt->execute();

        // Close the database connection after the operation (optional, but good practice)
        $conn = null;
    } catch (PDOException $e) {
        // Log PDO-related errors (e.g., DB connection issues) without exposing details to the user
        error_log('Console database error: ' . $e->getMessage());
        throw new Exception('Console database error: ' . $e->getMessage());
    } catch (Exception $e) {
        // Catch any other general exceptions
        error_log('Console error: ' . $e->getMessage());
        throw new Exception('Console error: ' . $e->getMessage());
    }
}
