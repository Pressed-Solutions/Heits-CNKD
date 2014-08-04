// load homepage slider
jQuery(window).load(function() {
    jQuery('#slider').nivoSlider();

});

// menu current item colors
jQuery(window).ready(function(){
    if ( jQuery('#sub-nav').length != 0 ) {
        jQuery('#main-nav ul li.current-menu-item a').css('background-color', '#f9f9f9');
    }
});

// auto-resizing textarea
var txt = jQuery('.resizable-textarea .textarea'),
    hiddenDiv = jQuery(document.createElement('div')),
    content = null;

txt.addClass('txtstuff');
hiddenDiv.addClass('hiddendiv common');

jQuery('body').append(hiddenDiv);

txt.on('keyup', function () {

    content = jQuery(this).val();

    content = content.replace(/\n/g, '<br>');
    hiddenDiv.html(content + '<br class="lbr">');

    jQuery(this).css('height', hiddenDiv.height());

});
