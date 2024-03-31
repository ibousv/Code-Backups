<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-content {
            padding-top: 5vh;
            font-family: Arial, Helvetica, sans-serif;
            color: #b8a9a9;
            background: white;
            margin-top: 30px;
        }

        .container {
            width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
        }

        h2 {
            padding: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="file"] {
            display: none;
        }

        .joindre-fichier {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;

        }

        div {
            padding: 2px;
            margin: 1px;
        }
    </style>
</head>

<body>
    <div class="body-content">
        <div class="container">
            <h2>Envoyer un email</h2>
            <div>
                <form action="main.php" method="post">
                    <div>
                        <div>
                            E-mail :
                        </div>
                        <div>
                            <input type="email" name="destinataire" required>
                        </div>
                    </div>

                    <div>
                        <div>
                            Objet :
                        </div>
                        <div>
                            <input type="text" name="objet" required>
                        </div>
                    </div>
                    <div>
                        <div>
                            Message :
                        </div>
                        <div>
                            <textarea name="message" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <!-- <div>
                        <div>
                            <label class="joindre-fichier">
                                <input type="file" name="fichier">
                                Joindre un fichier
                            </label>
                        </div>
                    </div> -->
                    <div>
                        <div>
                            <input type="submit" name="envoyer" value="Envoyer">
                        </div>
                    </div>
                </form>
                <?php
                if (isset ($_POST["envoyer"])) {
                    $destinataire = $_POST["destinataire"];
                    $objet = $_POST["objet"];
                    $message = $_POST["message"];
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>