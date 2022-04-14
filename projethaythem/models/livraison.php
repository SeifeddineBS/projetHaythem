<?php

class Livraison{

    private $id;
    private $nom;
    private $email;
    private $telephone;
    private $adresse;
    private $etat;
    private $commande;

    function __construct($nom,$email,$telephone,$adresse,$commande)
    {
        
        $this->nom=$nom;
        $this->email=$email;
        $this->telephone=$telephone;
        $this->adresse=$adresse;
        $this->commande=$commande;
        
    }




    function getId()
    {
		return $this->id;
	}

    function getNom()
    {
		return $this->nom;
	}

    function getEmail()
    {
		return $this->email;
	}

    function getTelephone()
    {
		return $this->telephone;
	}

    function getAdresse()
    {
		return $this->adresse;
	}

    function getEtat()
    {
		return $this->etat;
	}

  function  getCommande()
  {
  return $this->commande;
  }

    
	function setid($id){
		$this->id=$id;
	}

	function setnom($nom){
		$this->nom=$nom;
	}


    function setemail($email){
		$this->email=$email;
	}

    function settelephone($telephone){
		$this->telephone=$telephone;
	}

    function setadresse($adresse){
		$this->adresse=$adresse;
	}

    function setetat($etat){
		$this->etat=$etat;
	}

  function setcommande($commande){
		$this->commande=$commande;
	}

}
  


