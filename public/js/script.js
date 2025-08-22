/*menu fixo ao rolar página*/
let header = document.querySelector('.header .header-main');
let navbar = document.querySelector('.header .header-main .navbar');

document.querySelector('#menu').onclick = () => {
    navbar.classList.toggle('active');
    searchform.classList.remove('active');
}

/*formulário de busca*/
let searchform = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    searchform.classList.toggle('active');
    navbar.classList.remove('active');
}

//ao rolar a página
window.onscroll = () =>{
    if(window.scrollY > 120){
        header.classList.add('active');
    } else{
        header.classList.remove('active');
        navbar.classList.remove('active');
        searchform.classList.remove('active');
    }

    /*Adiciona a classe active no botão de ir ao topo ao rolar a página*/
    if (window.scrollY > 60) {
        document.querySelector('#scroll-top').classList.add('active')
    }else{
        document.querySelector('#scroll-top').classList.remove('active')
    }
}

/*category slider*/
var swiper = new Swiper(".category-slider", {
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    grabCursor: true,
    loop: true,
    spaceBetween: 10,
    centeredSlides: true,
    breakpoints: {
        0:{
            slidesPerView: 2,
        },
        768:{
            slidesPerView: 4,
        },
        992:{
            slidesPerView: 6,
        },
    },
});
