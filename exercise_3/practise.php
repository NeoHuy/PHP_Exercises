<!DOCTYPE HTML>
<HTML>
    <head>
        <meta name="viewport" content="width=device-width initial-scale=1">
        <meta charset="UTF-8">
        <title>Register Popup</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Register popup form</h1>
        <div id="modal" class="popupContainer" >
            
            <header class="popupHeader">
                <span class="header_title">Register</span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
            </header>

            <section class="popupBody">
                <div class="user_register">
                    <form action="my_account.php" method="post">
                        <label>Email</label>
                        <input type="email" name="email">
                        <br/>

                        <label>Password</label>
                        <input type="password" name="psw">
                        <br/>

                        <label>Birthday</label>
                        <input type="text" name="birthday">
                        <br/>

                        <label>Phone</label>
                        <input type="text" name="phone">
                        <br/>

                        <div class="action_btns">
                            <div class="one_half last">
                                <button class="btn btn_red" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </body>
</HTML>