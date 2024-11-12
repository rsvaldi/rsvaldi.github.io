<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_ospite = $_POST['nome_ospite'];
    $email_ospite = $_POST['email_ospite'];
    $nome_host = $_POST['nome_host'];
    $email_host = $_POST['email_host'];
    $data_arrivo = $_POST['data_arrivo'];  // Data arrivo selezionata
    $data_partenza = $_POST['data_partenza'];  // Data partenza selezionata
    $hotel = $_POST['hotel'];  // Hotel selezionato

    // Per sapere quale email è stata precompilata, usa l'email dell'hotel (se selezionato)
    $emailHotel = array(
        "Hotel Susa" => "milano@example.com",
        "Hotel Dieci" => "roma@example.com",
        "Hotel Citta Studi" => "napoli@example.com",
    );

    // Se l'hotel è stato selezionato, usiamo l'email corrispondente
    if (isset($hotel) && array_key_exists($hotel, $emailHotel)) {
        $email_hotel = $emailHotel[$hotel];  // Impostiamo l'email dell'hotel
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
