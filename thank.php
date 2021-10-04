<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$name = $_POST ["user_firstname"];
$lastName= $_POST["user_lastname"];
$email= $_POST["user_email"];

$phone=$_POST["user_phone"];
$objet=$_POST["subject"];
$comment=$_POST["user_message"];
$error = "tous n'est pas remplis coco";

if (empty($name) ||
    empty($lastName) ||
    empty($email) ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)||

    empty($phone)||
    empty($objet)||
    empty($comment))
    {
    echo $error;
}
else
    {

echo 'Merci ' . $_POST ['user_firstname'].' ' . $_POST['user_lastname'] .' de nous avoir contacté à propos de '. $_POST['subject'] .

'. Un de nos conseiller vous contactera soit à l’adresse '. $_POST['user_email'] .' ou par téléphone au '. $_POST['user_phone'] .' dans les plus brefs délais pour traiter votre demande :'.
$_POST['user_message'];
    }


?>


</body>
</html>