<?php

class Utilisateur {
     static $annee = 2024;
     protected $nom;
     protected $prenom;

     public function __construct($nom ,$prenom){
        $this ->nom= $nom;
        $this ->prenom= $prenom;
        

     }
     public function getNom(){

        return  $this ->nom;
    }
    public function setNom($nom){
        $this->nom ->$nom;
    }
    public function introduceUrSelf(){
        return "iam". " " .$this->nom . ' ' . $this->prenom;
    }
}


class Etudiant extends Utilisateur{
    public $branche;
    public $groupe;

    public function __construct( $nom, $prenom, $branche, $groupe){
        parent :: __construct($nom ,$prenom);
        $this ->branche = $branche;
        $this ->groupe = $groupe;

    }
    public function introduceUrSelf(){
        return parent :: introduceUrSelf(). 'and i am a student';
    }
}

$etudiant1 = new Etudiant ("bakarrouch" , "fatima" , "dd" , 105);
$etudiant2 = new Etudiant ("boukri" , "ikram" , "ID" , 105);




$utilisateur1 = new Utilisateur( "bakarrouch", "fatima");
//  $utilisateur1 ->nom = "bakarrouch";
// $utilisateur1 ->prenom = "fatima";


$utilisateur2 = new Utilisateur( 'baitou' , 'aya');


echo '<pre>';
var_dump($utilisateur1);
var_dump($utilisateur2);
var_dump($utilisateur2->introduceUrSelf());
var_dump($etudiant1);
var_dump($etudiant2);
var_dump(Utilisateur ::$annee);

