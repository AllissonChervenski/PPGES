
function showText(a, b) {
    var element = document.getElementById(a);
    var text = document.getElementById(b);
    element.classList.toggle("aberto");
    if (element.classList.contains("aberto")) {
        $(element).fadeIn(500);
        text.innerText = "Ler menos";
    } else {
        $(element).fadeOut(500);
        text.innerText = "Ler mais";

    }

}

function showTable(a, b) {
    var element = document.getElementById(a);
    var text = document.getElementById(b);
    element.classList.toggle("aberto");
    if (element.classList.contains("aberto")) {
        $(element).fadeIn(500);
        text.innerHTML = "Fechar";
    } else {
        $(element).fadeOut(500);
        text.innerHTML = "Visualizar";
    }

}

function showBorder(a) {
    var element = document.getElementById(a);
    if (element.classList.contains("bordering")) {
        element.classList.remove("bordering");
    }
    else {
        setTimeout(function () {
            element.classList.toggle("bordering");
        }, 0.5 * 1000);
    }
}


