/* 
    Segue as regras padrões da maioria das linguagens. Os tipos das variáveis mais usados são 3: String, Number, Boolean... onde number possuí o poder dos três tipos primitivos básicos de Int, Float, Short, e etc... É uma linguagem considerada fracamente tipada.

    A atribuição do tipo é aplicada automaticamente na construção da variável em função do valor atribuido. 

    na declaração da variável, usa-se a instrução opcional "var", para indicar o interpretador que estará se criando uma variável.

    JS é case sensitive.
*/

//String: declarando e atribuindo, aspas duplas e simples podem ser utilizadas.
var texto = "Curso de JavaScript"

//Number: valores numéricos positivos, negativos, inteiros e fracionados.
var numeroInteiro = -7
var numeroFracionado = 11210.75

//Boolean: armazena estados, verdadeiro ou falso.
var teste = true

/*
    é um método q tem função de abrir um dialog, não é utilizado em produção, mas um bom recurso para debug, no caso recupera o valor inserido dentro da variável enviada como parâmetro.
*/

//alert(numeroFracionado) 

/*
    document é um objeto que representa o DOM, todos os elementos HTML criados em uma página estão contidos dentro do objeto document. O texto acaba sendo construído dentro do body, inserido como um nó dentro do DOM (árvore de elementos do navegador).
*/

//document.write(texto)

/*
    Muito utilizado para debug, pode-se utilizá-lo para testar determinados valores a partir da opção console do browser, expondo o dado de determinada variável.
*/

//console.log(numeroInteiro);

/*
    Dentro dos operadores de comparação (condicionais) do JS, o que tem de diferente em relação as outras linguagens é que existe um operador de IDÊNTICO representado por '===' e de NÃO IDÊNTICO representado por '!===' que verifica se os valores comparados são IGUAIS E DO MESMO TIPO. Visto que uma variável pode alterar seu tipo dinâmicamente de acordo com sua atribuição. O uso do idêntico também se faz útil pois o JS tem uma 'inteligência' que entende que uma string que representa um valor numérico possa ser comparada com um number em pé de igualdade.
*/

if (2 == '2'){

    document.write('Entrou no bloco IF (Verdadeiro)')

} else {
    document.write('Entrou no bloco Else')
}

/*
    Casting de tipos: transformar um tipo de dado em outro. parseInt, parseFloat, toString
*/

var variavel1 = prompt('Digite algum número')
var variavel2 = prompt('Digite outro número')

/*
    var1 e 2 são strings, no caso o operador '+' concatena e não soma, por isso é necessário o casting.
*/

document.write(variavel1 + variavel2)

// Recebe o valor da variavel1 e variavel2 transformado em int

var var1 = parseInt (variavel1)
var var2 = parseInt (variavel2)

document.write(var1 + var2)


document.write(var1.toString())

/* 
    Operadores lógicos são semelhantes a todas as linguagens E, OU e Negação.
*/
 
/*
    Operador ternário: uma estrutura de decisão semelhante ao if/else, mas com sintaxe enxuta.
*/

/*
    <condicao> ? <verdadeiro> : <falso>; resultado receberá o retorno da operação ternária. É um operador que não permite grande lógica em seus resultados, apenas dados mais brutos, como strings ou numbers. Parentêses são opcioanis.
*/
var resultado = (var1 < var2) ? 'Verdadeiro' : 'falso'

/*
    Switch é igual as outras linguagens.

    switch (opcao) {
        case 1:
            break - indica para o switch que o case chegou ao final, caso n for escrita, todo o conteudo do case 1 e dos proximos seriam executados, até um break ser encontrado.
    }


    default: Funciona como um else, e pode n ser definido, caso seja definido e nenhum case entre em loop, ele será ativado.
        break
*/

/*
    Operadores aritméticos são os comuns.

    document.write ('A soma entre num1 e num 2 é:' + (num1 + num2))
*/