$(function() {
    $( "#datepicker" ).datepicker({ minDate: -365, maxDate: "+0M",
        showOn: "button",
        dateFormat: 'dd-mm-yy',
        showButtonPanel: true,
        buttonText: "Select date",
        inline: true

    });
});