jQuery(document).ready(function($){
   $('.schedule').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInUp',
      offset: 200
    });
   $('#about').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInUp',
      offset: 200
    });
   $('#about p').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInUp',
      offset: 200
    });
   $('.map').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInLeft',
      offset: 200
    });
   $('#connect').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInRight',
      offset: 200
    });
   $('.banner h1').delay(500).animate({
    opacity: 1 }, 1000);
   $('#arrow').delay(2000).animate({
      opacity: 1
    });
});