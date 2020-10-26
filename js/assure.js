$("document").ready(function() {
// Hamburger Animations
    $('.header-menu').on('click touch', function(event) {
        $('.menu-top').toggleClass('menu-top-click');
        $('.menu-middle').toggleClass('menu-middle-click');
        $('.menu-bottom').toggleClass('menu-bottom-click');
      event.preventDefault;
    })
// Has Scrolled and not at top
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 159) {
        $("#header.header").addClass("header-fixed");
      } else {
        $("#header.header").removeClass("header-fixed");
      }
    }); 

});