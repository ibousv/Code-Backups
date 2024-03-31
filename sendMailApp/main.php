<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendMAilApp</title>
</head>

<body>
    <div>
        <form action="envoi_mail.php" method="post">
            Email du destinataire :
            <input type="email" name="destinataire" placeholder="saisissez mail" required /><br>
            Objet du mail :
            <input type="text" name="sujet" placeholder="saisissez l'objet" required /><br>
            <label for="message">Meessage</label><br>
            <textarea name="message" placeholder="Entrez le message" cols="50" rows="10"></textarea><br>
            Joindre un fichier :
            <input type="file" name="fichier" value="sélectionner" /><br><br>
            <input type="submit" name="envoyer" value="Envoyer">
        </form>
    </div>
    
</body>

</html>