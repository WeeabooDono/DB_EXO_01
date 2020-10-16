<?php

class technicien {
    
    // clé primaire
    private $idTechnicien;

    private $nom;

    // référence vers les interventions liées
    private $interventions;

    // référence vers les tickets liés
    private $tickets;

    public function __construct($idTechnicien = null, $nom = null, $interventions = null, $tickets = null)
    {
        $this->idTechnicien = $idTechnicien;
        $this->nom = $nom;
        $this->interventions = $interventions;
        $this->tickets = $tickets;
    }

    /**
     * Get the value of idTechnicien
     */ 
    public function getIdTechnicien()
    {
        return $this->idTechnicien;
    }

    /**
     * Set the value of idTechnicien
     *
     * @return  self
     */ 
    public function setIdTechnicien($idTechnicien)
    {
        $this->idTechnicien = $idTechnicien;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of interventions
     */ 
    public function getInterventions()
    {
        return $this->interventions;
    }

    /**
     * Set the value of interventions
     *
     * @return  self
     */ 
    public function setInterventions($interventions)
    {
        $this->interventions = $interventions;

        return $this;
    }

    /**
     * Get the value of tickets
     */ 
    public function getTickets()
    {
        return $this->tickets;
    }

    /**
     * Set the value of tickets
     *
     * @return  self
     */ 
    public function setTickets($tickets)
    {
        $this->tickets = $tickets;

        return $this;
    }
}