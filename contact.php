<?php 
session_start ();
$title = "Nous contacter";
require_once 'data/config.php';
require_once 'functions.php';
date_default_timezone_set('Europe/Paris');
$nav = "contact";
// récupération de la date
$heure =(int)($_GET ['heure'] ?? date('G'));
$jour =(int)($_GET ['jour'] ?? date('N') - 1);
//récupération des créneau d'aujpurd'hui
$creneaux = CRENEAUX[$jour];

$ouvert = in_creneaux($heure, $creneaux);
$color = 'green';
if (!$ouvert){
    $color= 'red';
}
require 'elements/header.php'; ?>

<div class= "row" style ="  color: #fff; ">
    <div class="col-md-8">
        <h2> Nous contatcter </h2>
        <p> Il arrive souvent que l'idée illustrée se confonde avec l'idée expliquée, une preuve pouvant servir à expliquer quelque chose, tout comme une explication pouvant aussi illustrer. Ces deux parties peuvent donc être traitées séparément ou ensemble. L'ordre de présentation de ces trois parties peut varier (l'explication peut précéder ou suivre la preuve, selon la façon avec laquelle on présente les illustrations.</p>
    </div>
    <div class="col-md-4" style ="  color: #fff;  background-color: #8B4513; background-size: cover; height: 75vh;  margin: -25px 0 0 0px; background-size: 100% auto; dispaly: flex;">
    <h2> Horaire d'ouvertures</h2>

        <form action="" method="GET">
            <div class="from-group">
                <?= select('jour', $jour, JOURS) ?> 
            </div><br>
            <div class="form-group">
                <input class="form-control" type="number" name="heure" value="<?= $heure?>">
            </div>
            <button class="btn btn-primary" type="submit"> Voir si le magazin est ouvert</button> 
        </form> <br>

    <?php if($ouvert): ?>
      <div class="alert alert-success">
      Le magasin sera ouvert
      </div>
    <?php else: ?>
      <div class="alert alert-danger">
      Le magasin sera fermé
      </div>
    <?php endif ?>
    <?= date('N'); ?>
    <ul>
    <?php foreach(JOURS as $k => $jour):?>
        <li > 
            <strong><?= $jour ?> </strong> :         
            <?= creneaux_html(CRENEAUX[$k]); ?> </li>
        <?Php endforeach; ?>
    </ul>
    </div>
</div>


<?php require 'elements/footer.php'; ?>
