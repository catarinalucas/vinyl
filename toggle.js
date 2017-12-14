/* jQuery */
$(function(){
    $('.menu_admin').on('click',function(){
        console.log("CLIQUEI MY MENU!");
        if ( $('.mymenu').css('visibility') === 'hidden' ) {
            $('.mymenu').css('visibility', 'visible');
        }
        else {
            $('.mymenu').css('visibility', 'hidden');
        }
    });
});
