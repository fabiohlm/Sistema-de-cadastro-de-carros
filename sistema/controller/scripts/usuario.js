var checksenha = function() {
    if (document.getElementById('senha').value == document.getElementById('confsenha').value) {
        document.getElementById('mensagem').innerHTML = '';
        //document.getElementById('cadastrar').disabled = false;
        return true;
    }
    else {
        document.getElementById('cadastrar').disabled = true;
        document.getElementById('mensagem').style.color = 'red';
        document.getElementById('mensagem').innerHTML = '*Senhas diferentes';
        document.getElementById('cadastrar').disabled = true;
        // throw new Error("123");
        return false;
    }
}

var valSenha = function() {
    var strength = 0;
    if (document.getElementById('senha').value.match(/[a-z]+/)) {
        strength += 1;
        document.getElementById('vsmin').style.color = "black";
    } else {
        document.getElementById('vsmin').style.color = "red";
    }
    if (document.getElementById('senha').value.match(/[A-Z]+/)) {
        strength += 1;
        document.getElementById('vsmai').style.color = "black";
    } else {
        document.getElementById('vsmai').style.color = "red";
    }
    if (document.getElementById('senha').value.match(/[0-9]+/)) {
        strength += 1;
        document.getElementById('vsnum').style.color = "black";
    } else {
        document.getElementById('vsnum').style.color = "red";
    }
    if (document.getElementById('senha').value.match(/[$@#&!.,%*¨(){}"']+/)) {
        strength += 1;
        document.getElementById('vscaresp').style.color = "black";
    } else {
        document.getElementById('vscaresp').style.color = "red";
    }
    if (document.getElementById('senha').value.length >= 6) {
        strength += 1;
        document.getElementById('vsmincar').style.color = "black";
    } else {
        document.getElementById('vsmincar').style.color = "red";
    }
    if (strength < 5) {
        
    } 
    switch (strength) {
        case 0:
            document.getElementById("barra").value = 0;
            //document.getElementById('cadastrar').disabled = true;
            // throw new Error("123");
            return false;
        case 1:
            document.getElementById("barra").value = 20;
            //document.getElementById('cadastrar').disabled = true;
            // throw new Error("123");
            return false;
        case 2:
            document.getElementById("barra").value = 40;
            //document.getElementById('cadastrar').disabled = true;
            // throw new Error("123");
            return false;
        case 3:
            document.getElementById("barra").value = 60;
            //document.getElementById('cadastrar').disabled = true;
            // throw new Error("123");
            return false;
        case 4:
            document.getElementById("barra").value = 80;
            //document.getElementById('cadastrar').disabled = true;
            // throw new Error("123");
            return false;
        case 5:
            document.getElementById("barra").value = 100;
            //document.getElementById('cadastrar').disabled = false;
            return true;
    }
}
var vazio = function(ncampo, valSenha = 0, checksenha = 0) {
    if (!(document.getElementById('nome').value == null || document.getElementById('nome').value == '') && !(document.getElementById('sobrenome').value == null || document.getElementById('sobrenome').value == '') && !(document.getElementById('loginusuario').value == null || document.getElementById('loginusuario').value == '') && !(document.getElementById('perfil').value == 'null') && !(document.getElementById('senha').value == 'null') && !(document.getElementById('confsenha').value == 'null' && valSenha == 1 && checksenha == 1)){
        document.getElementById('nomevazio').innerHTML = '';
        document.getElementById('sobrenomevazio').innerHTML = '';
        document.getElementById('loginusuvazio').innerHTML = '';
        document.getElementById('perfilvazio').innerHTML = '';
        document.getElementById('senhavazia').innerHTML = '';
        document.getElementById('confsenhavazia').innerHTML = '';
        document.getElementById('cadastrar').disabled = false;
    } else {
        if (ncampo == 'nome' || ncampo == 'cadastrar'){
            if (document.getElementById('nome').value == null || document.getElementById('nome').value == '') {
                document.getElementById('nomevazio').style.color = 'red';
                document.getElementById('nomevazio').innerHTML = '*Este campo deve ser preenchido';
                document.getElementById('cadastrar').disabled = true;
                //return false;
            } else {
                document.getElementById('nomevazio').innerHTML = '';
                //return true
            }
        }
        if (ncampo == 'sobrenome' || ncampo == 'cadastrar') {
            if (document.getElementById('sobrenome').value == null || document.getElementById('sobrenome').value == '') {
                document.getElementById('sobrenomevazio').style.color = 'red';
                document.getElementById('sobrenomevazio').innerHTML = '*Este campo deve ser preenchido';
                document.getElementById('cadastrar').disabled = true;
                //return false;
            } else {
                document.getElementById('sobrenomevazio').innerHTML = '';
                //return true
            }
        }
        if (ncampo == 'loginusuario' || ncampo == 'cadastrar') {
            if (document.getElementById('loginusuario').value == null || document.getElementById('loginusuario').value == '') {
                document.getElementById('loginusuvazio').style.color = 'red';
                document.getElementById('loginusuvazio').innerHTML = '*Este campo deve ser preenchido';
                document.getElementById('cadastrar').disabled = true;
                //return false;
            } else {
                document.getElementById('loginusuvazio').innerHTML = '';
                //return true
            }
        }
        if (ncampo == 'perfil' || ncampo == 'cadastrar') {
            if (document.getElementById('perfil').value == 'null') {
                document.getElementById('perfilvazio').style.color = 'red';
                document.getElementById('perfilvazio').innerHTML = '*Este campo deve ser preenchido';
                document.getElementById('cadastrar').disabled = true;
                //return false;
            } else {
                document.getElementById('perfilvazio').innerHTML = '';
                //return true
            }
        }
        if (ncampo == 'senha' || ncampo == 'cadastrar') {
            if (document.getElementById('senha').value == 'null') {
                document.getElementById('senhavazia').style.color = 'red';
                document.getElementById('senhavazia').innerHTML = '*Este campo deve ser preenchido';
                document.getElementById('cadastrar').disabled = true;
                //return false;
            } else {
                document.getElementById('senhavazia').innerHTML = '';
                //return true
            }
        }
        if (ncampo == 'confsenha' || ncampo == 'cadastrar') {
            if (document.getElementById('confsenha').value == 'null') {
                document.getElementById('confsenhavazia').style.color = 'red';
                document.getElementById('confsenhavazia').innerHTML = '*Este campo deve ser preenchido';
                document.getElementById('confcadastrar').disabled = true;
                //return false;
            } else {
                document.getElementById('senhavazia').innerHTML = '';
                //return true
            }
        } 
    }
}
var funcMaster = function(ncampo = 0) {
    // vazio(ncampo);
    //if (ncampo == 'senha' || ncampo == 'confsenha' || ncampo == 'cadastrar') {}
    if (valSenha() && checksenha()){}    
        vazio(ncampo,1,1);
    
    // if (checksenha() == true && vazio() == true && valSenha() == true) {
    //     document.getElementById('cadastrar').disabled = false;
    // } else {
    //     document.getElementById('cadastrar').disabled = true;
    // }
}



