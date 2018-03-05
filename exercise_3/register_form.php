<?php 
$email = $psw = $birth = $phone = '';
$emailErr = $pswErr = $birthErr = $phoneErr = '';
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
    
//     setcookie('email', testInput($_POST['email']), $cookieTime, '/');
//     setcookie('psw', testInput($_POST['psw']), $cookieTime, '/');
//     setcookie('birth', testInput($_POST['birth']), $cookieTime, '/');
//     setcookie('phone', testInput($_POST['phone']), $cookieTime, '/');

//     //redirect to my_account.php after submit
//     //header('Location: my_account.php');
    if(!$emailErr || !$pswErr || !$birthErr || !$phoneErr) {

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

<div id="id01" class="modal">
    <form class="modal-content animate" id="modal-form" method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="imgcontainer">
            <h2 class="form-title">Sign Up</h2>
            <span onclick="document.getElementById('id01').style.display = 'none'"
            class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <label for="email"><b>Email</b></label>
            <span><?php echo $emailErr; ?></span>
            <input type="text" placeholder="Enter Email" name="email">

            <label for="psw"><b>Password</b></label>
            <span><?php echo $pswErr; ?></span>
            <input type="password" class="psw" placeholder="Enter Password" name="psw">

            <label for="birth"><b>Date of birth</b></label>
            <span><?php echo $birthErr; ?></span>
            <input type="text" class="birth" name="birth" id="datepicker">
            
            <label for="phone"><b>Phone number</b></label>
            <span><?php echo $phoneErr; ?></span>
            <input type="text" id="phone" name="phone">

            <button type="submit" name="submit">Register</button>
        </div>
        
    </form>
</div>