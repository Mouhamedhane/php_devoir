<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du PPCM</title>
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
        <h1>Calcul du PPCM</h1>
    </header>

    <section>
        <?php
        function pgcd($a, $b)
        {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        function ppcm($a, $b)
        {
            return ($a * $b) / pgcd($a, $b);
        }

        $entier1 = isset($_POST['entier1']) ? $_POST['entier1'] : '';
        $entier2 = isset($_POST['entier2']) ? $_POST['entier2'] : '';

        if (empty($entier1) || empty($entier2)) {
            echo '<form method="post" action="">';
            echo '   <label for="entier1">Entier 1 :</label>';
            echo '   <input type="number" name="entier1" required>';
            echo '   <br>';
            echo '   <label for="entier2">Entier 2 :</label>';
            echo '   <input type="number" name="entier2" required>';
            echo '   <br>';
            echo '   <input type="submit" value="Calculer">';
            echo '</form>';
        } else {
            $ppcmResult = ppcm($entier1, $entier2);

            echo "<p>Le PPCM de $entier1 et $entier2 est : $ppcmResult.</p>";
            echo '<p class="result">Calcul terminé!</p>';
        }
        ?>
    </section>

</body>

</html>
