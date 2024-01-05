import * as bootstrap from "bootstrap";
console.log("bootstrap: ", bootstrap);

import "./scss/styles.scss";

// header

const siteHeader = document.querySelector("#site-header");

window.addEventListener("scroll", function () {
    if (!siteHeader) return;
    if (window.scrollY > 0) {
        siteHeader.classList.add("slim");
    } else {
        siteHeader.classList.remove("slim");
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const mainElement = document.querySelector("body > .site-container > main");

    // Step 2: Create a function to update margin-top
    function updateMarginTop() {
        if (!siteHeader) return;
        const headerHeight = siteHeader.offsetHeight;
        mainElement.style.marginTop = `${headerHeight}px`;
    }

    // Step 3: Call the function initially to set the margin
    updateMarginTop();

    // Step 4: Listen for resize events and update margin
    window.addEventListener("resize", updateMarginTop);

    // Step 5: Optional - Listen for other events that may change the header's height
    // e.g., window.addEventListener('someEvent', updateMarginTop);
});

// gsap
/* import { TweenMax } from "gsap";

var tweenBoxes = document.querySelectorAll(".tweenbox");
window.addEventListener("mousemove", (e) => {
    TweenMax.killTweensOf();
    var xbg = (e.pageX * -1) / 30,
        ybg = (e.pageY * -1) / 30;
    tweenBoxes.forEach(function (box, index) {
        TweenMax.to(box, 0.5, {
            x: xbg + "px",
            y: ybg + "px",
            delay: 0 + index / 300,
        });
    });
}); */

import { gsap } from "gsap";

const tweenBoxes = document.querySelectorAll(".tweenbox");

window.addEventListener("mousemove", (e) => {
    gsap.killTweensOf(".tweenbox");

    const xbg = (e.pageX * -1) / 30,
        ybg = (e.pageY * -1) / 30;

    tweenBoxes.forEach((box, index) => {
        gsap.to(box, {
            duration: 0.5,
            x: xbg,
            y: ybg,
            delay: index / 300
        });
    });
});

// rellax_parallax
import Rellax from 'rellax';


document.addEventListener("DOMContentLoaded", ()=>{

    var rellax = new Rellax(".rellax", {
        speed: 2,
        center: false,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false,
    });
    
    // resize .rellax height
    window.addEventListener("load", () => {
        const totalHeight = document.body.scrollHeight;
        const rellaxElement = document.querySelector(".rellax");
        rellaxElement.style.height = totalHeight + "px";
    });
    
    window.addEventListener("resize", () => {
        const totalHeight = document.body.scrollHeight;
        const rellaxElement = document.querySelector(".rellax");
        rellaxElement.style.height = totalHeight + "px";
    });
    
    // rellax-divider
    var rellax = new Rellax(".divider", {
        speed: 3,
        center: true,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false,
    });
})


/* import Swiper from 'swiper';

// frontpage_swiper
new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 10,
        stretch: 0,
        depth: 50,
        modifier: 1,
        // slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    loop: true,
}); */


// frontpage_modal
document.addEventListener('DOMContentLoaded', function () {
    var videoModal = document.getElementById('videoModal');
    var videoIframe = document.getElementById('video');
    var videoSrc = "https://www.youtube.com/embed/TXBqtglNArY"; // Replace with your YouTube video ID

    videoModal.addEventListener('show.bs.modal', function () {
        videoIframe.src = videoSrc;
    });

    videoModal.addEventListener('hide.bs.modal', function () {
        videoIframe.src = '';
    });
});