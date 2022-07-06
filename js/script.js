let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');

let menu = document.querySelector('#menu-bar')
let navbar = document.querySelector('.navbar')



// saat ngescroll akan ditutup
window.onscroll = () =>{
    menu.classList.remove('fa-times')
    navbar.classList.remove('active')
}


menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times')
    navbar.classList.toggle('active')
} );

// saat mencet 

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
} );

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
} );
