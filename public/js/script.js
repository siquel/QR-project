$(function() {
    $('#header_open').on('click', function() {
        $('#header').toggleClass('open');
    });

    $('#side_open').on('click', function() {
        $('#sub_menu').toggleClass('sub_open');
    });

    $('#calendar').fullCalendar({});
});