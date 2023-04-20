<?php
if (isset($_POST['submit']))
{

$name = htmlspecialchars($_POST['clientName']);
$email = htmlspecialchars($_POST['email']);
$phoneNumber = $_POST['phoneNum'];
$comment = htmlspecialchars($_POST['comments']);
$range = $_POST['customRange'];
$elType = $_POST['exampleRadio'];  

$emailTo = 'ausra.al@gmail.com';
$emailHeader = "Nuo: " . $email;
$emailBody = "Gavote laišką iš siuntėjo: ".$name.".\n\n Telefono nr. ". 
        $phoneNumber.".\n\n Pasirinktas elektros suvartojimas: ".
        $range.".\n\n Pasirinktas elektrinės tipas: ".
        $elType . ".\n\n Žinutė: ".
        $comment;
$emailSubject = 'Naujas užsakymas';

mail ($emailTo, $emailSubject, $emailBody, $emailHeader);
header("Location: index.html");
if(mail($emailTo, $emailSubject, $emailHeader)) {
        $message = "Jūsų žinutė sėkmingai išsiųsta";
        }
}






