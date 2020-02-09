window.addEventListener('load',function() {
    var imagenesProd = [];
    var imagenesNuskin = [];

    imagenesProd[0] = "res/absolute-repair.jpg";
    imagenesProd[1] = "res/anti-rotura.jpg";
    imagenesProd[2] = "res/crema-rulos.jpg";
    imagenesProd[3] = "res/enriquecedor.jpg";
    imagenesProd[4] = "res/kit-loreal.jpg";
    imagenesProd[5] = "res/matizadores.jpg";
    imagenesProd[6] = "res/olaplex.jpg";
    imagenesProd[7] = "res/pro-fiber.jpg";
    imagenesProd[8] = "res/tratamiento-intensivo.jpg";

    imagenesNuskin[0] = "nuskin/nus1.png";
    imagenesNuskin[1] = "nuskin/nus2.png";
    imagenesNuskin[2] = "nuskin/nus3.png";
    imagenesNuskin[3] = "nuskin/nus4.png";
    imagenesNuskin[4] = "nuskin/nus5.png";
    imagenesNuskin[5] = "nuskin/nus6.png";
    imagenesNuskin[6] = "nuskin/nus7.png";
    imagenesNuskin[7] = "nuskin/nus8.png";
    imagenesNuskin[8] = "nuskin/nus9.png";

    var i = 0;

    function deslizarImagenes(){

        var imagenes = document.getElementsByTagName('img');
        imagenes[3].src = imagenesProd[i];
        imagenes[4].src = imagenesNuskin[i];

        if(i < 8){ i++; }
        else { i = 0; }
    }

    setInterval(deslizarImagenes, 3000);

});