/* jQuery */
$(function(){
    $('.signup').on('click',function(){
        console.log("CLIQUEI SIGN UP!");
        if ( $('.popup_signup').css('visibility') === 'hidden' ) {
            $('.popup_signup').css('visibility', 'visible');
            $('.popup_login').css('visibility', 'hidden');
            $('.signup').css('font-weight', '700');
        }
        else if ( $('.popup_signup').css('visibility') === 'visible' ){
            $('.popup_signup').css('visibility', 'hidden');
            $('.signup').css('font-weight', '400');
        }
    });
});

$(function(){
    $('.login').on('click',function(){
        console.log("CLIQUEI LOG IN!");
        if ( $('.popup_login').css('visibility') === 'hidden' ) {
            $('.popup_login').css('visibility', 'visible');
            $('.popup_signup').css('visibility', 'hidden');
            $('.login').css('font-weight', '700');
        }
        else if ( $('.popup_login').css('visibility') === 'visible' ) {
            $('.popup_login').css('visibility', 'hidden');
            $('.login').css('font-weight', '400');
        }
    });
});
