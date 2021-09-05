
$(document).ready(function () {

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    // Propiedades para el componente de datpicker
    $.fn.datepicker.defaults.format = 'yyyy-mm-dd';
    $.fn.datepicker.defaults.language = 'es';
    $.fn.datepicker.defaults.todayHighlight = true;

});
