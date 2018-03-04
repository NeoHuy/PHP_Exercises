<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script>
$(document).ready(function() {
    // jQuery validator
    // $('#modal-form').validate({
    //     rules: {
    //         email: {
    //             required: true,
    //             email: true
    //         },
    //         birth: {
    //             required: true
    //         },
    //         psw: {
    //             required: true,
    //             minlength: 8
    //         },
    //         phone: {
    //             maxlength: 12
    //         }
    //     }
    // });

    // jQuery.validator.addMethod("psw", function(value, element) {
    //     var specialChars = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
    //         //console.log("psw: " + element.value);
    //     var result = /*value.length >= 6 &&*/ /[0-9]/.test(value) && /[A-Z]/.test(value) && specialChars.test(value);
    //     return result;
    // }, "Your password must be contain at least one number, uppercase letter and special character");

    // jQuery.validator.addMethod("birth", function(value, element) {
    //     var birthTemp = element.value.split("-");
    //     var dateOfBirthInMiliseconds = Date.parse(birthTemp[1] + " " + birthTemp[0] + " " + birthTemp[2]);
    //     var age = Math.floor((Date.now() - dateOfBirthInMiliseconds) / 31536000000);
    //     console.log("AGE: " + age);
    //     var message = "";
    //     if(age < 18) {
    //        is18years = false;
    //     } else {
    //         is18years = true;
    //     }
    //     return is18years;
    // }, "You must be at least 18 or older");

    //Cant type anything except number
    $("#phone").mask("000000000000");
    $("#datepicker").mask("00-00-0000");
});

// Add datepicker to birthday field
$('#datepicker').datepicker({
    dateFormat: 'dd-mm-yy'
});

// Get the modal
var modal = document.getElementById('id01');
</script>