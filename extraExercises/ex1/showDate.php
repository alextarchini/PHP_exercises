<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            <?php echo "Cette ligne a ere ecrite \"uniquement\" en PHP.<br />"; ?>
            <?php echo "<strong>Bonjour</strong>"; ?>
            Voici quelques petits tests :

         <!-- PHP for showing the date -->   
        </p>
            Today is <?php echo date('d/m/Y h:i:s');?>
        <p>

        </p>

        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        

    </body>
</html>