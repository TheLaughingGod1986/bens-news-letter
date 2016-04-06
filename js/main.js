$(function() {
    $( "#datepicker" ).datepicker({ minDate: -365, maxDate: "+0M",
        showOn: "button",
        buttonImage: "images/calendar.gif",
        buttonText: "Select date"
    });
});

