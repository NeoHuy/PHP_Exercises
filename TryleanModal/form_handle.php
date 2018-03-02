<?php      
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['email'])) {
        $emailErr = "Please enter email address!";
    } else {
        $email = testInput($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Please enter the valid email address";
        }
        
    }
}

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
?>