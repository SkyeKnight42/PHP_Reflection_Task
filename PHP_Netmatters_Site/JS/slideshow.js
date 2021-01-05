
let slideToShow = 1
let viewportWidth;
const slides = document.getElementsByClassName('slide')


document.addEventListener('DOMContentLoaded', function() {
    viewportWidth = window.innerWidth
    console.log("---")
})

window.addEventListener('resize', function() {
    if (window.innerWidth != viewportWidth) {
        viewportWidth = window.innerWidth

        for (let x = 0; x < slides.length; x++) {
            slides[x].style.width = viewportWidth + "px"
        }
    }

    console.log(viewportWidth)
})

function ScrollSlides() {

}

// Simple waiting function with a promise.
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms))
}