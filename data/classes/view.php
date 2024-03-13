<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="hamster.jpg">
</head>
<body>
<div class="container">
    <div class="shadow-lg p-2 m-3 bg-body-tertiary rounded text-center">
        <h1>Swap Game</h1>
        <button class="btn btn-outline-light">Neues Spiel</button>
    </div>
    <h2>Options</h2>
    <form action="/" method="post">
        <div class="input-group py-3 mb-3">
            <label for="fieldsize"></label>
            <input type="text" class="form-control" placeholder="Feldgröße" aria-label="Recipient's username"
                   aria-describedby="button-addon2" name="fieldsize" min="3" max="12" required>
            <button class="btn btn-outline-light" type="submit" id="button-addon2" name="savefieldsize">Button
            </button>
        </div>
    </form>
    <h3 class="text-center shadow-lg py-2">Game-Board</h3>
    <div id="board" class=" d-flex justify-content-center">
        <div class="">
            <?php
                global $controller;
                echo $controller->board->render(); ?>
        </div>
    </div>
    <div class="container py-3">
        <form action="/" method="post">
            <div class="row">
                <div class="col">
                    <label>Feld 1:</label>
                    <input class="form-control" placeholder="x" name="field1_x">
                    <input class="form-control" placeholder="y" name="field1_y">
                </div>
                <div class="col">
                    <label>Feld 2:</label>
                    <input class="form-control" placeholder="x" name="field2_x">
                    <input class="form-control" placeholder="y" name="field2_y">
                </div>
                <div class="col">
                    <button class="btn btn-outline-light mt-4" type="submit" name="swapFields">Ok</button>
                </div>
            </div>
        </form>
    </div>
    <div class="shadow-lg p-2 m-3 bg-body-tertiary rounded text-center">
        <h2>Anleitung</h2>
        <p>Wähle zwei Felder aus, die nebeneinander liegen und tausche sie miteinander.</p>
        <p>Wenn dadurch eine Reihe von mindestens 3 Feldern der gleichen Farbe ensteht,</p>
        <p> werden diese Felder entfernt und du erhältst Punkte.</p>
    </div>
    <div>
        <h2>Spiel laden</h2>
        <form>
            <input>
            <button>Ok</button>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>

