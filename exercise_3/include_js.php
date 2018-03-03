<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script>
$(document).ready(function() {
    // jQuery validator
    $('#modal-form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            birth: {
                required: true
            },
            psw: {
                required: true,
                minlength: 8
            },
            phone: {
                maxlength: 12
            }
        }
    });

    jQuery.validator.addMethod("psw", function(value, element) {
        var specialChars = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
            //console.log("psw: " + element.value);
        var result = /*value.length >= 6 &&*/ /\d/.test(value) && /[A-Z]/.test(value) && specialChars.test(value);
        return result;
    }, "Your password must be contain at least one number, uppercase letter and special character");

    jQuery.validator.addMethod("birth", function(value, element) {
        var date = Date.now();
        console.log("Date: " + date);
        console.log("birthdate: " + element.value);
        var birthTemp = element.value.split("-");
        var birthdate = birthTemp[0] + " " + birthTemp[1] + " " + birthTemp[2];
        birthdate = birthdate.parse();
        console.log("Birthdate after converted: " + birthdate.parse());
    }, "");

    //Cant type anything except number
    $("#phone").mask("0000-00000000");
    $("#datepicker").mask("00-00-0000");
});

// Add datepicker to birthday field
$('#datepicker').datepicker({
    dateFormat: 'dd-mm-yy'
});

// Get the modal
var modal = document.getElementById('id01');
</script>