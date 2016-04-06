$(function() {
    $( "#datepicker" ).datepicker({
        showOn: "button",
        buttonImage: "img/Servare.png",
        buttonImageOnly: true,
        buttonText: "Select date",
        minDate: -365,
        maxDate: "+0M"
    });
});

