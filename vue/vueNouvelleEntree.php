<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title><?php echo $titre ?></title>

<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>

<h1 class="text-center" style="font-size: 62px;">Nouvelle Entrée</h1>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form>
                <div class="form-group">
                    <h2 class="text-left">Nombre d'entrées Adulte</h2>
                    <input type="text" class="form-control" id="exampleInput" placeholder="Enter Text">
                </div>

                <div class="form-group">
                    <h2 class="text-left">Nombre d'entrées Enfants</h2>
                    <input type="text" class="form-control" id="exampleInput" placeholder="Enter Text">
                </div>
        </div>
        <div class="col-lg-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                    <label class="form-check-label" for="checkbox1">
                        Exposition permanente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                    <label class="form-check-label" for="checkbox2">
                        L'age d'or ou du bronze
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                    <label class="form-check-label" for="checkbox3">
                        Les relations familiales chez les Ouzbeck du moyen âge
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                    <label class="form-check-label" for="checkbox4">
                        Tenues vestimentaires des péruviens du milieu du 17e siècle
                    </label>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary">Calculer Tarif</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-secondary">Valider</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
            <p class="text-center" style="font-size:25px;">A payer: 0€</p>
        </div>
    </div>
</div>
<?php

?>
