<?php

/**
 * File: sign-in.php
 *
 * Purpose:
 * - Handle user sign-in.
 * - Validate user credentials against the database.
 * - Upon successful validation, create a session for the user.
 * - If credentials are invalid, show an error message.
 *
 * To-Do:
 * 1. If the form is submitted:
 *     a. Capture user input.
 *     b. Sanitize and validate the data.
 *     c. Check the data against the database.
 *     d. If credentials match, create a user session.
 *     e. If not, show an error message.
 * 2. If the user is already logged in, redirect to the dashboard.
 * 3. Display the sign-in form.
 *
 * Remember to:
 * - Avoid SQL injection by using prepared statements.
 * - Store passwords securely (hashed).
 * - Handle session securely.
 */

// TODO: Include necessary files like db.php and functions.php
require_once 'lib/db_php.php';
include 'include/headerlocked.php';
// TODO: Start the session if it hasn't been started already.
session_start();
// TODO: If the user is already logged in, redirect to the dashboard.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // TODO: Capture user input (email_address and password).

    // TODO: Sanitize and validate user input.

    // TODO: Check user credentials against the database.

    // TODO: If credentials match, create a user session.

    // TODO: If not, show an error message.
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- TODO: Add any necessary CSS or JS links here -->
</head>
<body>

<!-- TODO: Display the sign-in form. Fields should include email_address and password -->
<form action="sign-in.php" class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="email_address" class="sr-only">Email address</label>
    <input type="email" id="email_address" class="form-control" placeholder="Email address" required autofocus>
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>

</body>
</html>
