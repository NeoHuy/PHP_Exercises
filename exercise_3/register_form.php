<div id="id01" class="modal">
    <form class="modal-content animate" method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display = 'none'"
            class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <label for="email"><b>Email (required)</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password (required)</b></label>
            <input type="password" minLength="6" placeholder="Enter Password" name="psw" required>

            <label for="birth"><b>Date of birth (required)</b></label>
            <input type="text" name="birth" id="datepicker" required>
            <span><?php echo $birthErr; ?></span>
            
            <label for="phone"><b>Phone number (optional)</b></label>
            <input type="text" id="phone" name="phone" maxLength=12>

            <button type="submit" name="submit">Register</button>
        </div>
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            //Validate email
            if(empty($_POST['email'])) {
                $emailErr = "Email is required!";
            } else {
                $email = testInput($_POST['email']);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if(empty($_POST['psw'])) {
                $pswErr = "Password is required!";
            } else {
                $psw = testInput($_POST['psw']);
                if(count($psw) < 6) {
                    $pswErr = "Password is must more than 5 chars.";
                }
            }

            if(empty($_POST['birth'])) {
                $birthErr = "Birthdate is required!";
            } else {
                $birthdate = $_POST['birth'];
                if(!validateAge($birthdate)) {
                    $birthErr = "You must be 18 or older";
                }
            }
            
            setcookie('email', testInput($_POST['email']), $cookieTime, '/');
            setcookie('psw', testInput($_POST['psw']), $cookieTime, '/');
            setcookie('birth', testInput($_POST['birth']), $cookieTime, '/');
            setcookie('phone', testInput($_POST['phone']), $cookieTime, '/');
        
            //redirect to my_account.php after submit
            //header('Location: my_account.php');
        }

        function validateAge($birthdate, $age = 18) {
            if(is_string($birthdate)) {
                $birthdate = strtotime($birthdate);
            }
            if(time() - $birthdate < $age * 31536000) {
                return false;
            }
            return true;
        }
    ?>
</div>