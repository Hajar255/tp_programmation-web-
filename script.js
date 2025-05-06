// Création de la div
const div = document.createElement("div");
div.id = "maDiv";

// Création du paragraphe à l'intérieur de la div
const p = document.createElement("p");
p.textContent = "Ceci est un paragraphe";

// Ajout du paragraphe à la div
div.appendChild(p);

// Ajout de la div au body
document.body.appendChild(div);

// Modification du texte du paragraphe
p.textContent = "Le texte a été modifié";

// Style déjà défini dans CSS mais vous pouvez aussi faire :
p.style.backgroundColor = "lightblue";
p.style.textAlign = "center";

// Ajout de l’événement click
div.addEventListener("click", function() {
  p.textContent = "Un clic a été détecté";
});
