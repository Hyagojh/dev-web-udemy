$(document).ready(() => {
	
    $('#documentacao').on('click', () => {
        /*
            Faz a requisição get por definição, usando ajax automaticamente. Mas pode ser explícito através de get ou post.

            $('#pagina').load('documentacao.html')
        */
        $.get('documentacao.html', data => {
            $('#pagina').html(data)
        })
    })

    $('#suporte').on('click', () => {
        /* 
            espera uma url e uma ação, data faz referência ao response text da requisição feita no primeiro parâmetro, sendo usado de parâmetro para a arrow function. 
        */
        $.post('suporte.html', data => {
            $('#pagina').html(data)
        })
    })

    $('#competencia').on('change', e => {

        let competencia = $(e.target).val()
        /*
            No objeto literal passado como parâmetro para o ajax, é necessário passar o método, a url, caso haja dados, caso sucesso e caso erro  
        */
        $.ajax({
            type:'GET',
            url:'app.php',
            data: `competencia=${competencia}`,
            dataType: 'json',
            success: dados => {
                $('#numeroVendas').html(dados.numeroVendas)
                $('#totalVendas').html(dados.totalVendas)
            },
            error: erro => {console.log(erro)}
        })
        
    })

})