<!DOCTYPE HTML>
<HTML>
<head>
    <meta charset="utf8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="style.css" />
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
                    <form>
                        <label>Full Name</label>
                        <input type="text" />
                        <br />

                        <label>Email Address</label>
                        <input type="email" />
                        <br />

                        <label>Password</label>
                        <input type="password" />
                        <br />

                        <div class="checkbox">
                            <input id="send_updates" type="checkbox" />
                            <label for="send_updates">Send me occasional email updates</label>
                        </div>

                        <div class="action_btns">
                            <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='jquery.leanModal.min.js'></script>
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
