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

    $.fn.getMenu = function() {
        $('#sub_menu a').remove();

        var curMonth = cal.fullCalendar('getDate').getMonth()+1;
        var curYear = cal.fullCalendar('getDate').getFullYear();

        var found = $.grep(file, function(obj) {
            return obj.menu === ""+curMonth+curYear+"";
        });

        $.each(found, function(i, obj) {
            $('#sub_menu').append('<a href="'+obj.url+'"><strong>'+obj.title+' '+obj.start.getDate()+'-'+curMonth+'-'+curYear+'</strong>'+obj.description+'</a>');
        });
    }

    var file;
    $.getJSON('api/events.php', function(data) {
        file = data;
        cal.fullCalendar('addEventSource', data);
        $().getMenu();
    });

    $('.fc-button-prev, .fc-button-next').on('click', function() {
        $().getMenu();
    });
});