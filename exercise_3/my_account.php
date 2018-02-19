<!DOCTYPE HTML>
<HTML>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device_width, initial-scale=1">
</head>
<body>
    <div class="container">
        <div class='container_title'><h1>User infomation</h1></div>
        <div class='info'>
            <label for='email'>Email</label>
            <span><?php echo $_POST['email']; ?></span>
            <br/>

            <label for='psw'>Password</label>
            <span><?php echo $_POST['password']; ?></span>
            <br/>

            <label for='birth'>Birthday</label>
            <span><?php echo $_POST['birthday']; ?></span>
            <br/>

            <label for='phone'>Phone</label>
            <span><?php echo $_POST['phone']; ?></span>
            
        </div>
    </div>
</body>
</HTML>