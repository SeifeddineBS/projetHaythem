<?PHP
include "../../config.php";
include "../../models/livraison.php";

class LivraisonController
{

    function ajouterLivraison($livraison)
    {
        $sql = " INSERT into livraison (nom,email,telephone,adresse) values (:nom,:email,:telephone,:adresse)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':nom', $livraison->getNom());
            $req->bindValue(':email', $livraison->getEmail());
            $req->bindValue(':telephone', $livraison->getTelephone());
            $req->bindValue(':adresse', $livraison->getAdresse());

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    /*
    function ajoutLivraison($livraison)
    {
        
       $sql = "INSERT INTO  livraison (id,nom,email,telephone,adresse,etat,type) values (:id,:nom,:email,:telephone,:adresse,:etat,:type)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'id' => $livraison->getId(),
            'nom' => $livraison->getNom(),
	         	'email' => $livraison-> getEmail(),
            'telephone' => $livraison->getTelephone(),
	         	'adresse' => $livraison->getAdresse(),
			'etat' =>$livraison->getEtat(),
            'type' =>$livraison->getType()

            
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }

*/



    function afficherLivraison()
    {
        $sql = "SElECT * From livraison";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function supprimerLivraison($id)
    {
        $sql = "DELETE FROM livraison where id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
            // header('Location: index.php');
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function modifierproduit($livraison, $id)
    {
        $sql = "UPDATE livraison SET id=:id, nom=:nom ,email=:email ,telephone=:telephone,adresse=:adresse,etat=:etat ,type=:type WHERE id=:id";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try {
            $req = $db->prepare($sql);
            $id = $livraison->getId();
            $nom = $livraison->getNom();
            $email = $livraison->getEmail();
            $telephone = $livraison->getTelephone();
            $adresse = $livraison->getAdresse();
            $etat = $livraison->getEtat();
            $type = $livraison->getType();
            $datas = array(':id' => $id, ':nom' => $nom, ':telephone' => $telephone, ':adresse' => $adresse, ':etat' => $etat, ':type' => $type);


            $req->bindValue(':id', $id);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':email', $email);
            $req->bindValue(':telephone', $telephone);
            $req->bindValue(':adresse', $adresse);
            $req->bindValue(':etat', $etat);
            $req->bindValue(':type', $type);

            $s = $req->execute();

            // header('Location: index.php');
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
            echo " Les datas : ";
            print_r($datas);
        }
    }
    function recupererLivraison($id)
    {
        $sql = "SELECT * from  livraison where id=$id";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function validerLivraison($value, $id)
    {
        $sql = "UPDATE livraison SET etat=:etat  WHERE id=:id";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try {
            $req = $db->prepare($sql);



            $req->bindValue(':id', $id);
            if ($value)
                $req->bindValue(':etat', "Valider");
            else
                $req->bindValue(':etat', "Annuler");




            $s = $req->execute();

            // header('Location: index.php');
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
            echo " Les datas : ";
        }
    }
}
