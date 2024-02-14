<?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
   
   <!--- pour définir un titre à la page du php --->
    <title> 
        <?php  if (isset($title)): ?>
            <?= $title ?>
        <?php else: ?>
        Mon RESTAURANT ZAPI
        <?php endif ?>
     </title>
 



    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/starter-template/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  </head>

  <body style="background-color: #cfe2f3; background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNwP6ikw7f249okLrHchmLA26Fj3PQvW5oDcsPtITrjqbY67g-wam1-TS4FcLZaN0waLS-0HqVtRTMkAFIvbcqWrtvuuJP7nT77P18ZsrGvqbBATz5QK1DKO_A3wsHFvixWpSHREQ1q6s/s1600/aaba61f697f6e3adgb.jpg'); background-size: cover; height: 100vh;  margin: 0px 0 0 0px; background-size: 100% auto; dispaly: flex;">

    <nav class="navbar navbar-expand-md navbar-dark bg-light-brown text-white mb-4 " style= "background-color: #d3a47c;" >
      <a class="navbar-brand" href="index.php">Navigation</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault" >
        <ul class="navbar-nav mr-auto">
          <?= nav_menu('nav-link') ?>
        </ul>
      </div>
    </nav>

    <main role="main" class="container" style = " max-width: 2100px;">