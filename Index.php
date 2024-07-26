<?php

$number_user = isset($_GET['number_user']) ? $_GET['number_user'] : null;
//trasformo la variabile $repeat in un valore booleano perche come value hanno una stringa ugale a 'true' o 'false'
$repeat = isset($_GET['repeat']) ? $_GET['repeat'] === 'true' : false;
$numb = isset($_GET['numb']);
$car = isset($_GET['car']);
$simb = isset($_GET['simb']);
// Definisco l'array per evitare l'alert
$generated_password = null;

//trasformo la variabile $repeat in un valore booleano perche come value hanno una stringa ugale a 'true' o 'false'

if ($number_user && $number_user > 8 && $number_user < 32) {
   include_once 'function.php';
 $generated_password = createPassword($number_user, $numb, $car, $simb);
    var_dump($generated_password);
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <!--  1. al click del pulsante  controllo se la variabile inserita dal utente  sia compresa tra 8 e 32
        2.nella funzione  di base sommo i 3 diversi array  e ne ottengo uno unico.
        3.inizio un ciclo che partendo da 0 arrivera al valore della varibile inserita dal utente.
        4.nel ciclo estraggo un valore random dal array ottenuto sommando i tre array.
        5.il valore random andra da 0 alla lunghezza dell array somma -1.
        (Milstone 1)
 -->
    <!--(Milstone 2)
        1. se il valore del input ripeti è true allora bisognera includere nel ciclo una condizione che verifichi la presenza del elemento nel array è inserirlo solo se non è incluso e far progredire il ciclo.
        (valutarte se usare un while al posto del ciclo for)

        -->
    <!--(Milstone 3)
        1. se il valore del input relativo alla singola stringa è true bisognerà modificare l array da quale estreiamo gli elementi.Quindi se solo una varibile legata al array è true allora useremo solo quella array se invece le variabili vere sono 2 faremo una somma di queste ultime.
        2. nel caso una varibile fosse true e non ripetibile dovremmo cambiare il numero massimo di carratteri della password da generare.
         -->




    <div class='container'>
        <div class='row row-cols-1 '>
            <div class="col-8 text-center mx-auto">
                <h1 class='mx-auto '>
                    Strong Password Generator
                </h1>
                <h2 class='mx-auto'>
                    Genera una password sicura
                </h2>
            </div>
            <div class="col-8 mx-auto m-5 border bg bg-info">
                <?php echo $generated_password != null ? $generated_password : 'Genera una password di lunghezza compressa fra 8 e 32' ?>
            </div>
            <div class="col-8 mx-auto">
                <form action="index.php" method='GET'>
                    <div class="row">
                        <div class="col-6 my-3">
                            <label for="number-user" class="form-label">Scegli un numero</label>
                        </div>
                        <div class="col-6 my-3">
                            <input type="number" class="form-control" id="number-user" name='number_user'>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Consenti la ripetizione di uno o più caratteri </label>
                        </div>
                        <div class="col-6 ">
                            <div class='gy-3'>
                                <input class="form-check-input" type="radio" name="repeat" value="true"
                                    id="repeat-true">
                                <label class="form-check-label" for="repeat-true">NO</label>
                            </div>
                            <div class='gy-3'>
                                <input class="form-check-input" type="radio" name="repeat" value="false"
                                    id="repeat-false">
                                <label class="form-check-label" for="repeat-false">Si</label>
                            </div>

                            <div class='gy-3'>
                                <input class="form-check-input" type="checkbox" name='numb' id="numb-array">
                                <label class="form-check-label" for="numb-array">
                                    Numeri
                                </label>
                            </div>
                            <div class='gy-3'>
                                <input class="form-check-input" type="checkbox" name='car' id="car-array">
                                <label class="form-check-label" for="car-array">
                                    Lettere
                                </label>
                            </div>
                            <div class='gy-3'>
                                <input class="form-check-input" type="checkbox" name='simb' id="simb-array">
                                <label class="form-check-label" for="simb-array">
                                    Simboli
                                </label>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <button type='submit' class='btn btn-primary'>Invia</button>
                            <button type='reset' class='btn btn-secondary'>Annulla</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>