<?php
if(isset($_POST['submit'])){
    $name = $_POST['imie'];
    $mailFrom = $_POST['email'];
    $message = $_POST['wiadomosc'];
    $subject = "TEMAT";
    $to = "jakubpaszko01@gmail.com";
    $headers = "Od: ".$email;
    $txt = "Imie i nazwisko: $imie.\n" . "Jego email: $email.\n" . "Wiadomość: $wiadomosc.\n";
    mail($to,$subject,$message,$txt,$headers);
    header("Location: index.html");
}
?>