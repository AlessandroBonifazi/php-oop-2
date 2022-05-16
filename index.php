<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce. 
Il focus è sulla parte di slide condivisa oggi su Drive. -->

<?php
    include 'entities/classes.php';

    $product = new Product('collare', 'accessorio', 20);
    var_dump($product);

    $guest = new GuestAccount('Mario', 'Rossi', 'via di qua', 00000, 2032);
    var_dump($guest);
    echo('<p>totale ospite '.$guest->totalPrice().'€</p>');
    $member = new MemberAccount('Mario', 'Rossi', 'via di qua', 00000, 2019);
    echo('<p>totale account registrato '.$member->totalPrice().'€</p>');

    echo($guest->cardCheck());
    echo($member->cardCheck());

   


?>