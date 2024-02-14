<?php 
$error = null;
$success= null;
$email = null;
if(!empty($_POST['email'])){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
     // écrire dans un fichier les emails enregistré. DIRECTORY_SEPARATOR c'est pour contruire le chemein vers le fichier
     //   $file = __DIR__ .DIRECTORY_SEPARATOR . 'emails' .DIRECTORY_SEPARATOR . date('Y-m-d');
        $file = __DIR__ .DIRECTORY_SEPARATOR . 'cli' .DIRECTORY_SEPARATOR . date('Y-m-d');
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
        $success = "Votre email a bien été enregistré";
        $email = null;
    }else{
        $error = "L'email n'est pas valide";
    }
}


require 'elements/header.php'; 
?>


<h1 style ="  color: #fff;">S'inscrire à la newsletter</h1>
<p style ="  color: #fff;"> Il arrive souvent que l'idée illustrée se confonde avec l'idée expliquée, une preuve pouvant servir à expliquer quelque chose, tout comme une explication pouvant aussi illustrer. Ces deux parties peuvent donc être traitées séparément ou ensemble. L'ordre de présentation de ces trois parties peut varier (l'explication peut précéder ou suivre la preuve, selon la façon avec laquelle on présente les illustrations.</p>

<?php if($error): ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php endif; ?>
<?php if($success): ?>
    <div class="alert alert-success">
        <?= $success ?>
    </div>
<?php endif; ?>


<form action="newsletter.php" method="POST" class="form-inline">
    <div class="form-group">
        <input type="email"  name="email" placeholder="Entrer votre email" required class="form-control" value="<?= htmlentities($email) ?>">
    </div> &nbsp;&nbsp;

    <button type="submit" class="btn-primary form-control">S'inscrire</button>
</form>


<?php require 'elements/footer.php'; ?>
