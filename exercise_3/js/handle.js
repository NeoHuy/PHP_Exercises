$(document).ready(function() {
    // jQuery validator
    $('.modal_form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            birth: {
                required: true
            },
            phone: {
                maxlength: 12
            }
        },
        message: {
            email: {
                required: "Please enter a email address",
                email: "You must be enter right email format"
            },
            birth: {
                required: "Please enter a birthdate"
            },
            phone: {
                maxlength: "You can't enter more than 12 characters"
            }
        }
    });

    jQuery.validator.addMethod("psw", function(value, element) {
        return result = value.length >= 6 && /\d/.test(value) && /[a-zA-Z]/.test(value);
        if(!result) {
            element.value="";
            var validator = this;
        }
        //return result;
    }, "Your password must be at least 6 characters long");

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