<?php

class intervention {

    // clé primaire
    private $idIntervention;

    private $date;

    private $diagnostic;

    private $action;

    // clé étrangère vers le matériel
    private $materiel;

    // clé étrangère vers le ticket
    private $ticket;

    // clé étrangère vers le technicien
    private $technicien;

    public function __construct($idIntervention = null, $date = null, $diagnostic = null, $action = null, $materiel = null, $ticket = null, $technicien = null)
    {
        $this->idIntervention = $idIntervention;
        $this->date = $date;
        $this->diagnostic = $diagnostic;
        $this->action = $action;
        $this->materiel = $materiel;
        $this->ticket = $ticket;
        $this->technicien = $technicien;
    }

    /**
     * Get the value of idIntervention
     */ 
    public function getIdIntervention()
    {
        return $this->idIntervention;
    }

    /**
     * Set the value of idIntervention
     *
     * @return  self
     */ 
    public function setIdIntervention($idIntervention)
    {
        $this->idIntervention = $idIntervention;

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
     * Get the value of diagnostic
     */ 
    public function getDiagnostic()
    {
        return $this->diagnostic;
    }

    /**
     * Set the value of diagnostic
     *
     * @return  self
     */ 
    public function setDiagnostic($diagnostic)
    {
        $this->diagnostic = $diagnostic;

        return $this;
    }

    /**
     * Get the value of action
     */ 
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set the value of action
     *
     * @return  self
     */ 
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get the value of materiel
     */ 
    public function getMateriel()
    {
        return $this->materiel;
    }

    /**
     * Set the value of materiel
     *
     * @return  self
     */ 
    public function setMateriel($materiel)
    {
        $this->materiel = $materiel;

        return $this;
    }

    /**
     * Get the value of ticket
     */ 
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set the value of ticket
     *
     * @return  self
     */ 
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;

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
}