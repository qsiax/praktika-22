const swiperMain = new Swiper('.home__item-wrapper', {
    loop: true,
    speed: 600,
    slidesPerView: 5,
    spaceBetween: 20,

    navigation: {
      nextEl: '.home__item-arrow-next',
      prevEl: '.home__item-arrow-prev',
    },
  });

const headerS = document.querySelector('.header');

window.addEventListener('scroll', () => {
  headerS.classList.toggle('sticky', window.pageYOffset > 950);
})