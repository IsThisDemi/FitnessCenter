function caricamento() {
    for (var key in dettagli_form) {
        var input = document.getElementById(key);
        campoDefault(input);
        input.onfocus = function () {
            campoPerInput(this);
        };
        input.onblur = function () {
            validazioneCampo(this);
        };
    }
}

function campoDefault(input) {
    input.className = "default-text";
    input.value = dettagli_form[input.id][0];
}

function campoPerInput(input) {
    if (input.value == dettagli_form[input.id][0]) {
        input.value = "";
        input.className = "";
    }
}

function validazioneCampo(input) {
    var p = input.parentNode;
    if (p.children.length == 2) {
        p.removeChild(p.children[1]);
    }
    var regex = dettagli_form[input.id][1];
    var text = input.value;
    if ((text == dettagli_form[input.id][0]) || (text.search(regex) != 0)) {
        mostraErrore(input);
        input.focus();
        input.select();
        return false;
    }
    return true;
}

function validazioneForm() {
    for (var key in dettagli_form) {
        var input = document.getElementById(key);
        if (!validazioneCampo(input)) {
            return false;
        }
    }
    return true;
}

function mostraErrore(input) {
    var p = input.parentNode;
    var e = document.createElement("strong");
    e.className = "errorSuggestion";
    e.appendChild(document.createTextNode(dettagli_form[input.id][2]));
    p.appendChild(e);
}
