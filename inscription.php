<?php 

session_start();
include_once('./layouts/header.php'); 



?>

<main>
    <h2>Bienvenu au sein de l'U.A. School</h2>

    <?php if ($_SESSION): ?>
        <div>
            <p>Merci pour ton inscription <?php echo $_SESSION['pseudo'] ?>!</p>
            <p>Ton compte vient d'être crédité de <?php echo $_SESSION['crystal'] ?> crystaux, pour acheter tes quirks.</p>
            <p>Fais-en bon usage, mon ami!</p>
        </div>
    <?php else: ?>
        <form action="./controllers/inscription.php" method="POST">
            <div class="form">
                <label for="firstname">Prénom</label>
                <input class="input" type="text" name="firstname" required>
            </div>

            <div class="form">
                <label for="name">Nom</label>
                <input class="input" type="text" name="name" required>
            </div>

            <div class="form">
                <label for="pseudo">Pseudo de Héro</label>
                <input class="input" type="text" name="pseudo" required>
            </div>

            <?php if ($_SESSION['regex'] == false): ?>
            <div class="form">
                <p>Mauvaise adresse mail, recommence</p>
                <label for="email">Email</label>
                <input class="input" type="text" name="email" required>
            </div>
            <?php endif; ?>

            <?php if (!$_SESSION['regex']): ?>
            <div class="form">
                <p>Mauvaise adresse mail, recommence</p>
                <label for="email">Email</label>
                <input class="input" type="text" name="email" required>
            </div>
            <?php endif; ?>

            <input type="submit">
        </form>
    <?php endif; ?>

</main>








<?php include_once('./layouts/footer.php'); ?>