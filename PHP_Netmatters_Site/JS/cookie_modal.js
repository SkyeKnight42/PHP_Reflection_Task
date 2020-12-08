const modalSettings = document.querySelector(".settings_button")
const modalAccept = document.querySelector('.modal_accept_button')
const modalContainer = document.getElementById('modal_container')
const modalOverlay = document.getElementById("modal_overlay")

// localStorage.setItem('cookie', 'false')

window.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('cookie') == 'true') {
        // console.log("Cookie has already been accepted.")
        disableModal()

    } else if (localStorage.getItem('cookie') == null || 
    localStorage.getItem('cookie') == 'false') {
        // console.log("Cookie has not been accepted.")
        showModal()
    }
})

function noScroll() {
    window.scrollTo(0,0)
}

function showModal() {
    // modalObject.classList.remove('deactive')
    // modalOverlay.classList.remove('deactive')

    // modalOverlay.classList.add('active')
    // modalObject.classList.add('active')

    window.addEventListener('scroll', noScroll)
}

function disableModal() {
    // modalObject.classList.add('deactive')
    // modalOverlay.classList.add('deactive')

    modalContainer.classList.add('deactive')
    modalOverlay.classList.add('deactive')

    window.removeEventListener('scroll', noScroll)
}

modalAccept.addEventListener('click', function() {
    // console.log('click')
    localStorage.setItem('cookie', 'true')
    disableModal()
})




// on page load, load the cookie