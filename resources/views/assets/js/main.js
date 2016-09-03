(function($){


  $(window).on("load", function() {

    setInterval(function(){ 
      $('.banner-image-part').addClass("active")
    }, 100);

    new WOW().init();

    // lightcase plugin init
    $('a[data-rel^=lightcase]').lightcase();
    

     //preloader
     $("#preloader").delay(300).animate({
        "opacity" : "0"
        }, 500, function() {
        $("#preloader").css("display","none");
    });

    // run test on initial page load
    checkSize();
    // run test on resize of the window
    $(window).resize(checkSize);

     //js code for mobile menu 
    $(".menu-toggle").on("click", function() {
        $(this).toggleClass("is-active");
    });
  });
  

  // responsive menu slideing
  function checkSize(){
    if (window.matchMedia('(max-width: 991px)').matches) {
        // js code for responsive drop-down-menu-item with swing effect
        $(".navbar-collapse>ul>li>a, .navbar-collapse ul.sub-menu>li>a").on("click", function() {
          var element = $(this).parent("li");
          if (element.hasClass("open")) {
            element.removeClass("open");
            element.find("li").removeClass("open");
            element.find("ul").slideUp(500,"linear");
          }
          else {
            element.addClass("open");
            element.children("ul").slideDown();
            element.siblings("li").children("ul").slideUp();
            element.siblings("li").removeClass("open");
            element.siblings("li").find("li").removeClass("open");
            element.siblings("li").find("ul").slideUp();
          }
        });
      }
    }

    $('.play-butlar-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: $('#play-butlar-slider-prev'),
      nextArrow: $('#play-butlar-slider-next'),
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });

    $('.testimonial-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: $('#testimonial-slider-prev'),
      nextArrow: $('#testimonial-slider-next')
    });

    // lightcase plugin init
    $('a[data-rel^=lightcase]').lightcase();

    // Show or hide the sticky footer button
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 200) {
            $(".scroll-to-top").fadeIn(200);
        } else {
            $(".scroll-to-top").fadeOut(200);
        }
    });

    // Animate the scroll to top
    $(".scroll-to-top").on("click", function(event) {
        event.preventDefault();
        $("html, body").animate({scrollTop: 0}, 800);
    });

    $(".parallax-container").on('mousemove',function(e) {
      parallaxIt(e, ".error-image", -40);
    });
    
    function parallaxIt(e, target, movement) {
      var $this = $(".parallax-container");
      var relX = e.pageX - $this.offset().left;
      var relY = e.pageY - $this.offset().top;
    
      TweenMax.to(target, 1, {
        x: (relX - $this.width() / 2) / $this.width() * movement,
        y: (relY - $this.height() / 2) / $this.height() * movement
      });
    };


    document.addEventListener("DOMContentLoaded", function(event) {
      var cursor = document.querySelector(".custom-cursor");
      var links = document.querySelectorAll("a");
      var initCursor = false;
    
      for (var i = 0; i < links.length; i++) {
        var selfLink = links[i];
    
        selfLink.addEventListener("mouseover", function() {
          cursor.classList.add("custom-cursor--link");
        });
        selfLink.addEventListener("mouseout", function() {
          cursor.classList.remove("custom-cursor--link");
        });
      }
    
      window.onmousemove = function(e) {
        var mouseX = e.clientX;
        var mouseY = e.clientY;
    
        if (!initCursor) {
          // cursor.style.opacity = 1;
          TweenLite.to(cursor, 0.3, {
            opacity: 1
          });
          initCursor = true;
        }
    
        TweenLite.to(cursor, 0, {
          top: mouseY + "px",
          left: mouseX + "px"
        });
      };
    
      window.onmouseout = function(e) {
        TweenLite.to(cursor, 0.3, {
          opacity: 0
        });
        initCursor = false;
      };
    });

})(jQuery);