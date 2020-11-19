import './styles/main.scss';
$ = jQuery;

$(document).ready(function(){
    $("#current-year").html(new Date().getFullYear());
    }
);

// Frontpage navbar sticky on scroll
window.addEventListener("scroll", function(){
    const nav = document.querySelector("nav");
    const logoWhite = document.querySelector(".logo--white");
    const logoBlack = document.querySelector(".logo--black");
    nav.classList.toggle("sticky", window.scrollY > 0);
    if(window.scrollY > 0){
        logoWhite.style.display = "none";
        logoBlack.style.display = "inline";
    } else {
        logoWhite.style.display = "inline";
        logoBlack.style.display = "none";
    }
});
