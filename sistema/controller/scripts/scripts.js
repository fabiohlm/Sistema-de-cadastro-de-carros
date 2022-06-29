function nousuVazio(){
  var logusu = document.getElementById("loginusuario");
  if (!logusu.value) {
    document.getElementById("mensnomeusu").innerHTML = "*O campo acima não pode estar vazio"
  }
}

function senhaVazia(){
  var senha = document.getElementById("senha");
  if (!senha.value) {
    document.getElementById("menssenha").innerHTML = "*O campo acima não pode estar vazio"
  }
}


  