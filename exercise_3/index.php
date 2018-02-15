<!DOCTYPE HTML>
<HTML>
<head>
    <meta charset="utf8" />
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
    <div class="container">
        <h1>Popup register form</h1>
        <a id="modal_trigger" href="#modal" class="btn">Click here to signup</a>

        <div id="modal" class="popupContainer" style="display:none;">
            <header class="popupHeader">
                <span class="header_title">Register</span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
            </header>
            
            <section class="popupBody">
                <!-- Register form -->
                <div class="user_register">
                    <form>
                        <label>Email</label><input type="text" />
                        <br/>

                        <label>Birthday</label><input type="text" />
                        <br/>

                        <label>Phone</label><input type="text" />
                        <br/>

                        <label>Password</label><input type="password" />
                        <br/>

                        <div class="action_btn">
                            <a href="#" class="btn btn-red">Register</a>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    
    <script type="type/javascript" src="js/jquery.leanModal.min.js"></script>
    <script type="type/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $("#modal_trigger").leanModal({
            top:100,
            overlay: 0.6,
            closeButton: ".modal_close"
        });
        
        $("#user_register").show();

    </script>
</body>
</HTML>