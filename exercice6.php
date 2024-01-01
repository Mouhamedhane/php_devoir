<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviseurs d'un nombre</title>
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

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }

        .result {
            font-weight: bold;
            color: #27ae60;
        }
    </style>
</head>

<body>

    <header>
        <h1>Diviseurs d'un nombre</h1>
    </header>

    <section>
        <?php
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';

        if (empty($nombre)) {
            echo '<form method="post" action="">';
            echo '   <label for="nombre">Entrez un nombre :</label>';
            echo '   <input type="number" name="nombre" required>';
            echo '   <br>';
            echo '   <input type="submit" value="Afficher les diviseurs">';
            echo '</form>';
        } else {
            echo "<p>Les diviseurs de $nombre sont :</p>";
            echo '<ul>';
            for ($i = 1; $i <= $nombre; $i++) {
                if ($nombre % $i === 0) {
                    echo "<li>$i</li>";
                }
            }
            echo '</ul>';
            echo '<p class="result">Calcul terminé!</p>';
        }
        ?>
    </section>

</body>

</html>
