$(document).ready(() => {
    /*
        primeiro parâmetro é o atributo e o segundo, caso necessário, é o valor a ser atualizado
    */
    $('img').attr('src', 'imagens/esfera_2.png')

    console.log($('div#div').attr('style', 'background-color: blue; width: 200px; height: 200px;'))

    //$('input').attr('value', 'Eu continuo sendo um input')
    //$('input').attr('type', 'password')

    /*
        Manipulando conteúdo interno
    */
    console.log('conteúdo div 1: ', $('#div1').html())

    console.log('conteúdo div 2: ', $('#div2').html())

    //setar valores: O parâmetro será atribuido como valor interno do elemento html
    $('#div1').html('<strong style="color: red;">Eu sou o valor novo</strong>')

    /*
        selecionando inputs (text) e selects, no momento como não se está lidando com captura de eventos no curso, os comandos de coonsole para a seleção são:

        $('#nome').val()
        $('#nome').val('Jaques')
        $('#origem').val()
    */

    /*
        o each permite percorrer cada um dos elementos html selecionados, ideal para checkboxes
    */

    //Seleciona o elemento radio checado e recupera o valor selecionado

    $('.sexo:checked').val()

    /*
        o each permite percorrer cada um dos elementos html selecionados, ideal para checkboxes, que permitem uma seleção de múltiplos itens. Espera dois parâmetros - um array e uma função de callback. A função de callback recebe o índice e o valor que serão forrnecidos pelo each

         $.each($('.interesse:checked'), (indice, valor) =>{
        
        })
    */
   
        
})