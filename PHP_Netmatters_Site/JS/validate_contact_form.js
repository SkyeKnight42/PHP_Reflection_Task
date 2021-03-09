const nameInput = document.getElementById('name_input')
const emailInput = document.getElementById('email_input')
const telephoneInput = document.getElementById('telephone_input')
const subjectInput = document.getElementById('subject_input')
const messageInput = document.getElementById('message_input')
const checkboxInput = document.getElementById('checkbox_input')

const popUp = document.getElementById('success_pop_up')
const lettersOnly = /^[A-Za-z]+$/
const emailOnly = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
const numbersOnly = /^[0-9]+$/

console.log(nameInput)
// console.log("test log")
function ClearForm() {
    let name_input = document.getElementById("name_input")
    name_input.innerHTML = ""
    console.log("yolo")
}
