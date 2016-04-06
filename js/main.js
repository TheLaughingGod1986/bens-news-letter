$(function() {
    $( "#datepicker" ).datepicker({ minDate: -365, maxDate: "+0M",
        showOn: "button",
        buttonImage: <php?= base_url() ?>"img/calendar.gif",
        buttonImageOnly: true,
        buttonText: "Select date"
    });
});

