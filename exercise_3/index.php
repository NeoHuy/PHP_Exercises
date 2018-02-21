<!DOCTYPE HTML>
<HTML>
<head>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h2>Register Form</h2>
    <div id="id01" class="modal">
        <form class="modal-content animate" method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display = 'none'"
                class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="birth"><b>Birthday</b></label>
                <input type="text" name="birth">
                
                <label for="phone"><b>Phone</b></label>
                <input type="text" name="phone">

                <input type="submit" name="submit" value="Register">
            </div>
        </form>
    </div>
    <?php
        if(!isset($_COOKIE["email"])) {
    ?>
            <script>document.getElementById("id01").style.display = 'block';</script>
    <?php
        }
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h1>True</h1>";
            $cookieTime = time() +  86400 * 30; // 30 days
            setcookie("email", testInput($_POST["email"]), $cookieTime, '/');
            setcookie('psw', testInput($_POST['psw']), $cookieTime, '/');
            setcookie('birth', testInput($_POST['birth']), $cookieTime, '/');
            setcookie('phone', testInput($_POST['phone']), $cookieTime, '/');
            echo '<h1>' . $_COOKIE['email'] . '</h1>';
        } else {
            echo "<h1>False</h1>";
        }
    ?>  
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if(event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
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