$().ready(function() {
    // jQuery validator
    $('.modal_form').validate({
        rules: {
            email: {
                required: true,
            },

        }
    });

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