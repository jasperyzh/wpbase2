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

/* document.addEventListener("DOMContentLoaded", () => {
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
}); */


// rellax_parallax
/* import Rellax from 'rellax';
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
}) */


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