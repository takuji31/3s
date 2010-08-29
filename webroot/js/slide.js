$(document).ready(function(){
    prettyPrint();
    $(document).bind('keydown','right',function(){
        window.location  = $('.next').eq(0).attr('href');

        return false;
    });
    $(document).bind('keydown','left',function(){
        window.location  = $('.prev').eq(0).attr('href');
        return false;
    });
});

