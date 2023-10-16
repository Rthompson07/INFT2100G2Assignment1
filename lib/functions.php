<?php

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

/**
 * Redirect user to the specified URL
 * @param string $url
 * @return void
 */

function redirect(string $url) : void {
    header("Location: " . $url);
    exit;
}

/**
 *  Sets message in the session
 * @param string $msg
 * @return void
 */
function setFlashMessage(string $msg): void {
    $_SESSION['flash'] = $msg;
}

/**
 * Retrieves current flash message from the session
 * @return string|null
 */
function getFlashMessage() : ?string{
    return $_SESSION['flash'] ?? null;
}

/**
 * Checks if flash message was set
 * @return bool
 */
function hasFlashMessage() : bool {
    return isset($_SESSION['flash']);
}

/**
 * Remove flash message
 * @return void
 */
function removeFlashMessage() : void{
    unset($_SESSION['flash']);
}

/**
 * Retrieves and removes the current flash message from the session
 * @return string The flash message or an empty string if it does not exist
 */
function flashMessage() : string {
    $message = getFlashMessage();
    removeFlashMessage();
    return $message();
}