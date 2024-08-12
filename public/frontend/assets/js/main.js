(function ($) {
  'use strict';

  /*
  |--------------------------------------------------------------------------
  | Template Name: SaePearl
  | Author: Laralink
  | Version: 1.0.0
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  | TABLE OF CONTENTS:
  |--------------------------------------------------------------------------
  |
  | 1. Preloader
  | 2. Mobile Menu
  | 3. Sticky Header
  | 4. Dynamic Background
  | 5. Slick Slider
  | 6. Swiper Slider
  | 7. Modal Video
  | 8. Scroll Up
  | 9. Accordian
  | 10. Tabs
  | 11. Hover To Active
  | 12. Review
  | 13. Hobble Effect
  | 14. Date Range Picker
  | 15. Quantity
  | 16. Payment Method Toggle
  | 17. Light Gallery
  | 18. Custom Mouse Pointer
  | 19. Custom Slider
  |
  */

  /*--------------------------------------------------------------
    Scripts initialization
  --------------------------------------------------------------*/
  $.exists = function (selector) {
    return $(selector).length > 0;
  };

  $(window).on('load', function () {
    preloader();
  });

  $(function () {
    mainNav();
    stickyHeader();
    dynamicBackground();
    slickInit();
    modalVideo();
    scrollUp();
    accordian();
    tabs();
    hoverActive();
    review();
    parallaxSwiperSlider();
    hobbleEffect();
    daterangepickerInit();
    quantityInit();
    paymentMethodToggle();
    lightGallery();
    customSlider();
    customMousePointer();
    if ($.exists('.wow')) {
      new WOW().init();
    }
    if ($.exists('.player')) {
      $('.player').YTPlayer();
    }
  });

  /*--------------------------------------------------------------
    1. Preloader
  --------------------------------------------------------------*/
  function preloader() {
    $('.cs_preloader_in').fadeOut();
    $('.cs_preloader').delay(150).fadeOut('slow');
  }

  /*--------------------------------------------------------------
    2. Mobile Menu
  --------------------------------------------------------------*/
  function mainNav() {
    $('.cs_nav').append('<span class="cs_menu_toggle"><span></span></span>');
    $('.menu-item-has-children').append(
      '<span class="cs_menu_dropdown_toggle"><span></span></span>',
    );
    $('.cs_menu_toggle').on('click', function () {
      $(this)
        .toggleClass('cs_toggle_active')
        .siblings('.cs_nav_list')
        .toggleClass('cs_active');
    });
    $('.cs_menu_toggle')
      .parents('body')
      .find('.cs_side_header')
      .addClass('cs_has_main_nav');
    $('.cs_menu_toggle')
      .parents('body')
      .find('.cs_toolbox')
      .addClass('cs_has_main_nav');
    $('.cs_menu_dropdown_toggle').on('click', function () {
      $(this).toggleClass('active').siblings('ul').slideToggle();
      $(this).parent().toggleClass('active');
    });
    // Side Nav
    $('.cs_hamburger_info_btn').on('click', function () {
      $('.cs_side_header').addClass('active');
      $('html').addClass('cs_hamburger_active');
    });
    $('.cs_close, .cs_side_header_overlay').on('click', function () {
      $('.cs_side_header').removeClass('active');
      $('html').removeClass('cs_hamburger_active');
    });
    // Hamburger Menu
    $('.cs_hamburger_menu .menu-item-has-children>a').on('click', function (e) {
      e.preventDefault();
      $(this).siblings('ul').slideToggle();
      $(this).siblings('.cs_menu_dropdown_toggle').toggleClass('active');
    });

    $('.cs_hamburger_btn').on('click', function (e) {
      $('.cs_hamburger_header').addClass('active');
      $('html').addClass('cs_hamburger_active');
    });
    $('.cs_close_hamburger').on('click', function (e) {
      $('.cs_hamburger_header').removeClass('active');
      $('html').removeClass('cs_hamburger_active');
    });
  }

  /*--------------------------------------------------------------
    3. Sticky Header
  --------------------------------------------------------------*/
  function stickyHeader() {
    var $window = $(window);
    var lastScrollTop = 0;
    var $header = $('.cs_sticky_header');
    var headerHeight = $header.outerHeight() + 30;

    $window.scroll(function () {
      var windowTop = $window.scrollTop();

      if (windowTop >= headerHeight) {
        $header.addClass('cs_gescout_sticky');
      } else {
        $header.removeClass('cs_gescout_sticky');
        $header.removeClass('cs_gescout_show');
      }

      if ($header.hasClass('cs_gescout_sticky')) {
        if (windowTop < lastScrollTop) {
          $header.addClass('cs_gescout_show');
        } else {
          $header.removeClass('cs_gescout_show');
        }
      }

      lastScrollTop = windowTop;
    });
  }

  /*--------------------------------------------------------------
    4. Dynamic Background
  --------------------------------------------------------------*/
  function dynamicBackground() {
    $('[data-src]').each(function () {
      var src = $(this).attr('data-src');
      $(this).css({
        'background-image': 'url(' + src + ')',
      });
    });
  }

  /*--------------------------------------------------------------
    5. Slick Slider
  --------------------------------------------------------------*/
  function slickInit() {
    if ($.exists('.cs_slider')) {
      $('.cs_slider').each(function () {
        // Slick Variable
        var $ts = $(this).find('.cs_slider_container');
        var $slickActive = $(this).find('.cs_slider_wrapper');
        var $status = $(this).find('.cs_slider_number');

        // Auto Play
        var autoPlayVar = parseInt($ts.attr('data-autoplay'), 10);
        // Auto Play Time Out
        var autoplaySpdVar = 3000;
        if (autoPlayVar > 1) {
          autoplaySpdVar = autoPlayVar;
          autoPlayVar = 1;
        }
        // Slide Change Speed
        var speedVar = parseInt($ts.attr('data-speed'), 10);
        // Slider Loop
        var loopVar = Boolean(parseInt($ts.attr('data-loop'), 10));
        // Slider Center
        var centerVar = Boolean(parseInt($ts.attr('data-center'), 10));
        // Variable Width
        var variableWidthVar = Boolean(
          parseInt($ts.attr('data-variable-width'), 10),
        );
        // Pagination
        var paginaiton = $(this)
          .find('.cs_pagination')
          .hasClass('cs_pagination');
        // Slide Per View
        var slidesPerView = $ts.attr('data-slides-per-view');
        if (slidesPerView == 1) {
          slidesPerView = 1;
        }
        if (slidesPerView == 'responsive') {
          var slidesPerView = parseInt($ts.attr('data-add-slides'), 10);
          var lgPoint = parseInt($ts.attr('data-lg-slides'), 10);
          var mdPoint = parseInt($ts.attr('data-md-slides'), 10);
          var smPoint = parseInt($ts.attr('data-sm-slides'), 10);
          var xsPoing = parseInt($ts.attr('data-xs-slides'), 10);
        }
        // Fade Slider
        var fadeVar = parseInt($($ts).attr('data-fade-slide'));
        fadeVar === 1 ? (fadeVar = true) : (fadeVar = false);

        /* Start Count Slide Number */
        $slickActive.on(
          'init reInit afterChange',
          function (event, slick, currentSlide, nextSlide) {
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status.html(
              `<span class="cs_current_number">${i}</span> <span class="cs_slider_number_seperator"></span> <span class="cs_total_numbers">${slick.slideCount}</span>`,
            );
          },
        );
        /* End Count Slide Number */

        // Slick Active Code
        $slickActive.slick({
          autoplay: autoPlayVar,
          dots: paginaiton,
          centerPadding: '28%',
          speed: speedVar,
          infinite: loopVar,
          autoplaySpeed: autoplaySpdVar,
          centerMode: centerVar,
          fade: fadeVar,
          prevArrow: $(this).find('.cs_left_arrow'),
          nextArrow: $(this).find('.cs_right_arrow'),
          appendDots: $(this).find('.cs_pagination'),
          slidesToShow: slidesPerView,
          variableWidth: variableWidthVar,
          swipeToSlide: true,
          responsive: [
            {
              breakpoint: 1400,
              settings: {
                slidesToShow: lgPoint,
              },
            },
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: mdPoint,
              },
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: smPoint,
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: xsPoing,
              },
            },
          ],
        });
      });
    }
    if ($.exists('.cs_slider1')) {
      $('.cs_slider1').each(function () {
        // Slick Variable
        var $ts = $(this).find('.cs_slider_container');
        var $slickActive = $(this).find('.cs_slider_wrapper');
        var $status = $(this).find('.cs_slider_number');

        // Auto Play
        var autoPlayVar = parseInt($ts.attr('data-autoplay'), 10);
        // Auto Play Time Out
        var autoplaySpdVar = 3000;
        if (autoPlayVar > 1) {
          autoplaySpdVar = autoPlayVar;
          autoPlayVar = 1;
        }
        // Slide Change Speed
        var speedVar = parseInt($ts.attr('data-speed'), 10);
        // Slider Loop
        var loopVar = Boolean(parseInt($ts.attr('data-loop'), 10));
        // Slider Center
        var centerVar = Boolean(parseInt($ts.attr('data-center'), 10));
        // Variable Width
        var variableWidthVar = Boolean(
          parseInt($ts.attr('data-variable-width'), 10),
        );
        // Pagination
        var paginaiton = $(this)
          .find('.cs_pagination')
          .hasClass('cs_pagination');
        // Slide Per View
        var slidesPerView = $ts.attr('data-slides-per-view');
        if (slidesPerView == 1) {
          slidesPerView = 1;
        }
        if (slidesPerView == 'responsive') {
          var slidesPerView = parseInt($ts.attr('data-add-slides'), 10);
          var lgPoint = parseInt($ts.attr('data-lg-slides'), 10);
          var mdPoint = parseInt($ts.attr('data-md-slides'), 10);
          var smPoint = parseInt($ts.attr('data-sm-slides'), 10);
          var xsPoing = parseInt($ts.attr('data-xs-slides'), 10);
        }
        // Fade Slider
        var fadeVar = parseInt($($ts).attr('data-fade-slide'));
        fadeVar === 1 ? (fadeVar = true) : (fadeVar = false);

        /* Start Count Slide Number */
        $slickActive.on(
          'init reInit afterChange',
          function (event, slick, currentSlide, nextSlide) {
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status.html(
              `<span class="cs_current_number">${i}</span> <span class="cs_slider_number_seperator"></span> <span class="cs_total_numbers">${slick.slideCount}</span>`,
            );
          },
        );
        /* End Count Slide Number */

        // Slick Active Code
        $slickActive.slick({
          autoplay: autoPlayVar,
          dots: paginaiton,
          centerPadding: '28%',
          speed: speedVar,
          infinite: loopVar,
          autoplaySpeed: autoplaySpdVar,
          centerMode: centerVar,
          fade: fadeVar,
          prevArrow: $(this).find('.cs_left_arrow'),
          nextArrow: $(this).find('.cs_right_arrow'),
          appendDots: $(this).find('.cs_pagination'),
          slidesToShow: slidesPerView,
          variableWidth: variableWidthVar,
          swipeToSlide: true,
          responsive: [
            {
              breakpoint: 1400,
              settings: {
                slidesToShow: lgPoint,
              },
            },
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: mdPoint,
              },
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: smPoint,
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: xsPoing,
              },
            },
          ],
        });
      });
    }
    /* Start Gallery Slider */
    if ($.exists('.cs_gallery_slider_thumb')) {
      $('.cs_gallery_slider_thumb').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.cs_left_arrow_gallery'),
        nextArrow: $('.cs_right_arrow_gallery'),
        asNavFor: '.cs_gallery_slider_nav',
        fade: true,
      });
      $('.cs_gallery_slider_nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.cs_gallery_slider_thumb',
        focusOnSelect: true,
        arrows: false,
        vertical: true,
        centerMode: true,
        centerPadding: '0px',
      });
    }

    if ($.exists('.cs_gallery_slider_thumb_2')) {
      $('.cs_gallery_slider_thumb_2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.cs_left_arrow_gallery_2'),
        nextArrow: $('.cs_right_arrow_gallery_2'),
        asNavFor: '.cs_gallery_slider_nav_2',
        speed: 1000,
      });
      $('.cs_gallery_slider_nav_2').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.cs_gallery_slider_thumb_2',
        focusOnSelect: true,
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        speed: 1000,
      });
    }
    /* End Gallery Slider */
  }

  /*--------------------------------------------------------------
    6. Swiper Slider
  --------------------------------------------------------------*/
  function parallaxSwiperSlider() {
    if ($.exists('.cs_parallax_slider')) {
      let mainSliderSelector = '.cs_parallax_slider',
        interleaveOffset = 0.5;
      let mainSliderOptions = {
        loop: true,
        speed: 1000,
        autoplay: true,
        loopAdditionalSlides: 10,
        grabCursor: true,
        watchSlidesProgress: true,
        navigation: {
          nextEl: '.cs_swiper_button_next',
          prevEl: '.cs_swiper_button_prev',
        },
        pagination: true,
        on: {
          init: function () {
            this.autoplay.start();
          },
          imagesReady: function () {
            this.el.classList.remove('loading');
            this.autoplay.start();
          },
          progress: function (swiper) {
            for (let i = 0; i < swiper.slides.length; i++) {
              let slideProgress = swiper.slides[i].progress,
                innerOffset = swiper.width * interleaveOffset,
                innerTranslate = slideProgress * innerOffset;

              swiper.slides[i].querySelector(
                '.cs_swiper_parallax_bg',
              ).style.transform = 'translateX(' + innerTranslate + 'px)';
            }
          },
          touchStart: function (swiper) {
            for (let i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = '';
            }
          },
          setTransition: function (swiper, transition) {
            for (let i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = transition + 'ms';
              swiper.slides[i].querySelector(
                '.cs_swiper_parallax_bg',
              ).style.transition = transition + 'ms';
            }
          },
        },
      };
      let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);
    }
  }

  /*--------------------------------------------------------------
    7. Modal Video
  --------------------------------------------------------------*/
  function modalVideo() {
    if ($.exists('.cs_video_open')) {
      $('body').append(`
        <div class="cs_video_popup">
          <div class="cs_video_popup-overlay"></div>
          <div class="cs_video_popup-content">
            <div class="cs_video_popup-layer"></div>
            <div class="cs_video_popup_container">
              <div class="cs_video_popup-align">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="about:blank"></iframe>
                </div>
              </div>
              <div class="cs_video_popup_close"></div>
            </div>
          </div>
        </div>
      `);
      $(document).on('click', '.cs_video_open', function (e) {
        e.preventDefault();
        var video = $(this).attr('href');

        $('.cs_video_popup_container iframe').attr('src', `${video}`);

        $('.cs_video_popup').addClass('active');
      });
      $('.cs_video_popup_close, .cs_video_popup-layer').on(
        'click',
        function (e) {
          $('.cs_video_popup').removeClass('active');
          $('html').removeClass('overflow-hidden');
          $('.cs_video_popup_container iframe').attr('src', 'about:blank');
          e.preventDefault();
        },
      );
    }
  }

  /*--------------------------------------------------------------
    8. Scroll Up
  --------------------------------------------------------------*/
  function scrollUp() {
    $('.cs_scrollup').on('click', function (e) {
      e.preventDefault();
      $('html,body').animate(
        {
          scrollTop: 0,
        },
        0,
      );
    });
  }

  /*--------------------------------------------------------------
    9. Accordian
  --------------------------------------------------------------*/
  function accordian() {
    $('.cs_accordian').children('.cs_accordian_body').hide();
    $('.cs_accordian.active').children('.cs_accordian_body').show();
    $('.cs_accordian_head').on('click', function () {
      $(this)
        .parent('.cs_accordian')
        .siblings()
        .children('.cs_accordian_body')
        .slideUp(250);
      $(this).siblings().slideDown(250);
      $(this)
        .parent()
        .parent()
        .siblings()
        .find('.cs_accordian_body')
        .slideUp(250);
      /* Accordian Active Class */
      $(this).parents('.cs_accordian').addClass('active');
      $(this).parent('.cs_accordian').siblings().removeClass('active');
    });
  }

  /*--------------------------------------------------------------
    10. Tabs
  --------------------------------------------------------------*/
  function tabs() {
    $('.cs_tabs .cs_tab_links a').on('click', function (e) {
      var currentAttrValue = $(this).attr('href');
      $('.cs_tabs ' + currentAttrValue)
        .fadeIn(400)
        .siblings()
        .hide();
      $(this).parents('li').addClass('active').siblings().removeClass('active');
      e.preventDefault();
    });
  }

  /*--------------------------------------------------------------
    11. Hover To Active
  --------------------------------------------------------------*/
  function hoverActive() {
    $('.cs_hover_active').hover(function () {
      $(this).addClass('active').siblings().removeClass('active');
    });
  }

  /*--------------------------------------------------------------
    12. Review
  --------------------------------------------------------------*/
  function review() {
    $('.cs_rating').each(function () {
      var review = $(this).data('rating');
      var reviewVal = review * 20 + '%';
      $(this).find('.cs_rating_percentage').css('width', reviewVal);
    });
  }

  /*--------------------------------------------------------------
    13. Hobble Effect
  --------------------------------------------------------------*/
  function hobbleEffect() {
    $(document)
      .on('mousemove', '.cs_hobble', function (event) {
        var halfW = this.clientWidth / 2;
        var halfH = this.clientHeight / 2;
        var coorX = halfW - (event.pageX - $(this).offset().left);
        var coorY = halfH - (event.pageY - $(this).offset().top);
        var degX1 = (coorY / halfH) * 8 + 'deg';
        var degY1 = (coorX / halfW) * -8 + 'deg';
        var degX3 = (coorY / halfH) * -15 + 'px';
        var degY3 = (coorX / halfW) * 15 + 'px';

        $(this)
          .find('.cs_hover_layer_1')
          .css('transform', function () {
            return (
              'perspective( 800px ) translate3d( 0, 0, 0 ) rotateX(' +
              degX1 +
              ') rotateY(' +
              degY1 +
              ')'
            );
          });
        $(this)
          .find('.cs_hover_layer_2')
          .css('transform', function () {
            return (
              'perspective( 800px ) translateX(' +
              degX3 +
              ') translateY(' +
              degY3 +
              ') scale(1.04)'
            );
          });
      })
      .on('mouseout', '.cs_hobble', function () {
        $(this).find('.cs_hover_layer_1').removeAttr('style');
        $(this).find('.cs_hover_layer_2').removeAttr('style');
      });
  }

  /*--------------------------------------------------------------
    14. Date Range Picker
  --------------------------------------------------------------*/
  function daterangepickerInit() {
    let dateToday = new Date();
    let formattedDate = dateToday.toISOString().split('T')[0];
    $('.cs_start_date_value').text(formattedDate);
    dateToday.setDate(dateToday.getDate() + 1);
    formattedDate = dateToday.toISOString().split('T')[0];
    $('.cs_end_date_value').text(formattedDate);

    $('input[name="datetimes"]').daterangepicker(
      {
        cs_start_date: moment().startOf('hour'),
        cs_end_date: moment().startOf('hour').add(24, 'hour'),
        minDate: moment().startOf('hour'),
      },
      function (start, end, label) {
        let cs_start_date = start.format('YYYY-MM-DD').toString();
        let cs_end_date = end.format('YYYY-MM-DD').toString();
        $('.cs_start_date').text(cs_start_date);
        $('.cs_end_date').text(cs_end_date);
      },
    );
  }

  /*--------------------------------------------------------------
    15. Quantity
  --------------------------------------------------------------*/
  function quantityInit() {
    $(document).on('click', function (event) {
      if (!$(event.target).closest('.cs_quantity_wrap').length) {
        $('.cs_quantity_wrap').removeClass('active');
      }
    });
    $('.cs_quantity_btn').on('click', function () {
      $('.cs_quantity_wrap').removeClass('active');
      $(this).parents('.cs_quantity_wrap').toggleClass('active');
    });

    $('.cs_quantity_btn').each(function () {
      var initialNumber = parseInt($(this).data('initial-number'), 10);
      $(this)
        .text(pad(initialNumber))
        .siblings('.cs_quantity_dropdown')
        .find('.cs_quantity_number')
        .text(pad(initialNumber));
    });

    $('.cs_quantity_increment').on('click', function () {
      var maxNumber = parseInt(
        $(this).siblings('.cs_quantity_number').data('max-value'),
        10,
      );
      var currentValue = parseInt(
        $(this).siblings('.cs_quantity_number').text(),
        10,
      );
      if (currentValue < maxNumber) {
        $(this)
          .siblings('.cs_quantity_number')
          .text(pad(currentValue + 1));
        $(this)
          .parents('.cs_quantity_dropdown')
          .siblings('.cs_quantity_btn')
          .text(pad(currentValue + 1));
      }
    });

    $('.cs_quantity_decrement').on('click', function () {
      var minNumber = parseInt(
        $(this).siblings('.cs_quantity_number').data('min-value'),
        10,
      );
      var currentValue = parseInt(
        $(this).siblings('.cs_quantity_number').text(),
        10,
      );
      if (currentValue > minNumber) {
        $(this)
          .siblings('.cs_quantity_number')
          .text(pad(currentValue - 1));
        $(this)
          .parents('.cs_quantity_wrap')
          .find('.cs_quantity_btn')
          .text(pad(currentValue - 1));
      }
    });

    function pad(num) {
      var paddedNum = ('0' + num).slice(-2);
      return paddedNum;
    }
  }

  /*--------------------------------------------------------------
    16. Payment Method Toggle
  --------------------------------------------------------------*/
  function paymentMethodToggle() {
    $('input[name="paymentMethod"]').change(function () {
      if ($(this).is(':checked') && $(this).attr('id') === 'debitCardRadio') {
        $('.cs_debit_card_box').show();
      } else {
        $('.cs_debit_card_box').hide();
      }
    });
  }

  /*--------------------------------------------------------------
    17. Light Gallery
  --------------------------------------------------------------*/
  function lightGallery() {
    $('.cs_lightgallery').each(function () {
      $(this).lightGallery({
        selector: '.cs_lightbox_item',
        subHtmlSelectorRelative: false,
        thumbnail: true,
        mousewheel: true,
      });
    });
  }

  /*--------------------------------------------------------------
    18. Custom Mouse Pointer
  --------------------------------------------------------------*/
  function customMousePointer() {
    $('.cs_custom_pointer_wrap').each(function () {
      $(this).on('mousemove', function (e) {
        let mouseX = e.pageX - $(this).offset().left;
        let mouseY = e.pageY - $(this).offset().top;

        $(this)
          .find('.cs_mouse_point')
          .css({
            top: mouseY + 'px',
            left: mouseX + 'px',
          });
      });
    });
  }

  /*--------------------------------------------------------------
    19. Custom Slider
  --------------------------------------------------------------*/
  function customSlider() {
    var Slider = (function () {
      var initSlider = function () {
        $('.cs_custom_slide_arrow_right , .cs_custom_slide_arrow_left').click(
          function (event) {
            const direction = $(this).hasClass('cs_custom_slide_arrow_left')
              ? 'prev'
              : 'next';
            updateSlides(direction);
          },
        );
        updateSlides('next');
      };

      const updateSlides = function (direction) {
        const activeSlide = $('.cs_custom_slide.active');
        const slides = $('.cs_custom_slide');
        const totalSlides = slides.length;
        const activeIndex = activeSlide.index();
        let nextIndex;

        if (direction === 'next') {
          nextIndex = activeIndex === totalSlides - 1 ? 0 : activeIndex + 1;
        } else {
          nextIndex = activeIndex === 0 ? totalSlides - 1 : activeIndex - 1;
        }

        const nextSlide = slides.eq(nextIndex);

        // Remove active class from all slides
        slides.removeClass('prev-1 next-1 prev-2 next-2 active');

        // Set the new active slide
        nextSlide.addClass('active');

        // Calculate the indices of previous and next slides considering the loop
        const prev1Index = nextIndex === 0 ? totalSlides - 1 : nextIndex - 1;
        const prev2Index = prev1Index === 0 ? totalSlides - 1 : prev1Index - 1;
        const next1Index = nextIndex === totalSlides - 1 ? 0 : nextIndex + 1;
        const next2Index = next1Index === totalSlides - 1 ? 0 : next1Index + 1;

        // Add appropriate classes to slides
        slides.eq(prev1Index).addClass('prev-1');
        slides.eq(prev2Index).addClass('prev-2');
        slides.eq(next1Index).addClass('next-1');
        slides.eq(next2Index).addClass('next-2');
      };

      return {
        init: function () {
          initSlider();
        },
      };
    })();

    Slider.init();
  }
})(jQuery); // End of use strict

// $(window).load(function(){
//   setTimeout(function() {
//           $('#exampleModal').modal('show');
//   }, 3000);
//       });
