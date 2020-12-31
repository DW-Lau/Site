<?php
$name = htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);


$adMail=htmlspecialchars($_POST['mail']);
$tel=htmlspecialchars($_POST['telephone']);

$obj=htmlspecialchars($_POST['objet']);
$message= htmlspecialchars($_POST['message']);


$monMail="llaura.dw@gmail.com";

$email_message = "Détail.\n\n";
    $email_message .= "Nom: ".$name."\n";
    $email_message .= "Prenom: ".$prenom."\n";
    $email_message .= "Email: ".$adMail."\n";
    $email_message .= "Telephone: ".$tel."\n";
    $email_message .= "Commentaire: ".$message."\n";
 
    // create email headers
    $headers = 'From: '.$adMail."\r\n".
    'Reply-To: '.$monMail."\r\n" .
    'X-Mailer: PHP/' . phpversion();

// expressions régulières
$verifNomPrenom="/^[A-Za-z0-9 .'-]+$/";
$verifMail= "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";

$errors=[];



if(isset($name)&&isset($prenom)&&isset($adMail)&&isset($obj)&&isset($message)){

    if(preg_match($verifNomPrenom,$name)&&preg_match($verifNomPrenom,$prenom)){
        if(preg_match($verifMail,$adMail)){
            if(strlen($obj)>5 && strlen($message)>5){
                if(!empty($errors)){
                    echo 'des erreurs sont apparuent';
                    session_start();
                    $_SESSION['erreurs']=$errors;
                    header('Localisation:./../index.php');
                }else{
                    mail($monMail,$obj,$message,$headers); 
                    echo'mail envoyer';
                    header('Localisation:./../index.php');
                }
            }else{
                $errors['message']="Le nombre de caractère n'est pas valable";
            }
        }else{
           $errors['adresseMail']="Votre adresse mail n\'est pas valable.";
        } //FIN vérif adresse mail
    }else{// FIN vérifs nom et prénom
        $errors['nomPrenom']='Veuillez vérifier les champs Nom et Prénom.';
    }
}else{
    $errors['champserreur']="Veuillez remplir tous les champs obligatoires";
}
