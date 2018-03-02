<!DOCTYPE HTML>
<HTML>
<head>
    <meta charset="utf8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="container">
        <h1>Popup Register with jQuery</h1>
        <a id="modal_trigger" href="#modal"
        class="btn">Click here to signup</a>

        <div id="modal" class="popupContainer" style="display:none;">
            <header class="popupHeader">
                <span class="header_title">Register</span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
            </header>

            <section class="popupBody">
                <div class="user_register">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="register_form">
                        <label>Email Address</label>
                        <input type="text" name="email" />
                        <span><?php echo $emailErr; ?></span>
                        <br />

                        <label>Password</label>
                        <input type="password" name="psw" />
                        <br />

                        <label>Date of birth</label>
                        <input type="text" name="birthdate" />
                        <br />

                        <label>Phone number</label>
                        <input type="text" name="phone" />
                        <br />

                        <div class="action_btns">
                            <div class="one_half last"><button type="submit" class="btn btn_red">Register</button></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='js/jquery.leanModal.min.js'></script>
    <script>
        $('#modal_trigger').leanModal({
            top: 100,
            overlay: 0.6,
            closeButton: ".modal_close"
        });

        $(".user_register").show();
    </script>

    
</body>
</HTML>


