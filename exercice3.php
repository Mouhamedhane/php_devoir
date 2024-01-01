<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de tirage</title>
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
        <h1>Jeu de tirage</h1>
    </header>

    <section>
        <?php
        $nombreInitial = rand(100, 999);

        $coups = 0;

        while (true) {
            $tirage = rand(100, 999);
            $coups++;

            if ($tirage === $nombreInitial) {
                echo "<p>Le nombre initial $nombreInitial a été obtenu en $coups coups.</p>";
                echo '<p class="result">Félicitations!</p>';
                break;
            }
        }
        ?>
    </section>

</body>

</html>
