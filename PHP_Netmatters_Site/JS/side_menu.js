

let burgerLines = document.getElementsByClassName('burger_line')
const burgerButton = document.getElementById('burger_button')
const side_menu = document.getElementById('side_menu')
const menu_overlay = document.getElementById('menu_overlay')
let push_items = document.getElementsByClassName('push-this')
let header = document.getElementById('headerElement')
let burgerState = false
let positionX
let positionY

burgerButton.addEventListener('click', function() {

    if (burgerState) {
        SideMenuOff()
    } else {
        SideMenuOn()
    }
})

menu_overlay.addEventListener('click', function() {
    SideMenuOff()
})

function SideMenuOn() {
    positionX = document.documentElement.scrollLeft
    positionY = document.documentElement.scrollTop
    document.body.classList.add('fixed_position')
    burgerLines[1].style.opacity = "0"
    burgerLines[0].classList.add('tilt_left')
    burgerLines[2].classList.add('tilt_right')
    menu_overlay.classList.add('active')
    burgerState = true
    side_menu.classList.add('side_menu_transform')

    for (let x = 0; x < push_items.length; x++) {
        push_items[x].classList.add('push-left')
    }
}

function SideMenuOff() {
    document.body.classList.remove('fixed_position')
    burgerLines[1].style.opacity = "1"
    burgerLines[0].classList.remove('tilt_left')
    burgerLines[2].classList.remove('tilt_right')
    side_menu.classList.remove('side_menu_transform')
    menu_overlay.classList.remove('active')
    burgerState = false
    for (let x = 0; x < push_items.length; x++) {
        push_items[x].classList.remove('push-left')
    }
}
