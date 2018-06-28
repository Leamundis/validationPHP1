<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/style.css">
        <title>U.A. School</title>
    </head>
<body>
    <h1>U.A. School Trading Quirk</h1>
    <header>
        <nav>
            <ul>
                <div class="navList">
                    <?php if ($_SESSION): ?>
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/normalQuirk.php">Quirks normaux</a></li>
                        <li><a href="/rareQuirk.php">Quirks rares</a></li>
                        <li><a href="/info.php">Quirks acquis</a></li>
                    <?php else: ?>
                        <li><a href="/">Accueil</a></li>
                    <?php endif; ?>
                </div>
                <div class="logged">
                    <?php if ($_SESSION): ?>
                        <p>Bonjour, <?=$_SESSION['pseudo']?>!</p>
                        <a class="deco" href="./controllers/deco.php">Déconnexion</a>
                    <?php else: ?>
                    <li><a href="/inscription.php">Inscription</a></li>
                    <?php endif; ?>
                </div>
            </ul>
        </nav>
    </header>
    
