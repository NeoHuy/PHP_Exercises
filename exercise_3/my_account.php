<?php
    if(isset($_COOKIE['info'])) {
        $cookie = json_decode($_COOKIE['info']);
    } else {
        require_once('form_handle.php');
    }
?>
<!DOCTYPE HTML>
<HTML>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device_width, initial-scale=1">
    <?php include('include_css.php'); ?>
</head>
<body>
    
    <div class="container">
        <?php 
        if(!$_COOKIE['info']) {
            echo '<h3>You are not signup!</h3>';
            echo '<button type="submit" id="register" onclick="showRegisterForm()">Register</button>';
        } else {
            include('info_table.php');
        }
        ?>
    </div>
    <?php include('register_form.php'); ?>
    <?php include('include_js.php'); ?>
</body>
</HTML>