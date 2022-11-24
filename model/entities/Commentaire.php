<?php

class Commentaire 
{
    private int $com_id;
    private DateTime $com_date;
    private string $com_author;
    private string $com_contenu;

    public function __construct(int $com_id, DateTime $com_date, string $com_author, string $com_contenu)
    {
        $this->id = $com_id;
        $this->date = $com_date;
        $this->author = $com_author;
        $this->contenu = $com_contenu;

    }

    public function getId(): int
    {
        return $this->id;
    }
    
    public function setId(int $com_id): void
    {
        $this->id = $com_id;
    }


    public function getDate() : DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $com_date): void
    {
        $this->date = $com_date;
    }


    public function getAuthor() : string 
    {
        return $this->author;
    }

    public function setAuthor(string $com_author) : void
    {
        $this->author = $com_author;
    }


    public function getContenu() : string
    {
        return $this->contenu;
    }

    public function setContenu(string $com_contenu) : void
    {
        $this->contenu = $com_contenu;
    }


}

?>