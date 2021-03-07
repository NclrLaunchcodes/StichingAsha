<!-- User vertellen dat het bericht is verzonden en ze doorgesturrd worden -->
<div class="text-center">
    <h2 style="color: rgb(1, 78, 1);">Uw bericht is verzonden!</h2>
    <p>U wordt over enkele seconden terugverwezen...</p>
</div>


<?php
// Verwijs gebnruiker door naar 5 sec
header("Refresh: 5; url=./index.php?");

// Set eigenaar vars
date_default_timezone_set('Europe/Amsterdam');
$contactEmail = "319659@student.mboutrecht.nl";

// Haal data uit formulier
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$date = date('d-m-Y');
$message = $_POST["message"];

// Maak het email bericht
$messageToSend = "
U heeft een bericht ontvangen via:
Naam: $name 
Email: $email 
Telefoonnummer: $phone 
Datum: $date
\n
Bericht:
$message
";

// Vertsuur het bericht
mail($contactEmail, "U heeft een bericht ontvangen", $messageToSend);
?>