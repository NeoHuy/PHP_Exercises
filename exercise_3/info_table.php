<div class='container_title'><h1>User infomation</h1></div>
<div class='info'>
    <label for='email'>Email</label>
    <span><?php echo $cookie->email ? $cookie->email : ''; ?></span>
    <br/>

    <label for='psw'>Password</label>
    <span><?php echo $cookie->password ? $cookie->password : ''; ?></span>
    <br/>

    <label for='birth'>Birthdate</label>
    <span><?php echo $cookie->birthdate ? $cookie->birthdate : ''; ?></span>
    <br/>

    <label for='phone'>Phone</label>
    <span><?php echo $cookie->phone ? $cookie->phone : ''; ?></span>
</div>