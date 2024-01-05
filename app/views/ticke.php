<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter des Billets</title>
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

        .ticket-section {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            max-width: 600px;
            margin: 20px auto;
        }

        .ticket {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
        }

        .ticket-info {
            flex-grow: 1;
            text-align: left;
        }

        .ticket-action {
            flex-shrink: 0;
        }

        .ticket-action button {
            background-color: #333;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            bottom: 0;
            width: 100%;
        }

        /* Styles pour la fenêtre modale */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h1>YouÉvénements</h1>
        <nav>
            <a href="home">Accueil</a>
            <a href="login">Connexion</a>
            <a href="signup">Inscription</a>
        </nav>
    </header>

    <div class="ticket-section">
        <h2>Choisissez vos billets</h2>
        <?php foreach ($data as $ticket): ?>
            <div class="ticket">
                <div class="ticket-info">
                    <p>Type: <?php echo $ticket->typeTicket; ?></p>
                    <p>Prix: <?php echo $ticket->priceTicket; ?> €</p>
                    <p>Quantité disponible: <?php echo $ticket->coun; ?></p>
                </div>
                <div class="ticket-action">
                    <button onclick="ouvrirModal(<?php echo $ticket->id; ?>)">Acheter</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Fenêtre modale -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="fermerModal()">&times;</span>
            <h2>Sélectionnez la quantité</h2>
            <form id="formQuantite">
                <label for="quantite">Quantité :</label>
                <input type="number" id="quantite" name="quantite" min="1" max="10" required>
                <button type="button" onclick="acheterBillet()">Acheter</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 YouÉvénements. Tous droits réservés.</p>
    </footer>

    <script>
        function ouvrirModal(idTicket) {
            var modal = document.getElementById("modal");
            modal.style.display = "block";
            // Ajouter du code pour remplir d'autres informations sur le billet en fonction de son id
        }

        function fermerModal() {
            var modal = document.getElementById("modal");
            modal.style.display = "none";
        }

        function acheterBillet() {
            // Ajouter ici le code pour gérer l'achat du billet avec la quantité sélectionnée
            var quantite = document.getElementById("quantite").value;
            alert('Billet acheté avec succès ! Quantité : ' + quantite);
            fermerModal();
        }
    </script>
</body>

</html>
