import './bootstrap';

$('.my-slider').slick({
    centerMode: true,
    centerPadding: '287px',
    slidesToShow: 1,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});


// Код для модального окна

let model = document.querySelector('.model-for-menu');
let search = document.querySelector('.under-block-menu-ul-icons-search');
let icons = document.querySelector('.icons-xmark');

search.addEventListener("click", function (e) {
    model.classList.add('block-open')
})

icons.addEventListener("click", function (e) {
    model.classList.remove('block-open')
})
