$(document).ready(function () {
  "use strict";

  //show nav link underline 
  $(".nav-link").on("mouseleave", function () {
    $(this).addClass("change")
  });
  $(".nav-link").on("mousemove", function () {
    $(this).removeClass("change")
  });
// display menu dropdown on hover 
   $(".dropdown").hover(function(){
      var dropdownMenu = $(this).children(".dropdown-menu");
      if(dropdownMenu.is(":visible")){
          dropdownMenu.parent().toggleClass("open");
      }
  });
   // fixed header
  $(window).scroll(function () {
    let scroll = $(window).scrollTop();

    if (scroll > 1) {
      $("header").addClass("fixed");
    } else {
      $("header").removeClass("fixed");
    }
  });

// display or hide search bar and cart
    
    if($('header .header-icon  .header-search .bi-search').length) {
      $('header .header-icon  .header-search a').on('click', function () {
        $('header .search-box').slideToggle();
        $('header .cart-box').slideUp();
        return false;
      });
    }
  
    if($('header .header-icon  .header-cart .bi-cart4').length) {
      $('header .header-icon  .header-cart a').on('click', function () {
        $('header .cart-box').slideToggle();
        $('header .search-box').slideUp();
        return false;
      });
    }

    // dropdown menu 
    $('li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').fadeIn(10);
    }, function() {
      $(this).find('.dropdown-menu').fadeOut(10);
    });

  //main slider owl
  $(".main-slider-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 10000,
    items: 1,
    nav: true,
    dots: false,
    rtl: true,
    smartSpeed: 1000,
    animateOut: "fadeOutUp",
    animateIn: "fadeInDown",
    navText: ["<i class='bi bi-chevron-right'></i>", "<i class='bi bi-chevron-left'></i>"],
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
      },
      768: {
        items: 1,
        nav: true,
      },

      992: {
        items: 1,
      }
    }
  });

  //why slider owl
  $(".why-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    items: 4,
    nav: true,
    dots: false,
    rtl: true,
    smartSpeed: 2000,
    margin: 20,
    navText: ["<i class='bi bi-chevron-right'></i>", "<i class='bi bi-chevron-left'></i>"],

    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
      },
      768: {
        items: 2,
      },

      992: {
        items: 3,
      },
      1200: {
        items: 3,
      }
    }
  });

  //clients slider owl
  $(".clients-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    items: 5,
    nav: true,
    dots: false,
    rtl: true,
    margin: 70,
     navContainer: '.clients-carousel',
    navText: ["<i class='bi bi-chevron-right'></i>", "<i class='bi bi-chevron-left'></i>"],
    responsive: {
      0: {
        items: 2,
      },
      575: {
        items: 3,
      },
      768: {
        items: 3,
      },

      992: {
        items: 5,
      }
    }
  });

  //testimonial  slider owl
  $(".testimonial-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    items: 3,
    nav: true,
    dots: false,
    rtl: true,
    smartSpeed: 1000,
    margin: 20,
    navText: ["<i class='bi bi-chevron-right'></i>", "<i class='bi bi-chevron-left'></i>"],
    responsive: {
      0: {
        items: 1,
      },
      575: {
        items: 1,
      },
      768: {
        items: 1,
      },

      992: {
        items: 2,
      }
    }
  });
  // team slider owl 
  $(".team-carousel").owlCarousel({
    loop: true,
    autoplay: false,
    autoplayTimeout: 5000,
    items: 4,
    nav: true,
    dots: false,
    rtl: true,
    smartSpeed: 1000,
    margin: 40,
    navText: ["<i class='bi bi-chevron-right'></i>", "<i class='bi bi-chevron-left'></i>"],
    responsive: {
      0: {
        items: 1,
      },
      575: {
        items: 1,
      },
      768: {
        items: 1,
      },

      992: {
        items: 4,
      }
    }
  });
  

  // fire mixitup filter

 if($('.filter-data').length > 0)
 {
  var containerEl = document.querySelector('.filter-data');

  var mixer = mixitup(containerEl);
 }
 if($('.projects-container').length > 0)
 {
  var containerEl = document.querySelector('.projects-container');

  var mixer = mixitup(containerEl);
 }
  //to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 500) {
      $("#toTop").fadeIn(100);
    } else {
      $("#toTop").fadeOut(100);
    }
  });

  $("#toTop").click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 0);
  });

  //validate form
  (function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    let forms = document.querySelectorAll(".needs-validation")

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener("submit", function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          } else {
            event.preventDefault()
          }
          form.classList.add("was-validated")
        }, false)
      })
  })();

  //lazyload images
  $("img").Lazy({
    scrollDirection: "vertical",
    effect: "fadeIn",
    visibleOnly: false,
  });
  
  //counter up
  $(".counter").counterUp({
    delay: 10,
    time: 1000,
    offset: 50,
    beginAt: 100,
  });
});

$(window).on("load", function () {
  $('.loader').delay(500).fadeOut(500);

  //wow animate
  wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: false, // default
    live: true // default
  })
  wow.init();
});
 