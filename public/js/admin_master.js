$.get('home', function(data) {
    $('#padd').html(data);
});

var elem;
$(document).ready(function() {
    $('#home').click(function() {
        if(elem) {
            elem.removeClass('active');
        }
        elem = $(this);
        elem.addClass('active');
        $.get('home', function(data) {
            $('#padd').html(data);
        });
    });
    
    $('#add_stud').click(function() {
        if(elem) {
            elem.removeClass('active');
        }
        elem = $(this);
        elem.addClass('active');
        $.get('add_stud', function(data) {
            $('#padd').html(data);
        });
    });
    
    $('#edit_stud').click(function() {
        if(elem) {
            elem.removeClass('active');
        }
        elem = $(this);
        elem.addClass('active');
        $.get('edit_stud', function(data) {
            $('#padd').html(data);
        });
    });
    
    $('#del_stud').click(function() {
        if(elem) {
            elem.removeClass('active');
        }
        elem = $(this);
        elem.addClass('active');
        $.get('del_stud', function(data) {
            $('#padd').html(data);
        });
    });

    $('#add_co').click(function() {
        if(elem) {
            elem.removeClass('active');
        }
        elem = $(this);
        elem.addClass('active');
        $.get('add_co', function(data) {
            $('#padd').html(data);
        });
    });
    
    $('#edit_co').click(function() {
        if(elem) {
            elem.removeClass('active');
        }
        elem = $(this);
        elem.addClass('active');
        $.get('edit_co', function(data) {
            $('#padd').html(data);
        });
    });
    
    $('#del_co').click(function() {
        if(elem) {
            elem.removeClass('active');
        }
        elem = $(this);
        elem.addClass('active');
        $.get('del_co', function(data) {
            $('#padd').html(data);
        });
    });
    
    $('#add_facu').click(function() {
        if(elem) {
            elem.removeClass('active');
        }
        elem = $(this);
        elem.addClass('active');
        $.get('add_facu', function(data) {
            $('#padd').html(data);
        });
    });
    
    $('#edit_facu').click(function() {
        if(elem) {
            elem.removeClass('active');
        }
        elem = $(this);
        elem.addClass('active');
        $.get('edit_facu', function(data) {
            $('#padd').html(data);
        });
    });

    $('#del_facu').click(function() {
        if(elem) {
            elem.removeClass('active');
        }
        elem = $(this);
        elem.addClass('active');
        $.get('del_facu', function(data) {
            $('#padd').html(data);
        });
    });
});

$('.button-collapse').sideNav();
$('a#toggle_search').click(function() {
    var search = $('div#search');
    search.is(':visible') ? search.slideUp() : search.slideDown(function()
    {
        search.find('input').focus();
    });
    return false;
});

$('#view_stud').click(function() {
    if(elem) {
        elem.removeClass('active');
    }
    elem = $(this);
    elem.addClass('active');
    $.get('view_stud', function(data) {
        $('#padd').html(data);
    });
});

$('#view_facu').click(function() {
    if(elem) {
        elem.removeClass('active');
    }
    elem = $(this);
    elem.addClass('active');
    $.get('view_facu', function(data) {
        $('#padd').html(data);
    });
});

$('#view_co').click(function() {
    if(elem) {
        elem.removeClass('active');
    }
    elem = $(this);
    elem.addClass('active');
    $.get('view_co', function(data) {
        $('#padd').html(data);
    });
});