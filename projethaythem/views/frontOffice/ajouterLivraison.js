function ajouterLivraison() {
  var email = ajouterLivraisonForm.email;
  var nom = ajouterLivraisonForm.nom;
  // var ePass=formajoutdoctor.ePass;
  var adresse = ajouterLivraisonForm.adresse;
  var telephone = ajouterLivraisonForm.telephone;

  var verif = -1;
  if (nom.value.length == 0) {
    alert("Le nom est obligatoire");
    verif = 0;
    return false;
  } else verif = 1;
  if (adresse.value.length == 0) {
    alert("L'adresse est obligatoire");
    verif = 0;
    return false;
  } else verif = 1;
  if (telephone.value.length != 8) {
    alert("Le numero doit comporter 8 chiffres");
    verif = 0;
    return false;
  } else verif = 1;

  if (testTelephone(telephone) == false) {
    alert("Le numero ne doit pas comporter une Lettre");
    verif = 0;
    return false;
  } else verif = 1;

  if (testPass(email) == false) {
    alert("Adresse email non valide ");
    verif = 0;
    return false;
  } else verif = 1;

  if (verif == 1) {
    alert("Merci Pour l ajout");

    return true;
  }
}
function testTelephone(cin) {
  var k = 0;
  for (let i = 0; i < cin.value.length; i++) {
    if (cin.value[i] <= 9 || cin.value[i] >= 0) k = 0;
    else return false;
  }
}

function testPass(Pass) {
  var test = 0;
  for (let i = 0; i < Pass.value.length; i++) {
    if (Pass.value[i] == "@") {
      test++;
    }
  }
  for (let i = 0; i < Pass.value.length; i++) {
    if (test == 1 && Pass.value[i] == ".") {
      if (Pass.value.length > i + 1) return true;
    }
  }
  return false;
}
