<?php
require 'elements/header.php';

/*$nom = null;
if(!empty($_GET['action']) && $_GET['action'] === 'deconnecter'){
    unset($_COOKIE['utilisateur']);
    setcookie('utilisateur', '',time() - 10);
}
if (!empty($_COOKIE['utilisateur'])){
    $nom = $_COOKIE['utilisateur'];
}
if(!empty($_POST['nom'])){
    setcookie('utilisateur', $_POST ['nom']);
    $nom = $_POST ['nom'];
}
$user =[
    'prenom' => 'jan',
    'nom' => 'Doe',
    'age' => 10 
];

//setcookie ('nom')


<?php if ($nom): ?>
    <h1>Bonjour <?= htmlentities($nom) ?></h1>
    <a href="profil.php?action=deconnecter">Se déconnecter</a>
<?php else: ?>
<form action="" method='post'>
    <div class="form-grouop">
        <input class="form-control" name="nom" placeholder= "Entrer votre nom">
    </div><br>
    <button class="btn btn-primary"> Se connecter</button>
</form>
<?php endif; ?>*/
$age = null;

if (!empty($_POST['birthday'])){
    setcookie('birthday', $_POST['birthday']);
    $_COOKIE ['birthday'] = $_POST['birthday'];
}

if (!empty($_COOKIE['birthday'])) {
    $birthday = (int)$_COOKIE['birthday'];
    $age =(int)date('Y') - $birthday;
}
?>

<?php if ($age >= 18): ?>
    <h1> Contenu réservé au adultes </h1> 
    <?php elseif ($age !== null): ?>
    <div class="alert alert-danger"> Vous n'avez pas l'age de voir le contenu</div>
<?php else: ?>
<form action="" method="post">
    <div class= "from-group">
    <label for="birthday"> Section pour les adultes entrer votre date de naissance :</label>
        <select name="birthday" id="birthday" class="form-control">
        <?php for($i = 2024; $i > 1919; $i--): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor ?>
        </select>
    </div><br>
    <button type="submit"> Envoyer </button>
</form>

<?php endif; ?>
<?php require 'elements/footer.php'; ?>

