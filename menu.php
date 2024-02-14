<?php require 'elements/header.php';
$title = "Notre Menu";
$lignes = file(__DIR__ . DIRECTORY_SEPARATOR. 'data' . DIRECTORY_SEPARATOR .'menu.csv');
foreach ($lignes as $k => $ligne){
    $lignes[$k] = explode("\t", trim($ligne));
}
?>

<div class=" container" style ="  color: #fff;  background-color: #8B4513; background-size: cover; height: 170vh;  margin: -25px 0 0 175px; background-size: 100% auto; dispaly: flex;">
    <h1 style = " text-align:center ">Menu</h1>
    <?php foreach($lignes as $ligne): ?>
        <?php if (count($ligne) === 1): ?>
        <h2><?= $ligne[0] ?></h2>
        <?php else: ?>
    
         <div class="row" >
            <div class="col-sm-8">
            <p>
            <strong><?=$ligne[0];?></strong><br>
            <?= $ligne[1]; ?>
        
            </p>
            </div>
            <div class="col-sm-4">
           <strong> <?= number_format($ligne[2], 2, ',', ' ') ?> €</strong>
            </div>
        </div>
    
        <?php endif; ?>

    <?php endforeach; ?>
</div>




<?php require 'elements/footer.php';?>