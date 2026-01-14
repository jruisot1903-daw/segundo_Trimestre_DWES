var boton = document.getElementById("btPedi");

boton.addEventListener("click", function (e) {
    e.preventDefault();

    var min = document.getElementById("min").value;
    var max = document.getElementById("max").value;
    var patron = document.getElementById("cadena").value;

    var url = "/pract2/pedirDatos"
            + "?min=" + encodeURIComponent(min)
            + "&max=" + encodeURIComponent(max)
            + "&patron=" + encodeURIComponent(patron);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);

                   var cadena = "{" + data.numeros.join(", ") + "}\n";
                    cadena += "{" + data.palabras.join(", ") + "}"; 
                    document.getElementById("result").innerText = cadena;
            }
        }
    };

    xhr.send();
});
