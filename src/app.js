(function($) {
  $(document).ready(function(){    
    $('h1.theme-text').each(function() {
      var text = $(this).text().trim().split(' ');
      for( var i = 0, len = text.length; i < len; i++ ) {
        var theLastWord = ( i === len - 1 ) ? true : false;
        
        if ( theLastWord ) {
          text[i] = '<span class="word-last word word-' + i + '">' + text[i] + '</span>';
        } else {
          text[i] = '<span class="word word-' + i + '">' + text[i] + '</span>';
        }
      }
      $(this).html(text.join(' '));
    });
  });

  $(window).load(function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({
      'overflow': 'visible'
    });
  })
})(jQuery);


