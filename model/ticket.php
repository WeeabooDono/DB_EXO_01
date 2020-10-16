<?php

class ticket {
    
    // clé primaire
    private $idTicket;

    private $date;

    // clé étrangère vers le technicien
    private $technicien;

    // référence vers les interventions liées
    private $interventions;

    public function __construct($idTicket = null, $date = null, $technicien = null, $interventions = null)
    {
        $this->idTicket = $idTicket;
        $this->date = $date;
        $this->technicien = $technicien;
        $this->interventions = $interventions;
    }

    /**
     * Get the value of idTicket
     */ 
    public function getIdTicket()
    {
        return $this->idTicket;
    }

    /**
     * Set the value of idTicket
     *
     * @return  self
     */ 
    public function setIdTicket($idTicket)
    {
        $this->idTicket = $idTicket;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of technicien
     */ 
    public function getTechnicien()
    {
        return $this->technicien;
    }

    /**
     * Set the value of technicien
     *
     * @return  self
     */ 
    public function setTechnicien($technicien)
    {
        $this->technicien = $technicien;

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
}