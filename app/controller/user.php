<?php 

namespace PHPMVC\CTRL;

class User{

	public $nom;
	public $prenom;
	public $nbr=0;


	public function _construct($nom,$pr){
		$this->$nom=$n;
		$this->$prenom=$pr;
		$nbr++;
	}

	/*public User($nom,$prenom){
		$this->$nom=$n;
		$this->$prenom=$pr;
		$nbr++;
	}*/

	public function affiche($nbr, $n, $pr){
		echo "Utilisateur : ".$nbr.", le nom : ".$n.", prénom : ".$pr;
	}
}