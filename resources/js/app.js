import './bootstrap';
import {data} from "autoprefixer";

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


// Код для поиска

let search_input = document.querySelector('.input_model');
let button = document.querySelector('.search-button-input');
let div = document.querySelector('.block-under-film');

button.onclick = function () {
    /**
    * Fetch это запрос
    */
    fetch('/search?search=' + search_input.value, {
        method: "GET"
    })
        /**
        * then идет по шагу
        */
        .then(response => response.json())
        .then(data =>{
            div.innerHTML = '';
            if (data.data.length === 0) {
                div.insertAdjacentHTML('beforeend', `
                   <span class="error-comment-js" style="color: red">Ничего не найдено!!</span>
                `);
            } else {
                data.data.forEach(function (item) {
                    div.insertAdjacentHTML('beforeend', `
                         <a href="/film/${item.id}">
                            <div class="block-films">
                                <div class="film">
                                    <div class="block-window">
                                        <div class="block-under-window">
                                            <div class="icons-window">
                                                <div class="icons-window-bookmark">
                                                    <i class="fa-regular fa-bookmark"></i>
                                                </div>
                                                <div class="icons-window-square">
                                                    <i class="fa-regular fa-share-from-square"></i>
                                                </div>
                                                <div class="icons-window-star">
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="icons-window-eye-slash">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-under-window-1">
                                            <div class="block-window-information">
                                                <h1>0,9</h1>
                                                <span>1982</span>
                                                <span>СССР</span><br>
                                                <span>Драмы</span>
                                                <h5>91 минут</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="../img/thumbs.jpg">
                                </div>
                                <div class="title-film">
                                    <p>${item.name}</p>
                                </div>
                                <div class="text-p">
                                    <p>Бесплатно</p>
                                </div>
                            </div>
                        </a>
                `)

                })
            }

        })
}

