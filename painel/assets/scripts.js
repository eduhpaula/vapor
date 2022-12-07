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

function obterDataHoraAtual() {
    const data = new Date()
    let horas = data.getHours()
    let minutos = data.getMinutes()
    let segundos = data.getSeconds()
    let dia = data.getDate() 
    let mes = data.getMonth()+1
    let ano = data.getFullYear()
    
    if(horas <= 9) {
      horas = "0" + hora
    }
  
    if(minutos <= 9) {
      minutos = "0" + minutos
    }
  
    if(segundos <= 9) {
      segundos = "0" + segundos
    }
  
  
    let dataAtual = dia + "/" + mes + "/" + ano + " - " + horas + ":" + minutos + ":" + segundos; 
  
  
    return dataAtual
}
  
function updateClock() {

    const clock = document.getElementById('clock')
    clock.innerHTML = obterDataHoraAtual()

    setInterval(function () {
      clock.innerHTML = obterDataHoraAtual()
      1000
    })

}
  
function transformar_texto_maiusculo(elemento){
    let valor_que_usuario_digitou = elemento.value
    elemento.value = (valor_que_usuario_digitou.toUpperCase())
}

function primeira_letra_maiuscula(elemento){
    elemento.value = elemento.value[0].toUpperCase() + elemento.value.slice(1).toLowerCase()
}




