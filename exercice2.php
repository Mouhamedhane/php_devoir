<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de multiples</title>
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
        <h1>Test de multiples</h1>
    </header>

    <section>
        <?php
        $nombre = 15;

        if ($nombre % 3 === 0 && $nombre % 5 === 0) {
            echo "<p>Le nombre $nombre est à la fois un multiple de 3 et de 5.</p>";
            echo '<p class="result">C\'est un nombre spécial!</p>';
        } else {
            echo "<p>Le nombre $nombre n'est pas un multiple de 3 et de 5 à la fois.</p>";
        }
        ?>
    </section>

</body>

</html>
