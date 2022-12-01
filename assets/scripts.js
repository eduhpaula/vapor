function removerElementoPorId(idElemento) {
    let elemento = document.getElementById(idElemento)

    if (elemento != null) {
        elemento.remove()
    }
}