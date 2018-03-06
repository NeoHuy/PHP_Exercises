<?php 
$email = $psw = $birth = $phone = '';
$emailErr = $pswErr = $birthErr = $phoneErr = '';
$cookieTime = time() + 10;



if($_SERVER["REQUEST_METHOD"] == "POST") {

    //Validate email
    if(empty($_POST['email'])) {
        $emailErr = "Please enter a email";
    } else {
        $email = testInput($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Please enter right email format";
        }
    }

    if(empty($_POST['psw'])) {
        $pswErr = "Password is required!";
    } else {
        $psw = testInput($_POST['psw']);
        $hasUppercase = preg_match('/[A-Z]/', $psw);
        $hasNumber = preg_match('/[0-9]/', $psw);
        $hasSpecial = preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $psw);
        if(strlen($psw) < 8 || !$hasUppercase || !$hasNumber || !$hasSpecial) {
            $pswErr = "Password is must more than 8 chars and contain at least 1 number, uppercase and special character.";
        }
    }

    if(empty($_POST['birth'])) {
        $birthErr = "Birthdate is required!";
    } else {
        $birthdate = testInput($_POST['birth']);
        if(!validateAge($birthdate)) {
            $birthErr = "You must be 18 or older";
        }
    }

    if(!empty($_POST['phone'])) {
        $phone = testInput($_POST['phone']);
        if(strlen($phone) > 12) {
            $phoneErr = "Phone number must be 12 or smaller";
        }
    }

    if(!$emailErr && !$pswErr && !$birthErr && !$phoneErr) {
        $info = array("email" => $email, "password" => $psw, "birthdate" => $birthdate, "phone" => $phone);
        $info = json_encode($info);
        //setcookie(" info", json_encode($info), $cookieTime, '/');
        setcookie("info", $info, $cookieTime, "/");
        //redirect to my_account.php after validate
        
        if(strpos($_SERVER['PHP_SELF'], 'index')) {
            header('Location: my_account.php');
            exit();
        } else {
            header('Refresh: 0');
        }
    }
}

function validateAge($birthdate, $age = 18) {
    $birthdate = strtotime($birthdate);
    if(time() - $birthdate < $age * 31536000) {
        return false;
    }
    return true;
}

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>