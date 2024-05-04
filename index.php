<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="./css/styles.css">
    <title>php-strong-password-generator</title>
</head>
<body>
    

    <main class="container">

        <div class="text-center titles">
            <h1>Strong Password Generator</h1>
            <h3> Genera una password sicura</h3>
        </div>

        <div class="result mb-3 p-3">
            <span>Nessun parametro valido inserito</span>
        </div>

        <div class="input p-3 d-flex justify-content-between">
            <label>Lunghezza Password:</label>

            <input type="text"></input>
        </div>


        <div class="mt-3">
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
        </div>
        
    </main>
    
</body>
</html>