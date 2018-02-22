<div id="id01" class="modal">
    <form class="modal-content animate" method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display = 'none'"
            class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <label for="email"><b>Email (required)</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password (required)</b></label>
            <input type="password" minLength="6" placeholder="Enter Password" name="psw" required>

            <label for="birth"><b>Date of birth (required)</b></label>
            <input type="text" name="birth" id="datepicker" required>
            
            <label for="phone"><b>Phone (optional)</b></label>
            <input type="text" id="phone" name="phone" maxLength=12 minLength=7>

            <button type="submit" name="submit">Register</button>
        </div>
    </form>
</div>