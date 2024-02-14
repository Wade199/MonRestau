<?php 
require_once 'functions.php';
// déclaration de variable 
/*$aDeviner = 1200;
$erreur = null;
$succes = null;
// création d'une variable valus qui crrespond la valeur à ajouter dans la formulaire 
$value =  null ;
if (isset($_POST['chiffre'])){
    $value = (int)$_POST['chiffre'];
    if( $value > $aDeviner){
        $erreur = "Votre chiffre est trop grand"; 
    } elseif ( $value < $aDeviner){
        $erreur = "Votre chiffre est trop petit";

    }else{
        $succes = "Bravo ! Vous avez deviné le chiffre <strong>$aDeviner</strong>";
    }
    // sa permet de sauvagarder dans la variable 
   
}*/
// utilisation des checkbox
$parfums =[
    'Fraise' => 4 ,
    'Chocolat' => 5,
    'Vanille' => 3
];
// On peut utiliser des radio
$cornets = [
    'Pot' => 2,
    'Cornet' => 3
];
// pour les suplément on utilise aussi des checkbox
$suplements = [
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5
];
$title = "Composer votre glace";
$ingredients = [];
$total = 0;
if (isset($_GET['parfum'])){
    foreach($_GET['parfum'] as $parfum){
        if(isset($parfums[$parfum])){
            $ingredients[] = $parfum;
            $total += $parfums[$parfum];
        }
    }
}
if (isset($_GET['suplement'])){
    foreach($_GET['suplement'] as $suplement){
        if(isset($suplements[$suplement])){
            $ingredients[] = $suplement;
            $total += $suplements[$suplement];
        }
    }
}
if (isset($_GET['cornet'])){
    $cornet =$_GET['cornet'];
        if(isset($cornets[$cornet])){
            $ingredients[] = $cornet;
            $total += $cornets[$cornet];
        }
}
require 'elements/header.php';
?>

<h1 style ="  color: #fff; ">Composer votre glace</h1>
<div class="row">
    <div class="col-md-4">
        <div class="card">
        <h5 class="card-title">Votre glace</h5>
         <ul>
            <?php foreach($ingredients as $ingredient): ?>
                <li><?= $ingredient ?></li>
             <?php endforeach;?>
         </ul>
         <p>
                <strong>Prix :</strong> <?= $total ?> €
         </p>
        </div>
    </div>
    <div class="col-md-8" style ="  color: #fff;  background-color: #8B4513; background-size: cover; height: 70vh;  margin: -80px 0 0 0px; background-size: 100% auto; dispaly: flex;">

    <form action="jeu.php" method= "GET">
        <h2>Choisissez votre parfum</h2>
        <?php foreach($parfums as $parfum => $prix):?>
        <div class="checkbox">
            <label>
                <?= checkbox('parfum', $parfum, $_GET)?>
                
                <?= $parfum ?> - <?= $prix ?> €
            </label>
        </div>    
        <?php endforeach;?>
        <h2>Choisissez votre cornet</h2>
        <?php foreach($cornets as $cornet => $prix):?>
        <div class="checkbox">
            <label>
                <?= radio('cornet', $cornet, $_GET)?>
                
                <?= $cornet ?> - <?= $prix ?> €
            </label>
        </div>    
        <?php endforeach;?>
        <h2>Choisissez vos suppléments</h2>
        <?php foreach($suplements as $suplement => $prix):?>
        <div class="checkbox">
            <label>
                <?= checkbox('suplement', $suplement, $_GET)?>
                
                <?= $suplement ?> - <?= $prix ?> €
            </label>
        </div>    
        <?php endforeach;?>
        <button type="submit" class="btn btn-primary" >Composer ma glace</button>
  <!-- <div>
        <input type="checkbox" name="parfum[]" value="Fraise"> Fraise <br>
        <input type="checkbox" name="parfum[]" value="Vanille"> Vanille<br>
        <input type="checkbox" name="parfum[]" value="Chocolat"> Chocolat<br>

   </div><br>
    <button type="submit" class="btn btn-primary">Deviner</button>-->
    </form>
    </div>
</div>
<?php  require 'elements/footer.php'?>