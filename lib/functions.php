

/**
 * File: functions.php
 *
 * Purpose:
 * - This file contains the essential functions used throughout the website.
 * - Students are expected to implement and potentially extend these functions as needed.
 *
 * To-Do:
 * 1. Implement the 'hash_password' function to securely hash user passwords.
 * 2. Implement the 'verify_password' function to check a given password against its hash.
 * 3. Add any other utility functions that you may need for the website.
 *
 * Remember to:
 * - Use PHP's built-in functions and libraries where appropriate.
 * - Follow the security practices mentioned during lectures.
 */

<?php

//helper
function sanitize($input)
{

    //1. Trim
    $input = trim($input);

    //2. strip html
    $input = strip_tags($input);

    //3. Remove Special Characters
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    return $input;

}
