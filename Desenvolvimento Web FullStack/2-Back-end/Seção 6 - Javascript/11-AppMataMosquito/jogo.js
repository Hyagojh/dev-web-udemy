/*
    Através do BOM, encontrar e definir as dimensões do palco do jogo, evitando barras de rolagem e possíveis erros referentes a resolução.

    É necessário que esse valor se mantenha atualizado, prevendo quando o jogador aumentar ou diminuir a tela, para isso será encapsulado dentro de uma função, suas respectivas variáveis necessariamente globais e fazendo o uso do atributo 'onresize'.
*/

var altura = 0
var largura = 0
var vidas = 1
var tempo = 10

var criaMosquitoTempo = 1500

/*
    lógica da dificuldade do jogo
 */
var nivel = window.location.search
nivel = nivel.replace('?', '')

if(nivel === 'normal'){
    criaMosquitoTempo = 1500
} else if(nivel === 'dificil'){
    criaMosquitoTempo = 1000
} else if (nivel === 'chuckNorris'){
    criaMosquitoTempo = 750
}

function ajustaTamanhoPalcoJogo(){
    altura = window.innerHeight
    largura = window.innerWidth

    console.log(altura, largura)
}

ajustaTamanhoPalcoJogo()

//Cria um cronometro 
var cronometro = setInterval(function(){
    tempo -= 1

    if(tempo < 0){
        /*
            Elimina a função da memória do setInterval e ele para de funcionar, permitindo a lógica de vitória
        */
        clearInterval(cronometro)
        clearInterval(criaMosquito)
        window.location.href = 'vitoria.html'
    } else{
        document.getElementById('cronometro').innerHTML = tempo
    }
    
}, 1000)

function posicaoRandomica(){
    /*
        Com base nos valores de altura e largura, criar posições randômicas no eixo x e y para um elemento html, utilizando o método random, que gera valores aleatórios entre 0 e 1. 

        É necessário que o valor randômico esteja dentro do intervalo entre os valores de altura e largura, a multiplicação faz com que o valor randômico vá de zero até o valor de multiplicação. 

        Math.floor arredonda o valor gerado para baixo e a subtração evita problemas com a resolução da tela causados pelo tamanho de 50px da imagem.
    */

    /*
        Remover o mosquito anterior, caso exista, com base no ID e if true. E remove ponto de vida, caso o jogador não consiga clicar a tempo.
    */

    if(document.getElementById('mosquito')){
        //remove elemento usando o DOM.
        document.getElementById('mosquito').remove()

        if (vidas > 3){
            //força o gameover
            window.location.href = 'fim_de_jogo.html'
        } else {
            document.getElementById('v' + vidas).src="imagens/coracao_vazio.png"
            vidas++
        }
        
    }

    var posicaoX = Math.floor(Math.random() * largura) - 90
    var posicaoY = Math.floor(Math.random() * altura) - 90

    //para evitar valores inferiores à zero
    posicaoX = posicaoX < 0 ? 0 : posicaoX
    posicaoY = posicaoY < 0 ? 0 : posicaoY
    
    console.log(posicaoX, posicaoY)
    
    /*
        Cria o elemento html utilizando o DOM
        
        adiciona um nó no DOM, para evitar erros da interpretação gravitacional (esse elemento seria criado antes de ser criado o body) é necessário encapsular ele em uma função, visto que funções são carregadas em cache antes.
    */
    
    var mosquito = document.createElement('img')
    mosquito.src = 'imagens/mosquito.png'
    mosquito.className = tamanhoAleatorio() + ladoAleatorio() //concatena as strings de retorno, necessário um espaço.

    //forma a coordenada em pixels que se quer posicionar à esquerda e direita do navegador
    mosquito.style.left = posicaoX + 'px'
    mosquito.style.top = posicaoY + 'px'
    mosquito.style.position = 'absolute'
    mosquito.id = 'mosquito'
    //remove o elemento, caso o jogador consiga clicar nele dentro do tempo 
    mosquito.onclick = function(){
        this.remove()
    }
    
    document.body.appendChild(mosquito)    

    console.log(tamanhoAleatorio())
}

function tamanhoAleatorio(){
    /*
        gera valores entre 0 e muito próximos de 3 e com base nesse valor, arredondando (1,2 ou 3) será aplicado uma classe CSS que alterará o tamanho do mosquito.
    */
    var classe = Math.floor(Math.random() * 3)
    console.log(classe)

    switch(classe){
        /*
            dispensa o uso de break, por que return é interpretado sempre como última instrução da função. No momento em que for lida, o processamento da função é interrompido.
        */
        case 0:
            return 'mosquito1 '
        case 1:
            return 'mosquito2 '
        case 2:
            return 'mosquito3 '
    }   
}

/*
    inverte a imagem do mosquito aleatoriamente, ora 'olha' para esquerda, ora para direita. Lógica semelhante à usada para alterar o tamanho do mosquito
*/
function ladoAleatorio(){
    var classe = Math.floor(Math.random() * 2)
    console.log(classe)

    switch(classe){

        case 0:
            return 'ladoA'
        case 1:
            return 'ladoB'    
    }   
}





