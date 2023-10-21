<?php


// 1. Include the header
include_once 'include/header.php';



// 2. Check user authentication
//session_start();
if (!isset($_SESSION['email_address'])) {
    // Not authenticated, redirect to login
    header("Location: sign-in.php");
    exit;
}

$users = getAllUsers();
// 3. Fetch user-specific data (placeholder, requires proper implementation)
// $email_address = $_SESSION['email_address'];
// Fetch user details based on email address from the database
// ...


echo "Welcome! " . $_SESSION['first_name']; // Replace [User Name] with actual name from database

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
                <th>ID</th>
                <th>Email Address</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Extension</th>
                <th>User Type</th>
                <th>Time Created</th>

                <tbody>
                <?php
                foreach ($users as $user) {
                    echo "<td>" . $user['id'] . "</td>";
                    echo "<td>" . $user['email_address'] . "</td>";
                    echo "<td>" . $user['first_name'] . "</td>";
                    echo "<td>" . $user['last_name'] . "</td>";
                    echo "<td>" . $user['phone_extension'] . "</td>";
                    echo "<td>" . $user['user_type'] . "</td>";
                    echo "<td>" . $user['created_time'] . "</td>";
                    echo "</tr>";
                }
                ?>
        </table>
    </div>
</div>

<?php
// 5. Edit Profile functionality (placeholder)
// If user wishes to edit details, provide a form to update name, password, etc.
// ...


// 7. Include the footer
include 'include/footer.php'
?>

