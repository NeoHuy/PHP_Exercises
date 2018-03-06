<div id="id01" class="modal">
    <form class="modal-content animate" id="modal-form" method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="imgcontainer">
        <h3>Sign Up Form</h3>
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

        <div class="container">
            <label for="email"><b>Email</b></label>
            <span><?php echo $emailErr; ?></span>
            <input type="text" placeholder="Enter Email" name="email">

            <label for="psw"><b>Password</b></label>
            <span><?php echo $pswErr; ?></span>
            <input type="password" class="psw" placeholder="Enter Password" name="psw">

            <label for="birth"><b>Date of birth</b></label>
            <span><?php echo $birthErr; ?></span>
            <input type="text" class="birth" name="birth" id="datepicker">
            
            <label for="phone"><b>Phone number</b></label>
            <span><?php echo $phoneErr; ?></span>
            <input type="text" id="phone" name="phone">

            <button type="submit" name="submit">Register</button>
        </div>
        
    </form>
</div>