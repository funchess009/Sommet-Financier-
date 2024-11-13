<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateNaissance = $_POST['date-naissance'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Compose email
    $to = "nicolascote946@icloud.com";
    $subject = "Nouvelle demande de compte";
    $message = "Nom: $nom\nPrénom: $prenom\nDate de Naissance: $dateNaissance\nAdresse: $adresse\nTéléphone: $telephone\nEmail: $email";
    
    // IMPORTANT: Avoid sending passwords in plain text for security reasons
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Votre demande a été envoyée avec succès!";
    } else {
        echo "Une erreur s'est produite. Veuillez réessayer.";
    }
}
?>
