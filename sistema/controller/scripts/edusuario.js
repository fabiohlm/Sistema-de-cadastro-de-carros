var vazio = function() {
    var cont = 0;
    if (document.getElementById('nome').value == null || document.getElementById('nome').value == '') {
        document.getElementById('nomevazio').style.color = 'red';
        document.getElementById('nomevazio').innerHTML = '*Este campo deve ser preenchido';
        document.getElementById('cadastrar').disabled = true;
    } else {
        document.getElementById('nomevazio').innerHTML = '';
        var cont = ++cont;
    }
     if (document.getElementById('sobrenome').value == null || document.getElementById('sobrenome').value == '') {
        document.getElementById('sobrenomevazio').style.color = 'red';
        document.getElementById('sobrenomevazio').innerHTML = '*Este campo deve ser preenchido';
        document.getElementById('cadastrar').disabled = true;
    } else {
        document.getElementById('sobrenomevazio').innerHTML = '';
        var cont = ++cont;
    }
    if (document.getElementById('loginusuario').value == null || document.getElementById('loginusuario').value == '') {
        document.getElementById('loginusuvazio').style.color = 'red';
        document.getElementById('loginusuvazio').innerHTML = '*Este campo deve ser preenchido';
        document.getElementById('cadastrar').disabled = true;
    } else {
        document.getElementById('loginusuvazio').innerHTML = '';
        var cont = ++cont;
    }
    if (document.getElementById('perfil').value == 'null') {
        document.getElementById('perfilvazio').style.color = 'red';
        document.getElementById('perfilvazio').innerHTML = '*Este campo deve ser preenchido';
        document.getElementById('cadastrar').disabled = true;
    } else {
        document.getElementById('perfilvazio').innerHTML = '';
        var cont = ++cont;
    }
    if (cont == 4){
        document.getElementById('cadastrar').disabled = false;
    } 
}
