
window.onscroll = function () {
    var posicion = window.pageYOffset || document.documentElement.scrollTop;
    // Recuramos el id de las imágenes
    var elemento1 = document.getElementById("icon_heart");
    var elemento2 = document.getElementById("icon_fire");
    // La colocamos la poción hacia la cual se dab mover
    elemento1.style.bottom = posicion * 0.1 + "px";
    elemento2.style.top = posicion * 0.1 + "px";
}