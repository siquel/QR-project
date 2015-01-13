$(function() {
    $('#header_open').on('click', function() {
        $('#header').toggleClass('open');
    });

    $('#side_open').on('click', function() {
        $('#sub_menu').toggleClass('sub_open');
    });


    if ($('html').attr('id') == 'events') {
        var file = [];
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
            firstDay: 1, // monday
            eventDataTransform: function(data) {
                return data;
            },
            events: {
                    url: 'api/events.php',
                    type: 'GET',
                    dataType: "json",
                    complete: function (data, status, wtf) {
                        file = cal.fullCalendar('clientEvents');
                        $().getMenu();
                        $().windowCheck();
                    }
            }
            
        });

        $.fn.getMenu = function() {
            $('#sub_menu a').remove();

            var curMonth = cal.fullCalendar('getDate').getMonth()+1;
            var curYear = cal.fullCalendar('getDate').getFullYear();
            var monthStr = curMonth.toString().length == 2 ? curMonth : '0'+curMonth;
            var found = $.grep(file, function(obj) {
                return obj.menu === ""+curMonth+curYear+"";
            });

            found.sort(function(a, b) {
                return a.start.getDate() - b.start.getDate();
            });
            $.each(found, function(i, obj) {
                var date = obj.start.getDate();
                var dateStr = date.toString().length == 2 ? date : '0'+date;
                $('#sub_menu').append('<a href="'+obj.url+'"><strong>'+obj.title+' '+dateStr+'-'+monthStr+'-'+curYear+'</strong>'+obj.description+'</a>');
            });
        }

        $.fn.windowCheck = function() {
            var ww = $(window).width();
            if (ww > 650) {
                cal.fullCalendar('changeView', 'month');
            } else if (ww < 650 && ww > 400) {
                cal.fullCalendar('changeView', 'basicWeek');
            } else {
                cal.fullCalendar('changeView', 'basicDay');
            }
        }



        $(window).on('resize', function() {
            $().windowCheck();
        });

        $('.fc-button-prev, .fc-button-next').on('click', function() {
            $().getMenu();
        });
    }
});