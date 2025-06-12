const prompt = require('prompt-sync')();
let nomes = []
let ressn, i=0, qtd= 0
do {   nomes[i] = prompt('Digite um nome: ')
    i++
    qtd++
    ressn = prompt('Deseja continuar? [S/N] ')  }
while(ressn == 'S' || ressn == 's'){
  
} console.log(`Foram cadastrados ${qtd} nomes`)
console.log( `Os nomes cadastrados foram: ${nomes}`)