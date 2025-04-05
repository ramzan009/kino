import './bootstrap';

// Код для текста

let text = document.querySelector('.block-description-text-film-2');
let buttons = document.querySelector('.button-details-film');

buttons.addEventListener("click", function (e) {
    text.classList.toggle('block-description-open')
    if (text.classList.contains('block-description-open')) {
        buttons.innerHTML = 'Свернуть детали'
    }else {
        buttons.innerHTML = 'Детали о фильме'
    }
})
