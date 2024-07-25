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
        <div class='row row-cols-1'>
            <div class="col-12 text center">
                <h1 class='mx-auto'>
                    Strong Password Generator
                </h1>
                <h2 class='mx-auto'>
                    Genera una password sicura
                </h2>
            </div>
            <div class="col-8 mx-auto"> Genera una password di lunghezza compressa fra 8 e 32</div>
            <div class="col-8"></div>
        </div>
    </div>

</body>

</html>