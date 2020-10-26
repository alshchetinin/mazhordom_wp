$(document).ready(function () {

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
});
