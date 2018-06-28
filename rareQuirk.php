<?php 

session_start();
include("./layouts/header.php"); 

$quirks = array (
    '0' => array (
        'id' => 0,
        'name' => 'All For One',
        'desc' => 'Peut absorber les Quirks',
        'cost' => 3000 
    ),
    '1' => array (
        'id' => 1,
        'name' => 'One for all',
        'desc' => 'Force et Endurance Quasi-infini',
        'cost' => 4500
    )
);
?>

<main>
    <h2>Voici la listes des Quirks rare que tu peux acheter :</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Pouvoir</th>
            <th>Coût</th>
            <th></th>
        </tr>
        <?php foreach($quirks as $quirk): ?>
        <tr>
            <td><?= $quirk['name'] ?></td>
            <td><?= $quirk['desc'] ?></td>
            <td><?= $quirk['cost'] ?></td>
            <td>
                <form action="./controllers/basket.php" method="POST">
                    <input type="hidden" name="names[name][]" value=<?= $quirk['name'] ?>>
                    <input type="hidden" name="cost" value= <?= $quirk['cost'] ?>>
                    <?php if ($_SESSION['crystal'] > $quirk['cost']): ?>
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