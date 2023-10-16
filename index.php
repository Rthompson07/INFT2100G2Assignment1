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


<h1 class="index_h1">Welcome to our page!</h1>
<body>
<p class="index_p1">On this assignment, we are collecting user data and storing that same data into a
database.</p>
<hr/>

<!-- Login in Sign Up Buttons-->

<div>
    <a href="sign-in.php" class="btn btn-primary">Sign-In Here</a>
    <a href="sign-up.php" class="btn btn-primary">Sign-Up Here</a>
</div>

</body>
</html>

<!-- ============================= Start of Footer =============================
<?php
include 'include/footer.php';
?>
