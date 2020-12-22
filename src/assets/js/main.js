$(document).ready(function () {
   // $("#mask-phone").mask("(999) 999-9999");

   $.fn.setCursorPosition = function(pos) {
      if ($(this).get(0).setSelectionRange) {
         $(this).get(0).setSelectionRange(pos, pos);
      } else if ($(this).get(0).createTextRange) {
      var range = $(this).get(0).createTextRange();
         range.collapse(true);
         range.moveEnd('character', pos);
         range.moveStart('character', pos);
         range.select();
      }
   };

   $(".wpcf7-mask").click(function(){
      $(this).setCursorPosition(3);
   })
   gsap.registerPlugin(ScrollTrigger);

   //Фикс высоты экрана
   var appHeight = () =>
      document.documentElement.style.setProperty(
         "--app-height",
         `${window.innerHeight}px`
      );
   window.addEventListener("resize", appHeight);
   appHeight();


   $('html').keydown(function (eventObject) { //отлавливаем нажатие клавиш
      if (event.ctrlKey && event.keyCode == 71) { //если нажали Ctrl+q
         $('.debug-grid').toggleClass('debug-grid__active');
      }
   });


   $('.hamburger').click(function (e) {
      e.preventDefault();
      $(this).toggleClass('is-active');
      $('nav').toggleClass('nav-is-active');      
      $('body').toggleClass('open-nav');   

   });

   if(window.screen.width < 990) {
      $('nav a').click(function (e) {       
         $(this).parent().parent().parent().parent().toggleClass('nav-is-active');   
         $('.hamburger').toggleClass('is-active');
         $('body').toggleClass('open-nav'); 
      });   
   }





   function hideProgerssVideo($element) {
      $($element.find('video')).on('timeupdate', function () {
         var currentTime = this.currentTime
         var duration = this.duration
         var progress = currentTime * 1 / duration         
         $(this).parent().find('.iphone-video__porgerss_visible').css({
            'transform': 'translateY(15px) scaleX(' + progress + ')'
         })

      });
      $element.find('.iphone-video__porgerss').removeClass('iphone-video__porgerss_visible')
   }

   function showProgressVideo($element) {
      $($element.find('video')).on('timeupdate', function () {
         var currentTime = this.currentTime
         var duration = this.duration
         var progress = currentTime * 1 / duration         
         $(this).parent().find('.iphone-video__porgerss_visible').css({
            'transform': 'translateY(-10px) scaleX(' + progress + ')'
         })

      });
      $element.find('.iphone-video__porgerss').addClass('iphone-video__porgerss_visible')
   }


$(".iphone-video").on('click', function () {
   var video = $(this).find('video')[0];
   var thisPlay = $(this).find('.iphone-video__play')
   if ( video.paused ) {
         video.play();
         showProgressVideo($(this))
         thisPlay.slideUp()
   } else {
         video.pause();
         thisPlay.slideDown()
   }

   return false;
});

   // $('.iphone-video__play').click(function (e) {
   //    e.preventDefault();
   //    var video = $(this).parent()
   //    video.find('video')[0].play()
   //    showProgressVideo(video)
   // });

   // $('.iphone-video__pause').click(function (e) {
   //    e.preventDefault();
   //    var video = $(this).parent().parent()
   //    video.find('video')[0].pause()
   //    hideProgerssVideo(video)
   // });

   // $('.iphone-video__mobile').click(function (e) {
   //    e.preventDefault();
   //    $('.iphone-video__play, .iphone-video__pause').toggle()
   // });

   if(window.screen.width>=982){
      $('.iphone-video__mockup').hover(function () {
         // over
         var video = $(this).find('video')
         video[0].play()
         showProgressVideo($(this))
   
      }, function () {
         // out
         var video = $(this).find('video')
         video[0].pause()
         hideProgerssVideo($(this))
      }
      );




   //Анимация
   var scrollDuration = 0
   var transformXimg = 4 * $('.simple-image__pic').width();
   // scrollDuration = 4 * $('.simple-text').height();
   var lineHeight = $('.simple-text__line').height();

   $('.simple-text').each(function (index, element) {
      // element == this      
      var attImg = $(this).attr('data-image')
      var prevAttImg = $(this).prev().attr('data-image');
      if (prevAttImg === undefined) {
         prevAttImg = attImg
      }
      $(this).addClass('simple-text-trigger' + index)
      $(this).find('.simple-text__line_amnimation').addClass('simple-text-line-animation' + index)
      gsap.to('.simple-text-line-animation' + index, {
         scrollTrigger: {
            trigger: ".simple-text-trigger" + index,
            start: "center center",
            end: "+=" + lineHeight,
            scrub: true,
            ease: "linear",
         },
         height: "100%",
         ease: "linear"
      },
         0)


      ScrollTrigger.create({
         trigger: ".simple-text-trigger" + index,
         start: "center center",
         scrub: true,
         ease: "linear",
         // markers: true,         
         onEnter: () => $(this).find('.simple-text__number').addClass('simple-text__number_animation'),
         onLeaveBack: () => $(this).find('.simple-text__number').removeClass('simple-text__number_animation'),         
      });

    
      ScrollTrigger.create({
         trigger: ".simple-text-trigger" + index,
         start: "center center",
         scrub: true,
         ease: "linear",
         // markers: true,         
         onEnter: () => $(this).parent().parent().parent().find('.simple-image__pic').css('background-image', 'url('+ attImg+ ')'),
         onLeaveBack: () => $(this).parent().parent().parent().find('.simple-image__pic').css('background-image', 'url('+ prevAttImg+')')
         
      });

   });


   //анимация hero
   var hero = gsap.timeline()
      .from('.hero__title', { opacity: 0, y: -10, duration: 0.6, ease: "ease-in-out", })
      .from('.hero__description', { opacity: 0, y: -10, duration: 0.6, ease: "ease-in-out", delay: 0.2 })
      .to('.hero__advantages .advantage', { opacity: 1, duration: 0.1, stagger: 0.1, ease: "ease-in-out", })
      .from('.hero__button', { opacity: 0, y: 10, duration: 0.6, ease: "ease-in-out", delay: 0.1 })


   //Анимация Выгодно
   var pr = gsap.timeline({
      scrollTrigger: {
         trigger: '.profitable',
         start: "top 80%",
         //  markers:true,
         toggleActions: "play reverse play reverse"
      },
   })
      .from('.profitable .headline-section h2', { y: -30, opacity: 0, duration: 0.2, stagger: 0.3, ease: "ease-in-out", })
      .from('.profitable .headline-section p', { opacity: 0, duration: 0.2, stagger: 0.3, ease: "ease-in-out", })
      .from('.profitable-item', { opacity: 0, duration: 0.2, stagger: 0.3, ease: "ease-in-out", delay: 0.2, })
      .from(".profitable-item__number span", {
         duration: 1,
         ease: "ease-in-out",
         innerHTML: "0",
         snap: "innerHTML",
         // stagger: 0.3
      }, "<");


   //Анимация доступно
   var av1 = gsap.timeline({
      scrollTrigger: {
         trigger: '.available',
         start: "top 80%",
         // markers:true,
         toggleActions: "play reverse play reverse"
      },
   })
      .from('.available .headline-section h2', { y: -30, opacity: 0, duration: 0.2, stagger: 0.3, ease: "ease-in-out", })
      .from('.available .headline-section p', { opacity: 0, duration: 0.2, stagger: 0.3, ease: "ease-in-out", })

   $('.features').each(function (index, element) {
      $(this).addClass('features' + index)

      var av2 = gsap.timeline({
         scrollTrigger: {
            trigger: '.features' + index,
            start: "top 76%",
            // markers:true,
            toggleActions: "play reverse play reverse"
         },
      })
         .from('.features' + index, { opacity: 0, duration: 0.2, ease: "ease-in-out", })
         .from('.features' + index + ' .features__item', { opacity: 0, duration: 0.2, stagger: 0.1, ease: "ease-in-out", })

   })

   var av3 = gsap.timeline({
      scrollTrigger: {
         trigger: '.flats-price',
         start: "top 76%",
         // markers:true,
         toggleActions: "play reverse play reverse"
      },
   })
      .from('.flats-price', { opacity: 0, duration: 0.2, ease: "ease-in-out", })
      .from('.flats-price-item', { opacity: 0, duration: 0.2, stagger: 0.1, ease: "ease-in-out", })

   var av4 = gsap.timeline({
      scrollTrigger: {
         trigger: '.form-inline',
         start: "top 76%",
         // markers:true,
         toggleActions: "play reverse play reverse"
      },
   })
      .from('.form-inline', { opacity: 0, duration: 0.2, ease: "ease-in-out", })
      .from('.form-inline div', { opacity: 0, duration: 0.2, stagger: 0.1, ease: "ease-in-out", })
   
   var pr = gsap.timeline({
      scrollTrigger: {
         trigger: '.introduction',
         start: "top 80%",
         // markers:true,
         toggleActions: "play reverse play reverse"
      },
   })
      .from('.introduction .headline-section h2', { y: -30, opacity: 0, duration: 0.2, stagger: 0.3, ease: "ease-in-out", })
      .from('.introduction .headline-section p', { opacity: 0, duration: 0.2, stagger: 0.3, ease: "ease-in-out", })
      .from('.introduction-item', { opacity: 0, duration: 0.2, stagger: 0.3, ease: "ease-in-out", delay: 0.2, })
      .from(".introduction-item__number span", {
         duration: 1,
         ease: "ease-in-out",
         innerText: "0.0",
         snap: "innerText",
         // stagger: 0.3
      }, "<");



//Анимация кейсы

var cs1 = gsap.timeline({
   scrollTrigger: {
      trigger: '.cases',
      start: "top 80%",
      // markers:true,
      toggleActions: "play reverse play reverse"
   },
})
   .from('.cases .headline-section h2', { y: -30, opacity: 0, duration: 0.2, stagger: 0.3, ease: "ease-in-out", })   

$('.case').each(function (index, element) {
   $(this).addClass('case' + index)

   var cs2 = gsap.timeline({
      scrollTrigger: {
         trigger: '.case' + index,
         start: "top 76%",
         // markers:true,
         toggleActions: "play reverse play reverse"
      },
   })
      .from('.case' + index, { opacity: 0, duration: 0.2, ease: "ease-in-out", })
      .from('.case' + index + ' .case-slider-wrapper ', { opacity: 0, duration: 0.2, ease: "ease-in-out", })
      .from('.case' + index + ' .case__title',{ opacity: 0, duration: 0.2, ease: "ease-in-out", delay: 0.1 })
      .from('.case' + index + ' .case__description',{ opacity: 0, duration: 0.2, ease: "ease-in-out", delay: 0.2})      
      .from('.case' + index + ' .case__advantage .advantage', { opacity: 0, duration: 0.2, stagger: 0.1, ease: "ease-in-out", })
      .from('.case' + index + ' .case-number-item', { opacity: 0, duration: 0.2, stagger: 0.1, ease: "ease-in-out", })

})


// Анимация отзывы
var cs1 = gsap.timeline({
   scrollTrigger: {
      trigger: '.reviews',
      start: "top 80%",
      // markers:true,
      toggleActions: "play reverse play reverse"
   },
})
   .from('.reviews .headline-section h2', { y: -30, opacity: 0, duration: 0.2, stagger: 0.3, ease: "ease-in-out", })  
   .from('.review-stories', { opacity: 0, duration: 0.2, stagger: 0.3, ease: "ease-in-out", delay: 0.2, })




   }











   $('.case-slider').each(function () {

      var arrowRight = $(this).parent().parent().find('.case-slider-arrows__right')
      var arrowLeft = $(this).parent().parent().find('.case-slider-arrows__left')

      $(arrowRight).click(function (e) {
         e.preventDefault();
         var thisSlider = $(this).parent(this).parent(this).find('.slick-slider')
         thisSlider.slick('slickNext')
      });

      $(arrowLeft).click(function (e) {
         e.preventDefault();
         var thisSlider = $(this).parent(this).parent(this).find('.slick-slider')
         thisSlider.slick('slickPrev')
      });

      $(this).slick({
         dots: false,
         arrows: false,
         infinite: true,
         speed: 600         
      });
   });



   $('.stories-video-wrapper__play').click(function (e) {
      e.preventDefault();
      var thisVideo = $(this).parent().parent().find('video')[0]
      thisVideo.play()
      var thisBlock = $(this).parent().parent()
      $(thisBlock).toggleClass('stories-video-wrapper_play');

      $(thisVideo).on('timeupdate', function () {
         var currentTime = this.currentTime
         var duration = this.duration
         var progress = currentTime * 1 / duration         
         if (currentTime == duration) {
            thisVideo.pause()
            $(thisBlock).toggleClass('stories-video-wrapper_play');
         } else {

         }


      });

   });

   $('.stories-video-wrapper__pause').click(function (e) {
      e.preventDefault();
      var thisVideo = $(this).parent().parent().find('video')[0]
      thisVideo.pause()
      var thisBlock = $(this).parent().parent()
      $(thisBlock).toggleClass('stories-video-wrapper_play');
   });   


   $('.review-stories__play').click(function (e) {
      e.preventDefault();
      var thisVideo = $(this).parent().parent().find('video')[0]
      thisVideo.play()
      var thisBlock = $(this).parent().parent()
      $(thisBlock).toggleClass('review-stories_play');

      $(thisVideo).on('timeupdate', function () {
         var currentTime = this.currentTime
         var duration = this.duration
         var progress = currentTime * 1 / duration         
         if (currentTime == duration) {
            thisVideo.pause()
            $(thisBlock).toggleClass('review-stories_play');
         } else {

         }


      });

   });

   $('.review-stories__pause').click(function (e) {
      e.preventDefault();
      var thisVideo = $(this).parent().parent().find('video')[0]
      thisVideo.pause()
      var thisBlock = $(this).parent().parent()
      $(thisBlock).toggleClass('review-stories_play');
   });

   $('.js-tab').click(function (e) {
      e.preventDefault();
      var id = $(this).attr('data-tab'),
         content = $('.js-tab-content[data-tab-content="' + id + '"]')
      $('.js-tab.tab_active').removeClass('tab_active'); // 1
      $(this).addClass('tab_active'); // 2      
      $('.js-tab-content.tab-media_active').removeClass('tab-media_active'); // 3
      content.addClass('tab-media_active'); // 4      
   });



// $('.wpcf7-response-output').click(function (e) { 
//    e.preventDefault();
//    $(this).slideToggle();
// });

$('[href="#form-popup"]').magnificPopup({
   type: 'inline',
   // focus: '#name'
});


   function fixheader() {
      if ($(window).scrollTop() > 1) {
         $('header').addClass('header_fixed');
         return false;
      }
      else {         
         $('header').removeClass('header_fixed');
      }
   }

if (window.scrollY > 10) {
   fixheader()   
}

$(window).scroll(function(event) {   
   fixheader()
}); 

});
