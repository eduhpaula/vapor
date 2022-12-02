function excluirJogo(idJogo) {
    let excluirJogo = confirm("Realmente deseja exluir este jogo?")

    if (excluirJogo == true) {
        window.open("excluir-jogo.php?id=" + idJogo, "_SELF")
    }

}
function excluirIdioma(idIdioma) {
    let excluirIdioma = confirm("Realmente deseja exluir este idioma?")

    if (excluirIdioma == true) {
        window.open("excluir-idioma.php?id=" + idIdioma, "_SELF")
    }

}
function excluirPlataforma(idPlataforma) {
    let excluirPlataforma = confirm("Realmente deseja exluir esta plataforma?")

    if (excluirPlataforma == true) {
        window.open("excluir-plataforma.php?id=" + idPlataforma, "_SELF")
    }

}
function excluirCategoria(idCategoria) {
    let excluirCategoria = confirm("Realmente deseja exluir esta categoria?")

    if (excluirCategoria == true) {
        window.open("excluir-Categoria.php?id=" + idCategoria, "_SELF")
    }

}
function arquivarMensagem(idMensagem) {
    let arquivarMensagem = confirm("Realmente deseja arquivar esta mensagem?")

    if (arquivarMensagem == true) {
        window.open("arquivar-mensagem.php?id=" + idMensagem, "_SELF")
    }

}

function removerElementoPorId(idElemento) {
    let elemento = document.getElementById(idElemento)

    if (elemento != null) {
        elemento.remove()
    }
}

function obterHoraAtual() {
    let data = new Date()
    let hora = data.getHours()
    let minutos = data.getMinutes()
    let segundos = data.getSeconds()
    
    let dia = data.getDate()
    let mes = data.getMonth()
    let ano = data.getFullYear()
  
    if (mes < 10){
      mes = "0" + mes
    }
  
    if (dia < 10){
      dia = "0" + dia
    }
  
    if (hora < 10){
      hora = "0" + hora
    }
  
    if (minutos < 10){
      minutos = "0" + minutos
    }
  
    if (segundos < 10){
      segundos = "0" + segundos
    }
  
    let dataAtual = dia + "/" + mes + "/" + ano + " - " + hora + ":" + minutos + ":" + segundos
  
    return dataAtual
  }
  
  let dataEHora = obterHoraAtual()
  console.log(dataEHora)

  





