<?php
/*
-------------------------------------
File: dashboard.php
-------------------------------------
Purpose:
- Provide a personalized user interface for authenticated users.
- Display relevant information like user name, email address, and any other user-specific data.
- Offer functionality to view and edit personal information.
- Include options to log out or navigate to other parts of the website.

To-Do:
1. Include the header.php at the start.
2. Check if the user is authenticated (logged in). If not, redirect to the login page.
3. Fetch user-specific data from the database based on their unique identifier (e.g., email address).
4. Display the fetched data in a structured format.
5. Implement an "Edit Profile" functionality where users can update their details.
6. Provide a "Log Out" option.
7. Include the footer.php at the end.

Methods/Components to incorporate:
- `include()`: to include the header and footer.
- PHP PDO or mysqli for database operations.
- Session management to check authentication and store user details.
- Input validation and sanitation techniques when updating user details.

Remember to:
- Use prepared statements for database interactions to prevent SQL injection.
- Ensure that only authenticated users can access and modify their details.
*/

// 1. Include the header
include 'include/header.php';

// 2. Check user authentication
session_start();
if (!isset($_SESSION['email_address'])) {
    // Not authenticated, redirect to login
    header("Location: sign-in.php");
    exit;
}

// 3. Fetch user-specific data (placeholder, requires proper implementation)
// $email_address = $_SESSION['email_address'];
// Fetch user details based on email address from the database
// ...

// 4. Display user data (placeholder)
echo "Welcome [User Name]!"; // Replace [User Name] with actual name from database

// Display the Dashboard content
?>
<div class="container">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">Share</button>
            <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button>
    </div>

    <h2>Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            <tr>
                <td>1,002</td>
                <td>amet</td>
                <td>consectetur</td>
                <td>adipiscing</td>
                <td>elit</td>
            </tr>
            <tr>
                <td>1,003</td>
                <td>Integer</td>
                <td>nec</td>
                <td>odio</td>
                <td>Praesent</td>
            </tr>
            <tr>
                <td>1,003</td>
                <td>libero</td>
                <td>Sed</td>
                <td>cursus</td>
                <td>ante</td>
            </tr>
            <tr>
                <td>1,004</td>
                <td>dapibus</td>
                <td>diam</td>
                <td>Sed</td>
                <td>nisi</td>
            </tr>
            <tr>
                <td>1,005</td>
                <td>Nulla</td>
                <td>quis</td>
                <td>sem</td>
                <td>at</td>
            </tr>
            <tr>
                <td>1,006</td>
                <td>nibh</td>
                <td>elementum</td>
                <td>imperdiet</td>
                <td>Duis</td>
            </tr>
            <tr>
                <td>1,007</td>
                <td>sagittis</td>
                <td>ipsum</td>
                <td>Praesent</td>
                <td>mauris</td>
            </tr>
            <tr>
                <td>1,008</td>
                <td>Fusce</td>
                <td>nec</td>
                <td>tellus</td>
                <td>sed</td>
            </tr>
            <tr>
                <td>1,009</td>
                <td>augue</td>
                <td>semper</td>
                <td>porta</td>
                <td>Mauris</td>
            </tr>
            <tr>
                <td>1,010</td>
                <td>massa</td>
                <td>Vestibulum</td>
                <td>lacinia</td>
                <td>arcu</td>
            </tr>
            <tr>
                <td>1,011</td>
                <td>eget</td>
                <td>nulla</td>
                <td>Class</td>
                <td>aptent</td>
            </tr>
            <tr>
                <td>1,012</td>
                <td>taciti</td>
                <td>sociosqu</td>
                <td>ad</td>
                <td>litora</td>
            </tr>
            <tr>
                <td>1,013</td>
                <td>torquent</td>
                <td>per</td>
                <td>conubia</td>
                <td>nostra</td>
            </tr>
            <tr>
                <td>1,014</td>
                <td>per</td>
                <td>inceptos</td>
                <td>himenaeos</td>
                <td>Curabitur</td>
            </tr>
            <tr>
                <td>1,015</td>
                <td>sodales</td>
                <td>ligula</td>
                <td>in</td>
                <td>libero</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
// 5. Edit Profile functionality (placeholder)
// If user wishes to edit details, provide a form to update name, password, etc.
// ...

// 6. Log Out option
echo "<a href='logout.php'>Log Out</a>";

// 7. Include the footer
include 'include/header.php';
?>

