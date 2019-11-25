$("#texto").jqte()

function checkExtension()
{
    if($("#imagem").val() != ""){
        let extension = $("#imagem").val().replace(/^.*\./, '')
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

$("#procedimento").submit(() => {

    event.preventDefault()
    let dados = $("#procedimento").serialize()
    img = $("#imagem").val()
    imagem = img.replace(`C:\\fakepath\\`, '')
    dados = dados + '&imagem='+imagem

    if(checkExtension()){
        $.post('/publicar-procedimento', dados, response => {
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
        url: '/procedimentos-file-upload',
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

/* ATUALIZAR E GERENCIAR */

function updateImg()
{
    let fd = new FormData()
    let files = $('#imagem')[0].files[0]
    let token = $('meta[name="csrf-token"]').attr('content')
    fd.append('file',files)
    fd.append('_token', token)

    $.ajax({
        url: '/procedimentos-file-update',
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

$(document).ready(() => {
    $("#procedimentos").dataTable({
        reponsive:true,
        "language":{
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ Resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    })
})

$("#imagem").change(() => {
    filePreview()
})

function filePreview() 
{
    let input = ($("#imagem"))[0]

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

$("#atualizar-procedimento").submit(() => {
    event.preventDefault()
    let dados = $("#atualizar-procedimento").serialize()
    img = $("#imagem").val()
    imagem = img.replace(`C:\\fakepath\\`, '')

    if(img)
        dados = dados + '&imagem='+imagem

    if(checkExtension()){
        $.post('../../../atualizar-procedimento', dados, response => {
            if(img)
                updateImg()
        })
        .done(() => {
            exibirSucesso()
        })
        .fail(() => $("#erro").show(200))
    }
})

/* END ATUALIZAR E GERENCIAR */

function deletarProcedimento(obj)
{
    let r = confirm("Você tem certeza de que deseja excluir permanentemente todos os registros deste procedimento?")

    if(r){
        let id = obj.id

        $.get(`/painel/procedimento/delete/${id}`)
        .done(() => {
            $(`#linha-${id}`).fadeOut(300)
        })
    }
}