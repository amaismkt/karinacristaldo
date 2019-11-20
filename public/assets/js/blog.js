$("#texto").jqte()

$("#post").submit(() => {

    event.preventDefault()
    let dados = $("#post").serialize()

    console.log(dados)

    $.post('../publicar-post', dados, response => {
        console.log(response)
    })
    .done(() => {
        exibirSucesso()
    })
    .fail(() => $("#erro").show(200))

})

function exibirSucesso()
{
    $("#sucesso").fadeToggle(300)
    $("#erro").hide()

        window.setTimeout(() => {
            $("#sucesso").fadeToggle(300)

    }, 1500)
}