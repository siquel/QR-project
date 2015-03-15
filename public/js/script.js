$(document).ready(function() {
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
            timezone: 'local',
            firstDay: 1, // monday
            eventDataTransform: function(data) {
                return data;
            },
            events: {
                    url: 'api/events',
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
                var m = obj.start.getMonth() + 1;
                var y = obj.start.getFullYear();
                console.log(y);
                return ""+m+y+"" === ""+curMonth+curYear+"";
            });

            found.sort(function(a, b) {
                return a.start.getDate() - b.start.getDate();
            });
            $.each(found, function(i, obj) {
                var date = obj.start.getDate();
                console.log(date);
                var dateStr = date.toString().length == 2 ? date : '0'+date;
                var url = 'event/'+obj.id;
                $('#sub_menu').append('<a href="'+url+'"><strong>'+obj.title+' '+dateStr+'-'+monthStr+'-'+curYear+'</strong>'+obj.description+'</a>');
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
    } else if ($('html').attr('id') == 'question') {
        // hax
        if ($("#results").length) {
            new Dropkick("#results", {
            mobile: true,
            initialize: function() {
                var $input;
                dk = this;
                $input = $('#search');
                console.log($input);
                $input.on("keypress keyup", function(e) {
                    var found = dk.search(this.value, dk.data.settings.search);
                    e.stopPropagation();
                    $('.dk-option', dk.data.elem).remove();

                    if (found.length) {
                        $(found).appendTo(dk.data.elem.lastChild);
                        dk.selectOne(found[0]);
                    } else {
                        $( "<li></li>" ).addClass( "dk-option dk-option-disabled" ).text( "Not Found" ).appendTo( dk.data.elem.lastChild );
                    }
                    console.log("here");
                    found.length && dk.selectOne( found[0] );
                });

                var ul = $('ul#dk0-listbox');
                ul.mouseleave(function() {
                    var li = ul.find('.dk-option-highlight');
                    if (typeof li !== "undefined") {
                        li.removeClass('dk-option-highlight');
                    }
                });
            },
            change: function() {
                //var s = this.data.select;
                //console.log(dk.form);
            }
            });
        }
        
        $("div.form-group").on('click', '.add-more', function(e) {
        $(this).removeClass('add-more').addClass('remove-this btn-danger').text("-");
        var group = $("div.form-group").last();
        group.append('<div class="field">\
                        <input type="text" class="form-control" name="answer[]" />\
                        <button type="button" class="btn add-more remove-me">+</button>\
                        <input type="hidden" name="answer_id[]" value="0" />\
                        </div>');
        });
       $('div.form-group').on('click', '.remove-this', function(e) {
        var deleted = $(this).next().attr('value');
        var container = $(this).parent().parent();
        container.append('<input type="hidden" name="deleted_id[]" value="' + deleted + '" />');
        $(this).parent().remove();
       });
    }

});