import Swiper from 'swiper'

slider = jQuery ($) ->
  mySwiper = new Swiper('.swiper-container',
    loop: true
    autoHeight: true,
    pagination: el: '.slider__pagination'
    navigation:
      nextEl: '.slider__button-next'
      prevEl: '.slider__button-prev')

  $('[data-slider-image]').each ->
    background = $(this).data('slider-image')
    $(this).attr(style: "background-image: url('#{background}')")
export default slider
