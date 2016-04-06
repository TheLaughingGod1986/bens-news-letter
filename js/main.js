$(function() {
    $( "#datepicker" ).datepicker({ minDate: -365, maxDate: "+0M",
        showOn: "button",
        buttonImage: "img/calendar.gif",
        buttonImageOnly: true,
        buttonText: "Select date"
    });
});

