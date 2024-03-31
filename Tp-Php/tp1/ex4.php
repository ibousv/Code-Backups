<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
    <style>
        body{
            background-color: lavender;
            align-items: center;
        }
        .inner-div{
            padding: 0 auto;
            margin : 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <div class="inner-div">
            <h1>Addition</h1>
            <form action="ex4.php" method="get">
                <p>Entrer deux nombres à additionner :</p>
                <input type="number" name="n1">
                
                <input type="button" name="valider" value="Envoyer">
            </form>
        </div>
    </div>
    <?php
        
    ?>
</body>
</html>