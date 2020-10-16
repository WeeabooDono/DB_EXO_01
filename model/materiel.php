<?php

class materiel {

    // clé primaire
    private $idMateriel;

    private $reference;

    // référence vers les interventions liées
    private $interventions;

    public function __construct($idMateriel = null, $reference = null, $interventions = null)
    {
        $this->idMateriel = $idMateriel;
        $this->reference = $reference;
        $this->interventions = $interventions;
    }

    /**
     * Get the value of idMateriel
     */ 
    public function getIdMateriel()
    {
        return $this->idMateriel;
    }

    /**
     * Set the value of idMateriel
     *
     * @return  self
     */ 
    public function setIdMateriel($idMateriel)
    {
        $this->idMateriel = $idMateriel;

        return $this;
    }

    /**
     * Get the value of reference
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */ 
    public function setReference($reference)
    {
        $this->reference = $reference;

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