$(function() {
    $('#header_open').on('click', function() {
        $('#header').toggleClass('open');
    });

    $('#side_open').on('click', function() {
        $('#sub_menu').toggleClass('sub_open');
    });

    $('#calendar').fullCalendar({
        buttonText: {
            prev: '&#210;',
            next: '&#213;'
        },
        header: {
            left: 'prev',
            center: 'title',
            right: 'next'
        },
        firstDay: 1 // monday
    });
});