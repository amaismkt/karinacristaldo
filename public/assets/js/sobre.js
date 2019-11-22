$("#atualizar-sobre").submit(() => {
    event.preventDefault()
    let dados = $("#atualizar-sobre").serialize()
    img = $("#foto").val()
    ico = $("#icone").val()
    imagem = img.replace(`C:\\fakepath\\`, '')
    icone = ico.replace(`C:\\fakepath\\`, '')

    if(img)
        dados = dados + '&foto='+imagem 

    if(ico)
        dados = dados + '&icone='+icone

    if(checkExtension()){
        $.post('../../../atualizar-sobre', dados, response => {
            if(img)
                updateAboutImg()

            if(ico)
                updateAboutIco()
        })
        .done(() => {
            exibirSucesso()
        })
        .fail(() => $("#erro").show(200))
    }
})

$("#texto").jqte()

function checkExtension()
{
    if($("#foto").val() != ""){
        let extension = $("#foto").val().replace(/^.*\./, '')
        if(
            extension != 'png' 
            && extension != 'jpg' 
            && extension != 'JPG' 
            && extension != 'JPEG' 
            && extension != 'PNG'
        ){
            alert("Formato de imagem não suportado.")
            return false
        }else{
            return true
        }
    }
    return true
}

function updateAboutImg()
{
    let fd = new FormData()
    let files = $('#foto')[0].files[0]
    let token = $('meta[name="csrf-token"]').attr('content')
    fd.append('file',files)
    fd.append('_token', token)

    $.ajax({
        url: '/about-image-update',
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

function updateAboutIco()
{
    let fd = new FormData()
    let files = $('#icone')[0].files[0]
    let token = $('meta[name="csrf-token"]').attr('content')
    fd.append('file',files)
    fd.append('_token', token)

    $.ajax({
        url: '/about-icon-update',
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

function exibirSucesso()
{
    $("#sucesso").fadeToggle(300)
    $("#erro").hide()

        window.setTimeout(() => {
            $("#sucesso").fadeToggle(300)

    }, 1500)
}

$("#foto").change(() => {
    filePreview()
})

$("#icone").change(() => {
    iconPreview()
})


function filePreview() 
{
    let input = ($("#foto"))[0]

    for(var i = 0; i < input.files.length; i++){

        if (input.files && input.files[i]) {
            var reader = new FileReader()
            reader.onload = function (e) {
                $('#imagem-preview').attr('src', e.target.result)
            }
            reader.readAsDataURL(input.files[i])
        }

    }

}

function iconPreview() 
{
    let input = ($("#icone"))[0]

    for(var i = 0; i < input.files.length; i++){

        if (input.files && input.files[i]) {
            var reader = new FileReader()
            reader.onload = function (e) {
                $('#icone-preview').attr('src', e.target.result)
            }
            reader.readAsDataURL(input.files[i])
        }

    }

}