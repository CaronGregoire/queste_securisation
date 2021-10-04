<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <link href="form.css" rel="stylesheet">
</head>
<body>


<form  action="form.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_firstname">
    </div>
    <div>
        <label  for="prénom">Prénom :</label>
        <input  type="text"  id="nom"  name="user_lastname">
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
        <label  for="numberPhone">Téléphone :</label>
        <input  type="tel" pattern="[0-9]{10}"  id="NumberPhone"  name="user_phone">
    </div>
    <div>
        <label  for="subject">Sujet de votre demande :</label>
        <select name="subject" id="subject">
            <option value=> J'ai une question concernant mon forfait</option>
            <option value=> J'ai un problème technique</option>
            <option value=> J'aimerais résilier mon forfait</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>


</body>
</html>




