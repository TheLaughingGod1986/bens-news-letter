$(function() {
    $( "#datepicker" ).datepicker({
        minDate: -365,
        maxDate: "+0M",
        //showOn: "button",
        dateFormat: 'dd-mm-yy',
        //showButtonPanel: true,
        //buttonText: "Calendar",
        //inline: true
        showOtherMonths: true,
        changeYears: true,
        selectOtherYears: true,
        showOtherYears: true,
        changeMonth: true,
        selectOtherMonths: true,
        required: true,
        showOn: "focus",
        numberOfMonths: 1
    });
    $('#datepicker').keyup(function () {
        $('#datepicker').val('');
        alert('Please select date from Calendar');
    });
});
