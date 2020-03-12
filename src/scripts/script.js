$( function() {
    $( "#calculator__date" ).datepicker();
    $( "#summ-scrollbar" ).slider({
        animate: "fast",
        min: 1000,
        max: 3000000,
        value: 10000,
        step: 1000,
        range: "min",
        slide: function (event, ui) {
            $( "#calculator__summ" ).val(ui.value);
        }
    });
    $( "#add-summ-scrollbar" ).slider({
        animate: "fast",
        min: 1000,
        max: 3000000,
        value: 10000,
        step: 1000,
        range: "min",
        slide: function (event, ui) {
            $( "#calculator__summ-add" ).val(ui.value);
        }
    });
} );

$(document).focusout(function() {
    $( "#summ-scrollbar" ).slider("value", $("#calculator__summ").val());
    $( "#add-summ-scrollbar" ).slider("value", $("#calculator__summ-add").val());
});