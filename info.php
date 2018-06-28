<?php 

session_start();
include("./layouts/header.php"); 


$session = $_SESSION;
$allQuirks = array_slice($session, 6);


?>

<main>
    <h2>Voici les Quirks que tu possèdes déjà :</h2>
    
    <table>
        <tr>
            <th>Nom</th>
        </tr>
        <?php foreach($allQuirks as $allQuirk): ?>
        <tr>
            <td><?= $allQuirk['names']['name'][0] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>




<?php include_once('./layouts/footer.php'); ?>