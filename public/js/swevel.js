
// Team
var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 10,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });

  // Milestone
$(".milestone-content").hover( function() {
    $(this).addClass("active").css('transition','ease .5s').prevAll().removeClass("active");
    $(this).nextAll().removeClass("active");
    $(this).find('.bead').addClass('active').css('transition','all .7s');            
});
$('.milestone-content').mouseleave(function(){
    $(this).find('.bead').removeClass('active');
})

$('.modal-content-milestone').css('border-radius','20px');
// Jquery
let heightContainerMilestone = $('.container-milestone')[0].scrollHeight;        

$('.line-milestone').css('height',heightContainerMilestone - 250);