<!DOCTYPE HTML>
<?php 
    $cookieTime = time() + 10; // 30 days
?>
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

    <?php
        if(!isset($_COOKIE["email"])) {
    ?>
            <script>document.getElementById("id01").style.display = 'block';</script>
    <?php
        }
    ?>
</body>
</HTML>
<?php
    function testInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>