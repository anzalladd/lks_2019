$(document).ready(function(){       
    var scroll_pos = 0;
    $(document).scroll(function() { 
        scroll_pos = $(this).scrollTop();
        if(scroll_pos > 500 && scroll_pos < 7220) {
            $(".nav").addClass('changeNavbar');
        } 
        else {
            $(".nav").removeClass('changeNavbar');
        }
    });
});

$(function(){
    var path = window.location.href;
    $('.nav .nav-right a').each(function(){
        if (this.href === path) {
            $(this).addClass('is-active');
        }
    })
})
