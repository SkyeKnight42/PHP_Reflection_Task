

let card_text = document.getElementsByClassName('news_description');

document.addEventListener("DOMContentLoaded", function() {

    for (let x = 0; x < card_text.length; x++) {
        let textToCrop = card_text[x].innerHTML

        let croppedText = textToCrop.substring(0, 91)
        croppedText += "..."

        card_text[x].innerHTML = croppedText
    }
})
