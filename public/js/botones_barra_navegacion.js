const links = document.querySelectorAll(".scrollto");

links.forEach((item) => {
    item.addEventListener("click", function () {
        if (
            window.location.href.indexOf("producto") !== -1 ||
            window.location.href.indexOf("contacto") !== -1
        ) {
            window.location.href = "/?to=" + item.getAttribute("data-link");
        } else {
            const adonde = document.getElementById(
                item.getAttribute("data-link")
            );
            adonde.scrollIntoView({ behavior: "smooth", block: "start" });
        }
    });
});
