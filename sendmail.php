<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $messaggio = $_POST['messaggio'];

    $to = "tuo@email.com";  // Cambia con il tuo indirizzo email
    $subject = "Nuovo messaggio da $nome";
    $message = "Nome: $nome\nEmail: $email\nMessaggio: $messaggio";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Messaggio inviato con successo!";
    } else {
        echo "Errore nell'invio del messaggio. Riprova più tardi.";
    }
}
?>
