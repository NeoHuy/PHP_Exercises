<!DOCTYPE HTML>
<HTML>
<head>
    <meta name="viewport" content="width=device-width, intitial-scale=1">
    <meta charset="utf-8">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='css/style.css'>
</head>
<body>
    <div class='container'>
        <h1>Home Page</h1>
        
        <div id='modal' class='popupContainer' style="display:none;">
            <header class="popupHeader">
                <span class="header_title">Register</span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
            </header>

            <section class="popupBody">
                <div class="user_register">
                    <form action="my_account.php" method="post">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="Enter email address" required>
                        <br/>

                        <label>Password</label>
                        <input type="password" name="psw" placeholder="Enter the password" required>
                        <br/>

                        <label>Birthday</label>
                        <input type="text" name="birth">
                        <br/>

                        <label>Phone number</label>
                        <input type="text" name="phone">

                        <div class="action_btns">
                            <div class="one_half"><a href="#" class="btn cancel_btn">Cancel</a></div>
                            <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <script>
        $('.container').leanModal({

        })
    </script>
</body>
</HTML>