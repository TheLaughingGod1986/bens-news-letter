$(function() {
    $( "#datepicker" ).datepicker({ minDate: -365, maxDate: "+0M",
        showOn: "button",
        dateFormat: 'dd-mm-yy',
        //buttonImage: "img/calendar.gif",
        showButtonPanel: true,
        //buttonImageOnly: true,
        buttonText: "Select date",
        inline: true

    });
});

//ko.bindingHandlers.datepicker = {
//    init: function(element, valueAccessor, allBindingsAccessor) {
//
//        var options = allBindingsAccessor().datepickerOptions || {};
//        $(element).datepicker(options);
//        ko.utils.registerEventHandler(element, "change", function() {
//            var observable = valueAccessor();
//            observable($(element).datepicker("getDate"));
//        });
//        ko.utils.domNodeDisposal.addDisposeCallback(element, function() {
//            $(element).datepicker("destroy");
//        });
//    },
//    update: function(element, valueAccessor) {
//        var value = ko.utils.unwrapObservable(valueAccessor()),
//            current = $(element).datepicker("getDate");
//
//        if (value - current !== 0) {
//            $(element).datepicker("setDate", value);
//        }
//    }
//};
//
//ko.bindingHandlers.datepickerMinDate = {
//    update: function(element, valueAccessor) {
//        var value = ko.utils.unwrapObservable(valueAccessor()),
//            current = $(element).datepicker("option", "minDate", value);
//    }
//};
//
//ko.bindingHandlers.datepickerMaxDate = {
//    update: function(element, valueAccessor) {
//        var value = ko.utils.unwrapObservable(valueAccessor()),
//            current = $(element).datepicker("option", "maxDate", value);
//    }
//};
//
//var viewModel = {
//    date: ko.observable(new Date()),
//
//    minDate: -365,
//    maxDate: "+0M"
//};
//
//ko.applyBindings(viewModel);