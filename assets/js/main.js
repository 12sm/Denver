/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
      $('.img-container').imgLiquid();
      $('.vid-container').fitVids();
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
      $(window).load(function() {
  $('.top-slider').flexslider({
    animation: "slide",
    });
  });

 // Setup the player to autoplay the next track
        var a = audiojs.createAll({
          trackEnded: function() {
            var next = $('ol li.playing').next();
            if (!next.length) next = $('ol li').first();
            next.addClass('playing').siblings().removeClass('playing');
            audio.load($('a', next).attr('data-src'));
            audio.play();
          }
        });
        
        // Load in the first track
        var audio = a[0];
            first = $('ol a').attr('data-src');
        $('ol li').first().addClass('playing');
        audio.load(first);
        var newtext = $('li.playing a').text();
      $('.music-wrapper p.song-title').text(newtext);

        // Load in a track on click
        $('ol li').click(function(e) {
          e.preventDefault();
          $(this).addClass('playing').siblings().removeClass('playing');
          audio.load($('a', this).attr('data-src'));
          audio.play();
        });
        
            $('.next').click(function() {
              var next = $('li.playing').next();
              next.click()
            });
            $('.prev').click(function() {
              var prev = $('li.playing').prev();
              prev.click()
            });
            
            $('.song-list li').click(function(){
              var newtext = $('li.playing a').text();
              $('.music-wrapper p.song-title').text(newtext);
            });

//SMOOTH SCROLL
    $(function() {
$('a[href*=#]:not([href=#])').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top
     }, 1000);
     return false;
          }
        }
         });
      });




//Begin Parallax
  var $window = $(window);
  var $about = $('#about');
  var $news = $('#news');
  var $tour = $('#tour');
  var $music = $('#music');
  var $stripe = $('.mr-stripe');


  var windowHeight = $window.height(); //get the height of the window

  
  //function that is called for every pixel the user scrolls. Determines the position of the background
  /*arguments: 
    x = horizontal position of background
    windowHeight = height of the viewport
    pos = position of the scrollbar
    adjuster = adjust the position of the background
    inertia = how fast the background moves in relation to scrolling
  */
  function newTop(windowHeight, pos, adjuster, inertia){
    return (-((windowHeight + pos) - adjuster) * inertia)  + "px";
  }

  //function to be called whenever the window is scrolled or resized
  function Move(){ 
    //guitar
   if ($about.hasClass('active')) {
    $('.about-guitar').animate({top: ['-35px', 'swing']}, {duration: 1000});
   };
   if (!$about.hasClass('active')) {
    $('.about-guitar').animate({top: '185px'}, {duration: 600});
   };
   //trumpet
    if ($about.hasClass('active')) {
        $('.about-trumpet').animate({top: ['195px', 'swing']}, {duration: 600});
       };
       if (!$about.hasClass('active')) {
        $('.about-trumpet').animate({top: '345px'}, {duration: 600});
       };
    
    //mr Green
     if ($news.hasClass('active')) {
        $('.mr-green').animate({top: ['85px', 'swing']}, {duration: 1550});
       };
       if (!$news.hasClass('active')) {
        $('.mr-green').css({top: '-10000px'});
        };
    //mr Red
    if ($news.hasClass('active')) {
        $('.mr-red').animate({top: ['85px', 'swing']}, {duration: 1150});
        $('.mr-red').animate({top: ['65px', 'swing']}, {duration: 1000});
       };
       if (!$news.hasClass('active')) {
        $('.mr-red').css({top: '-10000px'});
        };
    //gret
    if ($news.hasClass('active')) {
        $('.mr-grey').animate({top: ['85px', 'swing']}, {duration: 1000});
       };
       if (!$news.hasClass('active')) {
        $('.mr-grey').css({top: '-10000px'});
        };

    }


    
    enquire.register("screen and (min-width:50em)", function() {
        $window.resize(function(){ 
        //if the user resizes the window...
        Move(); //move the background images in relation to the movement of the scrollbar
    });   
  
    $window.scroll(function(){ //when the user is scrolling...
      Move(); //move the background images in relation to the movement of the scrollbar
    });
    // End Parallax
    }, true);

    
  //OneScroll
$(".main-wrap").onepage_scroll({
   sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
   easing: "ease-out",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in", 
                                    // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
   animationTime: 1200,             // AnimationTime let you define how long each section takes to animate
   pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
   updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
   beforeMove: function(index) {
    Move();
   },              // This option accepts a callback function. The function will be called before the page moves.
   afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
   loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
   keyboard: true,                  // You can activate the keyboard controls
   responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
                                    // you want the responsive fallback to be triggered. For example, set this to 600 and whenever 
                                    // the browser's width is less than 600, the fallback will kick in.
   direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
});
  
  /*enquire.register("screen and (min-width:50em)", function() {
        $window.resize(function(){ //if the user resizes the window...
      Move(); //move the background images in relation to the movement of the scrollbar
    });*/   
  
    /*$wnidow.bind('scroll', function(){ //when the user is scrolling...
      Move(); //move the background images in relation to the movement of the scrollbar
    });*/
    // End Parallax
    //}, true);


    }
  },
  single_albums: {
      init: function() {
      soundManager.setup({
    // disable or enable debug output
    debugMode: true,
    // use HTML5 audio for MP3/MP4, if available
    preferFlash: false,
    useFlashBlock: true,
    // path to directory containing SM2 SWF
    url: '/swf',
    // optional: enable MPEG-4/AAC support (requires flash 9)
    flashVersion: 9
    });


  soundManager.onready(function() {
    // soundManager.createSound() etc. may now be called
    inlinePlayer = new InlinePlayer();
  });

    }
  },

  albums: {
      init: function() {

      soundManager.setup({
    // disable or enable debug output
    debugMode: true,
    // use HTML5 audio for MP3/MP4, if available
    preferFlash: false,
    useFlashBlock: true,
    // path to directory containing SM2 SWF
    url: '/swf ',
    // optional: enable MPEG-4/AAC support (requires flash 9)
    flashVersion: 9
    });


  soundManager.onready(function() {
    // soundManager.createSound() etc. may now be called
    inlinePlayer = new InlinePlayer();
  });
    }
  },

  store: {
    init: function() {
    soundManager.setup({
  // disable or enable debug output
  debugMode: true,
  // use HTML5 audio for MP3/MP4, if available
  preferFlash: false,
  useFlashBlock: true,
  // path to directory containing SM2 SWF
  url: '/swf',
  // optional: enable MPEG-4/AAC support (requires flash 9)
  flashVersion: 9
  });


soundManager.onready(function() {
  // soundManager.createSound() etc. may now be called
  inlinePlayer = new InlinePlayer();
});
  }
},
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

