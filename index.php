<?php
session_start();
include 'include/header.php';

?>
<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="./assets/styles.css" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<h1 class="main-heading">Welcome to our website!</h1>

<p>This is the main page</p>


<!-- Login in Sign Up Buttons-->

    <a href="sign-in.php" id="sign-in-btn" class="btn btn-primary">Sign-In Here</a>
    <a href="sign-up.php" id="sign-up-btn" class="btn btn-primary">Sign-Up Here</a>



</body>

</html>


<!-- ============================= Start of Footer =============================
<?php
include 'include/footer.php';
?>
