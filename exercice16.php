<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction Sinus</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <section>
        <?php
        function sinusAngle($angle, $unite = 'rad')
        {
            switch ($unite) {
                case 'deg':
                    $angle = deg2rad($angle);
                    break;
                case 'grad':
                    $angle = deg2rad($angle * 0.9);
                    break;
            }

            $sinus = sin($angle);

            echo "Le sinus de $angle radians est : $sinus";
        }

        sinusAngle(1.57); 
        echo '<br>';
        sinusAngle(90, 'deg');
        echo '<br>';
        sinusAngle(100, 'grad');
        ?>
    </section>

</body>

</html>
