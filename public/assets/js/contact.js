$("#contact-form").submit(() => {
    event.preventDefault()

    let dados = $("#contact-form").serialize()

    $.post('send-email', dados, response => {
        console.log(response)
    })
})