</main>
<footer class="bg-light-brown text-white" style= " margin-top: -16px; background-color: #d3a47c;" >
<hr>
<div class= "container">
<div class="row">
   <div class="col-md-4">
    <?php
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
        ajouter_vue();
    ?>
   </div>
   <div class="col-md-4">
   
<form action="newsletter.php" method="POST" class="form-inline">
    <div class="form-group ">
        <input type="email"  name="email" placeholder="Entrer votre email" required class="form-control" >
    </div>&nbsp;&nbsp;

    <button type="submit" class="btn-primary form-control">S'inscrire</button>
</form>
   </div>

   <div class="col-md-4" >
   <h5>Navigation</h5>
   <ul class="list-unstyledtexte-small">
    <?= nav_menu() ?>
   </ul>
   </div>
</div>
</div>
</footer>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>