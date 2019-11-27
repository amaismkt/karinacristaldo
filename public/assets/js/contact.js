$("#contact-form").submit(() => {
    event.preventDefault()

    let dados = $("#contact-form").serialize()

    $("#loading").show()

    $.post('send-email', dados, response => {
        console.log(response)
    })
    .done(()=>{
        exibirSucessoEmail()
        $("#loading").hide()
    })
})

$("#contato").submit(() => {
    event.preventDefault()

    let dados = $("#contato").serialize()

    $.post('/atualizar-contato', dados, response => {
        console.log(response)
    })
    .done(()=>{
        exibirSucesso()
    })
})

function exibirSucesso()
{
    $("#sucesso").fadeToggle(300)
    $("#erro").hide()

        window.setTimeout(() => {
            $("#sucesso").fadeToggle(300)

    }, 1500)
}

function exibirSucessoEmail()
{
    $("#sucesso").fadeToggle(300)
    $("#erro").hide()

        window.setTimeout(() => {
            $("#sucesso").fadeToggle(300)

    }, 1500)
}

$("#contato-email").click(()=>{
    $("#seu-email").val($("#contato-email-input").val())
    $("#nome-completo").focus()
})