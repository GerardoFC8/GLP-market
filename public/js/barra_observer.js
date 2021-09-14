window.addEventListener("scroll", () => {
    const scrolled = window.scrollY;
    // TODO hacer desaparece cuando scroll abajo y arriba

    // sticky header
    const header = document.querySelector("header");
    const compensar = document.querySelector(".sobre_nosotros");

    if (window.pageYOffset > header.offsetTop) {
        header.classList.add("sticky");
        compensar.classList.add("compensar");
    }else{
        header.classList.remove("sticky");
        compensar.classList.remove("compensar");
    }

    // parallax
    document.querySelector(".container-img img").style.paddingBottom = scrolled * .6 + "px";

});
