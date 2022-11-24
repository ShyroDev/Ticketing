<?php

class Etat
{
    private int $etat_id;
    private string $etat_lib;
    private array $tickets;

    public function __construct(int $etat_id,string $etat_lib)
    {
        $this->id = $etat_id;
        $this->lib = $etat_lib;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $etat_id): void
    {
        $this->id = $etat_id;
    }

    public function getLib(): string
    {
        return $this->lib;
    }

    public function setLib(string $etat_lib): void
    {
        $this->lib = $etat_lib;
    }

    public function getTickets(): array
    {
        return $this->tickets;
    }

    public function setTickets(array $tickets): void
    {
        $this->tickets = $tickets;
    }


}

?>