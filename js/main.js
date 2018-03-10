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

$('div.search_container ul li a').click(function(evt)
{
    evt.preventDefault();
    $('div.search_container ul li a').removeClass('selected');
    $(this).addClass('selected');
    $('input[name=q]').attr('placeholder', $(this).attr('data-placeholder'));
    $('input[name=q] + button').html($(this).attr('data-button'));
    $('input[name=q] + button').width($(this).attr('data-button-width'));
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        $('input[name=q]').width($(window).width() - 80);
    } else {
        $('input[name=q]').width($(this).attr('data-search-width'));
    }
});