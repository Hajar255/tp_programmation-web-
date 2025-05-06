let nombreADeviner = Math.floor(Math.random() * 10) + 1;
let tentative;
let essais = 0;

do {
  tentative = parseInt(prompt("Devinez le nombre entre 1 et 10 :"));
  essais++;
  if (tentative < nombreADeviner) {
    alert("Trop petit !");
  } else if (tentative > nombreADeviner) {
    alert("Trop grand !");
  }
} while (tentative !== nombreADeviner);

alert("Bravo ! Vous avez trouvé en " + essais + " tentative(s).");
