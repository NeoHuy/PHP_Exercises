<?php
    require_once('form_handle.php');
?>

<!DOCTYPE HTML>
<HTML>
<head>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta charset="UTF-8">
    <title>Register</title>
    <?php include('include_css.php'); ?>
</head>
<body>
    
    <h2>Register Form</h2>
    <?php include('register_form.php'); ?>
    <?php include('include_js.php'); ?>
    <script>document.getElementById("id01").style.display = 'block';</script>
    <!-- <?php
        // if(!isset($_COOKIE["email"])) {
    ?>
            <script>document.getElementById("id01").style.display = 'block';</script>
    <?php
        // }
    ?> -->
</body>
</HTML>