$("#texto").jqte()

function checkExtension()
{
    if($("#imagem").val() != ""){
        let extension = $("#imagem").val().replace(/^.*\./, '')
        if(extension != 'png' && extension != 'jpg'){
            alert("Formato de imagem não suportado.")
            return false
        }else{
            return true
        }
    }
    return true
}

$("#post").submit(() => {

    event.preventDefault()
    let dados = $("#post").serialize()

    img = $("#imagem").val()
    imagem = img.replace(`C:\\fakepath\\`, '')

    dados = dados + '&imagem='+imagem

    if(checkExtension()){
        $.post('../publicar-post', dados, response => {
            uploadImg()
        })
        .done(() => {
            exibirSucesso()
        })
        .fail(() => $("#erro").show(200))
    }

})

function exibirSucesso()
{
    $("#sucesso").fadeToggle(300)
    $("#erro").hide()

        window.setTimeout(() => {
            $("#sucesso").fadeToggle(300)

    }, 1500)
}

function uploadImg()
{
    let fd = new FormData()
    let files = $('#imagem')[0].files[0]

    let token = $('meta[name="csrf-token"]').attr('content')

    fd.append('file',files)
    fd.append('_token', token)

    $.ajax({
        url: '/file-upload',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
            if(response == 0){
                alert('Ocorreu um erro ao enviar a imagem')
            }
        },
    })
}