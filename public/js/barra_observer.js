window.addEventListener("scroll", () => {
    const scrolled = window.scrollY;

    if(scrolled){
        document.getElementById("barra").style.visibility = "visible";
    }

    // sticky header
    const header = document.querySelector("header");
    console.log("Header", header.offsetTop)
    console.log("window", window.pageYOffset)

    if (window.pageYOffset > header.offsetTop) {
        header.classList.add("sticky");
    }else{
        header.classList.remove("sticky");
    }

});


