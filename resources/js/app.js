import './bootstrap';

import Alpine from 'alpinejs';
import mask from '@alpinejs/mask';

window.Alpine = Alpine;

Alpine.plugin(mask);

Alpine.start();

const slider = document.querySelector(".slider");
const foregroundImage = document.querySelector(".image-foreground-container");

slider.addEventListener("input", (evt) => {
    const sliderRange = evt.target.value;

    foregroundImage.style.width = `${sliderRange}%`;
    slider.style.setProperty('--left', `${sliderRange}%`);
});

$(document).ready(function() {
  $('.tilt').tilt({
    maxTilt: 5
  });
});