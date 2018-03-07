$('a.mobile_menu').click(function(evt)
{
    evt.preventDefault();
    if($('div.overlay').hasClass('show')) {
        $('div.overlay').removeClass('show');
        $('ul.mobile_menu').removeClass('show');
    } else {
        $('div.overlay').addClass('show');
        $('ul.mobile_menu').addClass('show');
    }
})

$('a.close, div.overlay').click(function(evt)
{
    evt.preventDefault();
    $('div.overlay').removeClass('show');
    $('ul.mobile_menu').removeClass('show');
})

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    var hammertime = new Hammer(document.querySelector('div.wrapper'));
    hammertime.on('swiperight', function(ev) {
        $('div.overlay').addClass('show');
        $('ul.mobile_menu').addClass('show');
    });
    hammertime.on('swipeleft', function(ev) {
        $('div.overlay').removeClass('show');
        $('ul.mobile_menu').removeClass('show');
    });
}