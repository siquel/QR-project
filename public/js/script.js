$(function() {
    $('#header_open').on('click', function() {
        $('#header').toggleClass('open');
    });

    $('#side_open').on('click', function() {
        $('#sub_menu').toggleClass('sub_open');
    });

    var cal = $('#calendar').fullCalendar({
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

    var file;
    $.getJSON('api/events.php', function(data) {
        file = data;
        cal.fullCalendar('addEventSource', data);
    });
});