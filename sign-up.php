<?php
//start session
session_start();

//include header and libraries
include 'include/headerlocked.php';
require_once 'lib/db_php.php';
require_once 'lib/functions.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // sanitize incoming parameters
    $email_address = filter_var(trim($_POST['email_address']), FILTER_SANITIZE_EMAIL);
    $first_name = sanitize($_POST['first_name']);
    $last_name = sanitize($_POST['last_name']);
    $plainPassword = trim($_POST['password']);

    // validation
    if(!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
        // store message in session
        setFlashMessage("Invalid email provided");
    }
    else{
        // hash password
        $password = hash_password($plainPassword);

        // register user
        registerUser($email_address, $first_name, $last_name, $password, '', '');

    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5"

<div class="row">
    <div class="col-md-6 offset-md-3">
        <h2>INFT2100 - User Registration</h2>

        <!--Display flash message -->
        <?php
        if(hasFlashMessage()){
            echo '<div class="alert alert-danger" role="alert">' . getFlashMessage() . '</div>';
            removeFlashMessage(); //clear message
        }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="bg-light p-5 rounded">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

<!-- ============================= Start of Footer ============================= -->
<?php
include 'include/footer.php';
?>

