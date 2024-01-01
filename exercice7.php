<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de nombre parfait</title>
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
        <h1>Test de nombre parfait</h1>
    </header>

    <section>
        <?php
        function sommeDiviseursPropres($nombre)
        {
            $somme = 0;
            for ($i = 1; $i <= $nombre / 2; $i++) {
                if ($nombre % $i === 0) {
                    $somme += $i;
                }
            }
            return $somme;
        }

        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';

        if (empty($nombre)) {
            echo '<form method="post" action="">';
            echo '   <label for="nombre">Entrez un nombre :</label>';
            echo '   <input type="number" name="nombre" required>';
            echo '   <br>';
            echo '   <input type="submit" value="Vérifier">';
            echo '</form>';
        } else {
            $sommeDiviseurs = sommeDiviseursPropres($nombre);

            if ($sommeDiviseurs == $nombre) {
                echo "<p>Le nombre $nombre est parfait.</p>";
                echo '<p class="result">C\'est un nombre parfait!</p>';
            } else {
                echo "<p>Le nombre $nombre n'est pas parfait.</p>";
            }
        }
        ?>
    </section>

</body>

</html>
