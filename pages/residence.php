<?php
    if(!isset($_GET['id'])){
        Error(404,'ID non définie !');
    }else{
        if(!isset($Residences[$_GET['id']])){
            Error(404,'Résidence non trouvé !');
        }
    }

    $inf=$Residences[$_GET['id']];
?>

<table>
    <tr>
        <th colspan="2">Résidence "<?= $inf['name']; ?>"</th>
    </tr>
    <tr>
        <td><img src="assets/img/Photos/<?= $inf['name']; ?>/<?= $inf['name']; ?>-Vue.jpg"></td>
        <td><?= nl2br($inf['address']); ?></td>
    </tr>
    <tr class="tr_Titre_commodites">
        <td colspan="2">Commodités</td>
    </tr>
    <?php foreach($inf['inf'] as $key => $value): ?>
    <tr class="tr_commodites">
        <td><?= $key; ?> :</td>
        <td><img src="assets/img/Photos/<?php echo(($value==1)?'Yes':'No') ?>.png"></td>
    </tr>
    <?php endforeach; ?>

    <tr class="tr_commodites">
        <td>Classification :</td>
        <td>
            <?php for($i=1; $i<=$inf['note']; $i++): ?>
                <img src="assets/img/Photos/Star.png">
            <?php endfor; ?>
        </td>
    </tr>
</table>