import '../scss/app.scss';

import SwiperCore, { Navigation, Pagination } from 'swiper/core';
SwiperCore.use([Navigation, Pagination]);

function render_slider(id) {
    return new SwiperCore(`#${id}`, {
        slidesPerView: 1,
        autoHeight: true,
        navigation: {
            prevEl: `#${id} .slider-button_left`,
            nextEl: `#${id} .slider-button_right`,
        },
        pagination: {
            el: `#${id} .slider__pagination`,
            bulletClass: 'slider__bullet',
            bulletActiveClass: 'active',
            clickable: true,
        }
    });
}

const slider_1 = render_slider('slider-1');
const slider_2 = render_slider('slider-2');
const slider_3 = render_slider('slider-3');
const slider_4 = render_slider('slider-4');
const slider_5 = render_slider('slider-5');
const slider_6 = render_slider('slider-6');
const slider_7 = render_slider('slider-7');
const slider_8 = render_slider('slider-8');

const comments_slider = new SwiperCore('#comments-slider', {
    slidesPerView: 1,
    spaceBetween: 64,
    autoHeight: true,
    navigation: {
        prevEl: `#comments-slider .slider-button_left`,
        nextEl: `#comments-slider .slider-button_right`,
    },
    pagination: {
        el: '#comments-slider .slider__pagination',
        bulletClass: 'slider__bullet',
        bulletActiveClass: 'active',
        clickable: true,
    },
});
