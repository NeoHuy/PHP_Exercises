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
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = testInput($_POST['email']);
            $psw = testInput($_POST['psw']);
            $birthdate = testInput($_POST['birth']);
            $phone = testInput($_POST['phone']);
            $userArray = array(
                'email' => $email,
                'psw' => $psw,
                'birthdate' => $birthdate,
                'phone' => $phone
            );

            //Validate email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            } 


            
            setcookie('email', testInput($_POST['email']), $cookieTime, '/');
            setcookie('psw', testInput($_POST['psw']), $cookieTime, '/');
            setcookie('birth', testInput($_POST['birth']), $cookieTime, '/');
            setcookie('phone', testInput($_POST['phone']), $cookieTime, '/');
            
            //redirect to my_account.php after submit
            header('Location: my_account.php');
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