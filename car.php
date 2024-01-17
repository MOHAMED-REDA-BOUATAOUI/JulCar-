<?php

class Car {
    private $matricule;
    private $marque;
    private $model;
    private $type_carburant;

    public function __construct($matricule, $marque, $model, $type_carburant) {
        $this->matricule = $matricule;
        $this->marque = $marque;
        $this->model = $model;
        $this->type_carburant = $type_carburant;
    }

    public function getMatricule() {
        return $this->matricule;
    }

    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getTypeCarburant() {
        return $this->type_carburant;
    }

    public function setTypeCarburant($type_carburant) {
        $this->type_carburant = $type_carburant;
    }
}

