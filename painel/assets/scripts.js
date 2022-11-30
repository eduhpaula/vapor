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


function removeErrorMessage() {
    let errorMessage = document.getElementById("error-message-index")

    if (errorMessage != null) {
        errorMessage.remove()
    }
}
function removeErrorMessageCategoria() {
    let errorMessage = document.getElementById("error-novacategoria-js")

    if (errorMessage != null) {
        errorMessage.remove()
    }
}
function removeErrorMessageIdioma() {
    let errorMessage = document.getElementById("error-novoidioma-js")

    if (errorMessage != null) {
        errorMessage.remove()
    }
}
function removeErrorMessagePlataforma() {
    let errorMessage = document.getElementById("error-novaplataforma-js")

    if (errorMessage != null) {
        errorMessage.remove()
    }
}






