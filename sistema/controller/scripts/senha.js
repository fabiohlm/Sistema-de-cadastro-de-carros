var checksenha = function() {
    var cont = 0;
    if (document.getElementById('senha').value == document.getElementById('confsenha').value) {
        document.getElementById('sendife').innerHTML = '';
        var cont = ++cont;
    }
    else {
        document.getElementById('sendife').style.color = 'red';
        document.getElementById('sendife').innerHTML = '*Senhas diferentes';
        document.getElementById('cadastrar').disabled = true;
    }
    if (document.getElementById('senha').value == null || document.getElementById('senha').value == '') {
        document.getElementById('senvaz').style.color = 'red';
        document.getElementById('senvaz').innerHTML = '*Este campo deve ser preenchido';
        document.getElementById('cadastrar').disabled = true;
    } else {
        document.getElementById('senvaz').innerHTML = '';
        var cont = ++cont;
    }
     if (document.getElementById('confsenha').value == null || document.getElementById('confsenha').value == '') {
        document.getElementById('confsenvaz').style.color = 'red';
        document.getElementById('confsenvaz').innerHTML = '*Este campo deve ser preenchido';
        document.getElementById('cadastrar').disabled = true;
    } else {
        document.getElementById('confsenvaz').innerHTML = '';
        var cont = ++cont;
    }
    if (cont == 3){
        document.getElementById('cadastrar').disabled = false;
    }
}