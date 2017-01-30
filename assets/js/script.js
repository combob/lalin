(function($) {
  $.fn.menumaker = function(options) {      
      var cssmenu = $(this), settings = $.extend({
        title: "",
        format: "dropdown",
        sticky: false
      }, options);
      return this.each(function() {
        cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
        $(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) {
            mainmenu.slideUp( "slow" ).removeClass('open');
          }
          else {
            mainmenu.slideDown( "slow" ).addClass('open');
          }
        });
        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');
        if (settings.sticky === true) cssmenu.css('position', 'fixed');
        resizeFix = function() {
          if ($( window ).width() > 768) {
            cssmenu.find('ul').show();
          }
          if ($(window).width() <= 768) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);
      });
  };
})(jQuery);

(function($){
$(document).ready(function(){

$("#cssmenu").menumaker({
   title: "",
   format: "multitoggle"
});

});
})(jQuery);
