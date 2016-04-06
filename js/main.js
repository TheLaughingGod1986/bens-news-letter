$(function() {
    $( "#datepicker" ).datepicker({
        minDate: -365,
        maxDate: "+0M",
        dateFormat: 'dd-mm-yy',
        showOtherMonths: true,
        changeMonth: true,
        selectOtherMonths: true,
        showOtherYear: true,
        changeYear: true,
        selectOtherYear: true,
        required: true,
        showOn: "focus"
    });
    $('#datepicker').keyup(function () {
        $('#datepicker').val('');
        alert('Please select date from Calendar');
    });
});
