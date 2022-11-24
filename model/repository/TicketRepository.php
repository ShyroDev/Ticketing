<?php

class TicketRepository
{
    public static function selectAll() : array
    {
        $ticketsData = Database::Init()->query(
            "SELECT TIK_ID as id, TIK_Date as date,
            TIK_Titre as titre, TIK_Contenu as contenu,ETAT_ID as etat_id,ETAT_Lib as lib from Ticket
            JOIN Etat ON Ticket.FK_TIK_ETAT = Etat.ETAT_ID ORDER BY TIK_ID desc")->fetchAll(PDO::FETCH_ASSOC);
        
        $tickets = array();
        
        


         foreach($ticketsData as $ticket) 
         {
             $tickets[] = new Ticket($ticket["id"], new DateTime($ticket["date"]), $ticket["titre"], $ticket["contenu"], new Etat($ticket["etat_id"], $ticket["lib"]));
         }
        
         return $tickets;

    }

}

?>

