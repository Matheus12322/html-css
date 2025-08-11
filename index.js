let nome = "Matheus"; // string // LET PODE ALTERAR OS VALORES
const idade = "25"; // number // CONST OS VALORES SÃO FIXO - IMUTÁVEL
let ative = true; // boolean

console.log(nome, idade, ativo);

let endereco = "Rua Velha";
let numero = "123";
let bairro = "Rio das Pedras";
let cidade = "Rio de Janeiro";


//CONCATENAÇÃO
console.log(endereco+' '+numero+', '+bairro +' - '+cidade);


// OPERADORES ARITMÉTICOS

let a = 10;
let b = 5;

console.log(a+b); // SOMA
console.log(a-b); // SUBTRAÇÃO
console.log(a*b); // MULTIPLICAÇÃO
console.log(a/b); // DIVISÃO

// OPERADORES DE COMPARAÇÃO

let x = 50;
let y = 10;
let m = "50";
console.log(x > y); // true
console.log(x <= y); // false
console.log(x === y); // false
console.log(x === m); // false
console.log(x == m); // true
console.log(x = m); // "50"


// OPERADORES LÓGICOS

let maiorDeIdade = true;
let temCNH = false;

console.log(maiorDeIdade && temCNH); // false --- && = AND
console.log(maiorDeIdade || temCNH); // true --- || = OR
console.log(!maiorDeIdade); // false  --- ! no início da variavel negação = NOT
console.log(maiorDeIdade);


// CONDICIONAIS

let nota = 5;

if(nota === 0) {
    window.location.href = "https://www.youtube.com/results?search_query=materia+portugues";
    console.log("Nota Zero, estude mais!");
} else if (nota <= 3) {
    window.location.href = "https://www.youtube.com/results?search_query=materia+matematica";
    console.log("Nota ruim, estude mais!");
} else if (nota <= 6) {
    window.location.href = "https://www.youtube.com/results?search_query=materia+redacao";
    console.log("Nota média");
} else {
    window.location.href = "https://www.youtube.com/results?search_query=pagode";
    console.log("Muito boa!");
}

// CONDICIONAIS USANDO SWITCH CASE

let cor = "Azul";

switch(cor) {
    case "Vermelho":
        console.log("Pare!");
        break;
    case "Amarelo":
        console.log("Atenção!");
        break;
    case "Verde":
        console.log("Siga!");
        break;
    default:
        console.log("Cor inválida");
}