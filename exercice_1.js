let nb1 = parseFloat(prompt("Entrez le premier nombre :"));
let nb2 = parseFloat(prompt("Entrez le deuxième nombre :"));

console.log("Somme :", nb1 + nb2);
console.log("Différence :", nb1 - nb2);
console.log("Produit :", nb1 * nb2);
if (nb2 !== 0) {
  console.log("Quotient :", nb1 / nb2);
} else {
  console.log("Division par zéro impossible.");
}
