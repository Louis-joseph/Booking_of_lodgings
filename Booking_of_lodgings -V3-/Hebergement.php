<?php
require_once('');

namespace Hebergement;
//model

require('');

//Class
class Hebergement {

    //Propietées -> encapsulation
    //Private = utilisable seulement dans la class Hebergement
    private $id;
    private $title;
    private $city;
    private $category;
    private $photo;
    private $room;
    private $nb_bathroom;
    private $nb_beds;
    private $price;
    private $available;

    //Méthode constructeur permet d'initialiser les propriétes de l'objet Hebergement
    public function __construct($values) {
        $this->id = $values['id_hebergement'];
        $this->title = $values['title'];
        $this->city = $values['city'];
        $this->category = $values['category'];
        $this->photo =$values['photo'];
        $this->room =$values['room'];
        $this->nb_bathroom =$values['nb_bathroom'];
        $this->nb_beds =$values['nb_beds'];
        $this->price =$values['price'];
        $this->available =$values['available'];
    }

    // Méthode setter; definir/modifier la valeur de la propriété
    // public function setId($id) {
    //     $this->id = $id;
    // }

    // //Méthode getter, récupérer la valeur de la propriété
    // public function getId() {
    //     return $this->id;
    // }

    // public function getTitle() {
    //     return $this->titre;
    // }

    // public function getCity() {
    //     return $this->city;
    // }

    // public function getCategory() {
    //     return $this->category;
    // }

    // public function getPhoto() {
    //     return $this->photo;
    // }

    // public function getRoom() {
    //     return $this->room;
    // }

    // public function getNb_bathroom() {
    //     return $this->nb_bathroom;
    // }

    // public function getNb_beds() {
    //     return $this->nb_beds;
    // }

    // public function getPrice() {
    //     return $this->price;
    // }

    // public function getAvailable() {
    //     return $this->available;
    // }

       
}

?>
