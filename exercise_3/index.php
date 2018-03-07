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
    
    
    <?php
    if(!isset($_COOKIE['info'])) {
    ?>
        <h2>Register Form</h2>
        <?php include('register_form.php'); ?>
        <?php include('include_js.php'); ?>
        <script>showRegisterForm();</script>
    <?php
    } else {
    ?>
        You signed up! Go to <a href='my_account.php'>account page</a>
    <?php
    }
    ?>
</body>
</HTML>