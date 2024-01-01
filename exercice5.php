<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul d'un cercle</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            color: #333;
        }

        .result {
            font-weight: bold;
            color: #27ae60;
        }
    </style>
</head>

<body>
    <header>
        <h1>Calcul d'un cercle</h1>
    </header>

    <section>
        <?php
        $rayon = isset($_POST['rayon']) ? $_POST['rayon'] : '';

        if (empty($rayon)) {
            echo '<form method="post" action="">';
            echo '   <label for="rayon">Entrez le rayon du cercle :</label>';
            echo '   <input type="number" name="rayon" required>';
            echo '   <br>';
            echo '   <input type="submit" value="Calculer">';
            echo '</form>';
        } else {
            $diametre = $rayon * 2;
            $perimetre = 2 * M_PI * $rayon;
            $surface = M_PI * pow($rayon, 2);

            echo "<p>Rayon saisi : $rayon</p>";
            echo "<p>Diamètre : $diametre</p>";
            echo "<p>Périmètre : $perimetre</p>";
            echo "<p>Surface : $surface</p>";
            echo '<p class="result">Calcul terminé!</p>';
        }
        ?>
    </section>

</body>

</html>
