$(function() {
    $( "#datepicker" ).datepicker({
        minDate: -365,
        maxDate: "+0M",
        showOn: "button",
        dateFormat: 'dd-mm-yy',
        showButtonPanel: true,
        buttonText: "Calendar",
        inline: true
    });
    $('#datepicker').keyup(function () {
        $('#datepicker').val('');
        alert('Please select date from Calendar');
    });
});
