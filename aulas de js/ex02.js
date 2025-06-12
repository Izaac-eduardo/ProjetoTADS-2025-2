let numeros = [12,-10,25,42,-3,174,-12.12,-17,0,1]
let qtdn = 0, somap=0
for(let i=0; i<10; i++){
if(numeros[i] < 0){
    qtdn++
    console.log(`saiu da execução ${i} negativos sendo ${qtdn}`)
} else {
somap = somap + numeros[i]
console.log(`SAiu da execução ${i} psoma dos positivos sendo ${somap}`)
}
}