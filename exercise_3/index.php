<!DOCTYPE HTML>
<HTML>
<head>
    <meta charset="utf8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css"/>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic" rel="stylesheet" />
    <script type="type/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="type/javascript" src="js\jquery.leanModal.min.js"></script>
</head>
<body>
    <h2>Modal login form</h2>
    
    <button onclick="document.getElementById('id01').style.display = 'block'" style="width:auto;">
        Login</button>
    <div id="id01" class="modal">
        <form class="modal-content animate" method="my_account.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display = 'none'" class="close"
                title="Close Modal">&times;</span>
                <img src="img_avatar2.png" alt="Avatar" class="avatar" />
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required />

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required />

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember" /> Remember me
                </label>
            </div>

            <div class="container" style="background-color: #f1f1f1;">
                <button type="button" onclick="document.getElementById('id01').style.display = 'none'"
                class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
    
    <script>
        //Get the modal
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