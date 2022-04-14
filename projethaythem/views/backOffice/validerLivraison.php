<?PHP
include "../../controllers/livraisonController.php";
$livraisonController = new LivraisonController();
if (isset($_POST["id"])) {

    $livraisonController->validerLivraison(true, $_POST["id"]);


    header('Location: Gestion des livraisons.php');
}
