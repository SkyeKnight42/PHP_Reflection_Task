

let burgerLines = document.getElementsByClassName('burger_line')
const burgerButton = document.getElementById('burger_button')
const side_menu = document.getElementById('side_menu')
const menu_overlay = document.getElementById('menu_overlay')
let push_items = document.getElementsByClassName('push-this')

let burgerState = false

// #region
// function addEventListener(object, event, func) {
//     if ('addEventListener' in window) {
//         object.addEventListener(event, func)
//     } else if ('attachEvent' in window) {
//         object.attachEvent('on'+event, func)
//     }
// }

// addEventListener(burgerButton, 'click', function() {
//     if (burgerState) {
//         SideMenuOff()
//     } else {
//         SideMenuOn()
//     }
// })
// #endregion
// addEventListener(menu_overlay, 'click', SideMenuOff())

// DONE
burgerButton.addEventListener('click', function() {
    // console.log('Button Clicked')
    // console.log(window.scrollY)

    if (burgerState) {
        SideMenuOff()
    } else {
        SideMenuOn()
    }
})

// DONE
menu_overlay.addEventListener('click', function() {
    SideMenuOff()
})

document.addEventListener('scroll', function() {
    // console.log(window.scrollY)
    // document.scrollTop = 100 + "px"
})

function SideMenuOn() {
    console.log(window.scrollY)
    
    let scrollValue = window.scrollY
    document.body.style.top = window.scrollY + "px"
    document.body.style.position = 'fixed'

    burgerLines[1].style.opacity = "0"
    burgerLines[0].classList.add('tilt_left')
    burgerLines[2].classList.add('tilt_right')
    side_menu.classList.add('side_menu_transform')
    menu_overlay.classList.remove('deactive')
    burgerState = true

    // window.scrollY = -scrollValue

    // let valueString = window.scrollY.toString() + "px"
    // console.log(valueString)


    for (let x = 0; x < push_items.length; x++) {
        push_items[x].classList.add('push-left')
    }
}

function SideMenuOff() {
    burgerLines[1].style.opacity = "1"
    burgerLines[0].classList.remove('tilt_left')
    burgerLines[2].classList.remove('tilt_right')
    side_menu.classList.remove('side_menu_transform')
    menu_overlay.classList.add('deactive')
    burgerState = false

    document.body.style.position = ''
    document.body.style.top = ''

    for (let x = 0; x < push_items.length; x++) {
        push_items[x].classList.remove('push-left')
    }
}