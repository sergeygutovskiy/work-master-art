<?php

function slider($images, $id)
{
    $slides = '';
    foreach ($images as $photo)
    {
        $slides .=
        <<<EOD
        <div class="slider__slide swiper-slide">
            <img src="$photo">
        </div>
        EOD;
    }

    return
    <<<EOD
    <div class="slider swiper-container" id="$id">
        <div class="slider__wrapper swiper-wrapper">
            $slides
        </div>

        <button class="slider-button slider-button_left slider__button slider__button_left"></button>
        <button class="slider-button slider-button_right slider__button slider__button_right"></button>

        <div class="slider__pagination"></div>
    </div>
    EOD;
}