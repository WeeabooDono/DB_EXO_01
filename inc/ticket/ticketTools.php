<?php
require_once('../../model/ticket.php');
require_once( '../../inc/fct_utiles.php');

function get($id){
    $ticket = new ticket();

    // open connection
    $db = bdd();

    // create an SQL request
    $rqt = "SELECT * FROM `ticket` WHERE `idTicket` = $id";

    // ask for an answer
    $res = $db->query($rqt);

    // for each rows of the request (here only one since $id is a primary key)
    while ($val = $res->fetch(PDO::FETCH_ASSOC)) {
        $ticket->setIdTicket($val['idTicket']);
        $ticket->setDate($val['date']);
        $ticket->setTechnicien($val['Technicien_idTechnicien']);
    }
    // close connection
    $db = null;

    return $ticket;
}

function getAll(){
    $tickets = [];

    // open connection
    $db = bdd();

    // create an SQL request
    $rqt = "SELECT * FROM `ticket`";

    // ask for an answer
    $res = $db->query($rqt);

    // for each rows of the request (here only one since $id is a primary key)
    while ($val = $res->fetch(PDO::FETCH_ASSOC)) {
        $ticket = new ticket();
        $ticket->setIdTicket($val['idTicket']);
        $ticket->setDate($val['date']);
        $ticket->setTechnicien($val['Technicien_idTechnicien']);
        $tickets[] = $ticket;
    }

    // close connection
    $db = null;

    return $tickets;
}

function update($ticket){}

function delete($ticket){}

function insert($ticket){}