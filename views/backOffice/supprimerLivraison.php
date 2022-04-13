<?PHP
include "../../controllers/livraisonController.php";
$livraisonController = new LivraisonController();
if (isset($_POST["id"])) {
    $livraisonController->supprimerLivraison($_POST["id"]);
    header('Location: Gestion des livraisons.php');
}
