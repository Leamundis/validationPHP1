<?php 

session_start();
include("./layouts/header.php"); 

$quirks = array (
    '0' => array (
        'id' => 0,
        'name' => 'Fireball',
        'desc' => 'Lance des boules de feu',
        'cost' => 20 
    ),
    '1' => array (
        'id' => 1,
        'name' => 'Thunder',
        'desc' => 'Lance des éclairs',
        'cost' => 15
    ),
    '2' => array (
        'id' => 2,
        'name' => 'Sound',
        'desc' => 'Peut modifier les sons',
        'cost' => 7
    ),
    '3' => array (
        'id' => 3,
        'name' => 'Head Ball',
        'desc' => 'Avoir des boules collantes sur la tête',
        'cost' => 2
    ),
    '4' => array (
        'id' => 4,
        'name' => 'Gravity',
        'desc' => 'Peut modifier la gravité',
        'cost' => 25
    ),
    '5' => array (
        'id' => 5,
        'name' => 'Soap',
        'desc' => 'Peut secréter du savon par les mains',
        'cost' => 1
    ),
    '6' => array (
        'id' => 6,
        'name' => 'Ice',
        'desc' => 'Peut geler au contact',
        'cost' => 30
    )
);
?>

<main>
    <h2>Voici la listes des Quirks normaux que tu peux acheter :</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Pouvoir</th>
            <th>Coût</th>
            <th></th>
        </tr>
        <?php foreach($quirks as $quirk): ?>
        <tr>
            <td><p><?= $quirk['name'] ?></p></td>
            <td><p><?= $quirk['desc'] ?></p></td>
            <td><p><?= $quirk['cost'] ?></p></td>
            <td>
                <form action="./controllers/basket.php" method="POST">
                    <input type="hidden" name="names[name][]" value=<?= $quirk['name'] ?>>
                    <input type="hidden" name="cost" value= <?= $quirk['cost'] ?>>
                    <?php if ($_SESSION['crystal'] >= $quirk['cost']): ?>
                        <input type="submit" value="0">
                    <?php endif; ?>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <p class="totalCrystal">Il te reste <?php echo $_SESSION['crystal'] ?> cystaux en réserve!</p>

</main>




<?php include_once('./layouts/footer.php'); ?>