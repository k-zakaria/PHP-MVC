<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Événement</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        header a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }

        .event-details {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            max-width: 600px;
            margin: 20px auto;
        }

        .event-details h1 {
            font-size: 32px;
            color: #333;
            margin-bottom: 10px;
        }

        .event-details p {
            font-size: 18px;
            color: #555;
            margin-bottom: 15px;
        }

        .event-details img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 20px;
        }

        .event-details a {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>YouÉvénements</h1>
        <nav>
            <a href="home.php">Accueil</a>
            <a href="login.php">Connexion</a>
            <a href="singup.php">Inscription</a>
        </nav>
    </header>

    <div class="event-details">
        <img src="https://img.freepik.com/photos-gratuite/briques-jouet-table-evenements-mot_144627-41206.jpg?w=1060&t=st=1703947184~exp=1703947784~hmac=0d82c05aaaf76747342be5664beecc8d94734615a091887022fd6ba39015dccc"
            alt="Photo de l'événement">
        <?php
        if (!empty($data)) {
            ?>
            <h1>Nom de l'événement:
                <?php echo $data[0]->nameEvent; ?>
            </h1>
            <p>Description de l'événement:
                <?php echo $data[0]->descriptionEvent; ?>
            </p>
            <p>Date de l'événement:
                <?php echo $data[0]->dateEvent; ?>
            </p>
            <p>Lieu de l'événement:
                <?php echo $data[0]->locationEvent; ?>
            </p>
            <a href="ticke?id=<?php echo $data[0]->id; ?>">page acheter le tickes</a>

            <a href="home">Retour à la liste des événements</a>
            <?php
        } else {
            echo "Aucun événement trouvé.";
        }
        ?>
    </div>

    <footer>
        <p>&copy; 2023 YouÉvénements. Tous droits réservés.</p>
    </footer>
</body>

</html>
