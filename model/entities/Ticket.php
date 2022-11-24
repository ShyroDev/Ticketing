<?php

class Ticket
{

    private int $id;
    private DateTime $date;
    private string $titre;
    private string $contenu;
    private Etat $etat; 



    public function __construct(int $id, DateTime $date, string $titre, string $contenu, Etat $etat)
    {
        $this->id = $id;
        $this->date = $date;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->etat = $etat;
    }



    /**
     * Permet d'obtenir l'identifiant du ticket.
     * 
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Permet de définir l'identifiant du ticket.
     * 
     * @param int $id
     * 
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }



    /**
     * Permet d'obtenir la date du ticket.
     * 
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * Permet de définir la date du ticket.
     * 
     * @param DateTime $date
     * 
     * @return void
     */
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }



    /**
     * Permet d'obtenir le titre du ticket.
     * 
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Permet de définir le titre du ticket.
     * 
     * @param string $titre
     * 
     * @return void
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    
    /**
     * Permet d'obtenir le contenu du ticket.
     * 
     * @return string
     */
    public function getContenu(): string
    {
        return $this->contenu;
    }

    /**
     * Permet de définir le contenu du ticket.
     * 
     * @param string $contenu
     * 
     * @return string
     */
    public function setContenu(string $contenu): void
    {
        $this->contenu = $contenu;
    }

    public function getEtat() : ?Etat
    {
        if (isset($this->etat))
        {
            return $this->etat;
        }

        return null;
    }

    public function setEtat(Etat $etat) : void
    {
        $this->etat = $etat;
    }
}

?>