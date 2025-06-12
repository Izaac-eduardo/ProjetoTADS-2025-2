
const prompt = require('prompt-sync')();
let nuemros = [12,-10,25,42,-3,174,-12.12,-17,0,1]
let valor = Number(prompt('Digite um valor: '))
let posicao = null 
for (let i=0; i<10; i++){
    if (numeros[i] == valor)
        posicao = i
    }
    if(posicao == null ) {
        console.log(`O valor ${valor}não foi encontrado na lista `)
    } else {
        console.log(`O valor ${valor} foi encontrado na lista na posição ${posicao}`)
    }