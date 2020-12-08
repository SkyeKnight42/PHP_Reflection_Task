

const nameInput = document.getElementById('name_input')
const emailInput = document.getElementById('email_input')
const telephoneInput = document.getElementById('telephone_input')
const subjectInput = document.getElementById('subject_input')
const messageInput = document.getElementById('message_input')
const checkboxInput = document.getElementById('terms_conditions')
const sendButton = document.getElementById('contact_form_button')
const closeButton = document.getElementById('close_button')
const popUp = document.getElementById('success_pop_op')
const lettersOnly = /^[A-Za-z]+$/
const emailOnly = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
const numbersOnly = /^[0-9]+$/

sendButton.addEventListener('click', function() {
    let nameValue = nameInput.value
    let emailValue = emailInput.value
    let telephoneValue = telephoneInput.value
    let subjectValue = subjectInput.value
    let messageValue = messageInput.value
    let checkboxValue = checkboxInput.checked

    if (checkboxValue) {
        if (ValidateName(nameValue) && ValidateEmail(emailValue) && ValidateTelephone(telephoneValue) && ValidateSubject(subjectValue) && ValidateMessage(messageValue)) {

        }
    }
})

closeButton.addEventListener('click', function() {
    popUp.classList.remove('show_pop_up')
})
// TRUE = PASS

function ValidateName(value) {
    if (lettersOnly.test(value)) {
        nameInput.classList.remove('invalid_input')
        return true
    } else {
        nameInput.classList.add('invalid_input')
        return false
    }
}

function ValidateEmail(value) {
    if (emailOnly.test(value)) {
        emailInput.classList.remove('invalid_input')
        return true
    } else {
        emailInput.classList.add('invalid_input')
        return false
    }
}

function ValidateTelephone(value) {
    if (numbersOnly.test(value)) {
        telephoneInput.classList.remove('invalid_input')
        return true
    } else {
        telephoneInput.classList.add('invalid_input')
        return false
    }
}

function ValidateSubject(value) {
    if (value.length > 0) {
        subjectInput.classList.remove('invalid_input')
        return true
    } else {
        subjectInput.classList.remove('invalid_input')
        return false
    }
}

function ValidateMessage(value) {
    if (value.length > 0) {
        messageInput.classList.remove('invalid_input')
        return true
    } else {
        messageInput.classList.remove('invalid_input')
        return false
    }
}