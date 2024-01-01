<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
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

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Agence Immobilière</h1>
    </header>

    <section>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="submit" name="vendre" value="Vendre">
            <input type="submit" name="acheter" value="Acheter">
            <input type="submit" name="louer" value="Louer">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            ob_start(); 
            if (isset($_POST['vendre'])) {
                header('Location: page_vendre.php');
                exit();
            } elseif (isset($_POST['acheter'])) {
                header('Location: page_acheter.php');
                exit();
            } elseif (isset($_POST['louer'])) {
                header('Location: page_louer.php');
                exit();
            }
            ob_end_flush(); 
        }
        ?>
    </section>

</body>

</html>
