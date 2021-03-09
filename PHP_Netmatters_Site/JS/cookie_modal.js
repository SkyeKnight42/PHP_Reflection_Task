
const documentBody = document.getElementsByTagName("body")

const modalSettings = document.querySelector(".settings_button")
const modalAccept = document.querySelector('.modal_accept_button')
const modalContainer = document.getElementById('modal_container')
const modalOverlay = document.getElementById("modal_overlay")

// localStorage.setItem('cookie', 'false')

window.addEventListener('DOMContentLoaded', function() {

    window.scrollTo(0,0)

    if (localStorage.getItem('cookie') == null || 
        localStorage.getItem('cookie') == 'false') {

        enableModal()
    }
})

function enableModal() {

    documentBody[0].classList.add("document_hidden")
    modalContainer.classList.add('active')
    modalOverlay.classList.add('active')
}

modalAccept.addEventListener('click', function() {
    localStorage.setItem('cookie', 'true')

    documentBody[0].classList.remove("document_hidden")
    modalContainer.classList.remove('active')
    modalOverlay.classList.remove('active')
})
