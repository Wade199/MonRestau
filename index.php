<?php 
session_start ();
$_SESSION ['role'] = 'administrateur';
$title = "page d'accueil";
require 'elements/header.php'; ?>
<div class="row ">
  <div class="col-md-12" >    
    <div class="container" >
      <div class="container-fluid p-0 bg-image">
         <div class="starter-template" style ="  color: #fff; " >
           <h1 style ="text-align:center"> <strong>MON RESTAURANT ZAPI </strong></h1> 
          </div>
      </div>
    </div><br><br><br><br><br><br><br><br>

    <div class = "welcome-1">
    <div class="C-content-box text-center bg-brown py-4" style ="  color: #fff;  background-color: #8B4513;">
      <h2> Bienvenue chez le Restaurant ZAPI, Votre Nouveau Restaurant dans Lille</h2>
      <div class= " c-line-center c-theme-bg faketitlebar"></div>
      <div class ="rich-text">
        <p style ="text-align:center">Bienvenue au Restaurant Délicieux, où nous vous proposons une expérience culinaire exceptionnelle dans un cadre chaleureux et convivial.
              Notre menu diversifié offre une sélection de plats délicieux, préparés avec des ingrédients frais et de qualité, pour satisfaire tous les palais.Que ce soit pour un repas décontracté entre amis ou une occasion spéciale, notre équipe dévouée est là pour vous offrir un service impeccable et vous faire passer un moment inoubliable.</p>
        <p style ="text-align:center">Réservez dès maintenant et venez savourer nos délices culinaires dans une ambiance unique!</p>
      </div><br><br><br><br><br><br>
      <div class="row">
        <div class="col-sm">
            
            <div class="bg-primary text-white p-3" style= "background-image: url('https://c8.alamy.com/compfr/m0e707/collage-avec-differents-types-de-pizza-ingredients-pour-la-pizza-sur-la-table-en-bois-vue-d-en-haut-m0e707.jpg'); background-size: cover; height: 40vh;  margin: 0px 0 0 0px; background-size: 100% auto; dispaly: flex;">
                
            </div>
        </div>
        <div class="col-sm">
            
        <div class="bg-primary text-white p-3" style=" background-image: url('https://www.flunch-traiteur.fr/media/wysiwyg/47325_01_1.jpg'); background-size: cover; height: 40vh;  margin: 0px 0 0 0px; background-size: 100% auto; dispaly: flex;">
                
            </div>
        </div>
        <div class="col-sm">
            
        <div class="bg-primary text-white p-3" style="background-image: url('https://www.patissiers.pro/images/dossiers/historique/glace3-160143.jpg'); background-size: cover; height: 40vh;  margin: 0px 0 0 0px; background-size: 100% auto; dispaly: flex;">
                
            </div>
        </div>
    </div>
  </div>
    </div>
  </div>
  </div>
  </div>

  <div class="container">
    <h1 style ="  color: #fff; ">Pour accéder à l'adresse sur Google Maps, <a href="https://www.google.com/maps?q=24+Boulevard+Van+Gogh,59650+Villeneuve+d'Ascq" target="_blank" >cliquez ici</a>.</h1>
</div>
  
  
</div> 







<?php require 'elements/footer.php'; ?>
