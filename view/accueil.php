<div class="container backgroundBody">
    <div class="d-flex justify-content-center "> 
        <div class="col mb-5">
            <a href="index.php">
                <h1 id="titreBlog">Ticketing</h1>
            </a>
            <p>Welcome to my Ticketing App.</p> 
            <?php
            $tickets = TicketRepository::selectAll();

            foreach ($tickets as $ticket) 
            {
                echo "
                <div class=\"row shadowbox\"> 
            
                <article>
                    <header>
                        <h1 class=\"TicketTitle\">" . $ticket->getTitre() . "</h1>
                        <p>Ticket: " . $ticket->getEtat()->getLib() . "</p>
                        <time>Date: " . $ticket->getdate()->format("Y-m-d H-i-s") . "</time>
                    </header>
                    <p>Contenu: " . $ticket->getContenu() . "</p>
                </article>
                <hr />
            
            
                </div>";
            
            }
            ?>           
            Blog réalisé avec PHP, HTML5 et CSS.
        </div>
    </div>
</div>

    

