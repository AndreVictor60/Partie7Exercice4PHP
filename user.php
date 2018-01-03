<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 7 Exercice 4</title>
    </head>
    <body>
        <?php
        // Vérification des POST s'ils existent
        if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
            // htmlspecialchars qui sert à échapper le code HTML ( Éviter les failles XSS )
            echo 'Bonjour, ' . htmlspecialchars($_POST['firstName']) . ' ' . htmlspecialchars($_POST['lastName']);
        }
        ?>
    </body>
</html>
