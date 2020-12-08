
let dropdown = document.getElementById('dropdown_button')
let hidden = document.getElementById('hidden_content')
let arrow = document.getElementById('dropdown_arrow')
let dropped = false

// console.log(hidden)
dropdown.addEventListener('click', () => {
    if (dropped) {
        // console.log(dropped)
        arrow.classList.remove('active')
        hidden.classList.remove('show_hidden')
        dropped = false
    } else {
        // console.log(dropped)
        arrow.classList.add('active')
        hidden.classList.add('show_hidden')
        dropped = true
    }
})