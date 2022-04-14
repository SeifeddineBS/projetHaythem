<?php
include_once '../../controllers/livraisonController.php';
include_once '../../models/livraison.php';

$error = "";

$livraison = null;

$livraisonController = new  LivraisonController();



$nom = $_POST["nom"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$adresse = $_POST["adresse"];
$commande = $_POST["commande"];






if (
    isset($nom) && isset($email) && isset($telephone) && isset($adresse) &&isset($commande)
) {

    $livraison = new  Livraison($nom, $email, $telephone, $adresse,$commande);
    $livraisonController->ajouterLivraison($livraison);
    //redirection de la page apres l'ajout
    header('Location:ajouterLivraison.php');

} else
    $error = "Missing information"; 
