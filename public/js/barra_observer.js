window.addEventListener("scroll", () => {
    const scrolled = window.scrollY;
    //todo hacer desaparece cuando scroll abajo y arriba

    // sticky header
    const header = document.querySelector("header");

    if (window.pageYOffset > header.offsetTop) {
        header.classList.add("sticky");
    }else{
        header.classList.remove("sticky");
    }

    // parallax
    const objeto = document.querySelector(".container-img img");
    objeto.style.paddingBottom = scrolled * .6 + "px";
});
