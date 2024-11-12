<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $messaggio = $_POST['messaggio'];
    $data = $_POST['data'];  // Data selezionata
    $hotel = $_POST['hotel'];  // Hotel selezionato

    // Per sapere quale email è stata precompilata, usa l'email dell'hotel (se selezionato)
    $emailHotel = array(
        "Hotel Susa" => "milano@example.com",
        "Hotel Dieci" => "roma@example.com",
        "Hotel Citta Studi" => "napoli@example.com",
    );

    // Se l'hotel è stato selezionato, usiamo l'email corrispondente
    if (isset($hotel) && array_key_exists($hotel, $emailHotel)) {
        $email = $emailHotel[$hotel];  // Impostiamo l'email dell'hotel
    }

    $to = "tuo@email.com";  // Cambia con il tuo indirizzo email
    $subject = "Nuovo messaggio da $nome";
    $message = "Nome: $nome\nEmail: $email\nMessaggio: $messaggio\nData: $data\nHotel: $hotel";  // Aggiungi l'hotel al messaggio
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Messaggio inviato con successo!";
    } else {
        echo "Errore nell'invio del messaggio. Riprova più tardi.";
    }
}
?>
