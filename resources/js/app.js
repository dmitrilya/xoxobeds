import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


const slider = document.querySelector(".slider");
const foregroundImage = document.querySelector(".image-foreground-container");

slider.addEventListener("input", (evt) => {
    const sliderRange = evt.target.value;

    foregroundImage.style.width = `${sliderRange}%`;
});