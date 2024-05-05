<?php 
    require_once __DIR__ . '/partials/functions.php'; 
?>


<?php

    // Creo array associativo contenente alfabeto, numeri da 0 a 9, e simboli random
    $characters = array_merge(range('a', 'z'), range(0, 9), range('!', '@'));

    //con chiamata GET prendo numero per lunghezza password inserita da user.
    $userNumber = $_GET['userNumber'];

    //var con password recuperata con require in file functions.
    $userPassword = passwordRandom($userNumber, $characters);
    
?>

<?php 
    session_start();
    $_SESSION['password'] = $userPassword;

?>


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

        <div class="result mb-3 p-3 rounded">
            <span><b><?php echo $userPassword; ?></b></span>
        </div>

        <form form="GET">
            <div class="input p-3 rounded mb-5">
               
                <div class="row"> 
                    <label class="col-6">Lunghezza Password:</label>
       

                    <div class="col-6">
                    <input  name="userNumber" type="text"></input>
                    </div>
                </div>

            
                <div  class="row">
                    <label class="col-6" for="">Consenti ripetizioni di uno o più caratteri</label>
                    <div class="col-6">
                        <div>   
                            <input  type="radio">
                            <span>si</span>
                        </div>
                     
                        <div>   
                            <input  type="radio">
                            <span>no</span>
                        </div>
                       
                        <div class="mt-3">   
                            <input  type="checkbox">
                            <span>Lettere</span>
                        </div>
                        <div>   
                            <input  type="checkbox">
                            <span>Numeri</span>
                        </div>
                        <div>   
                            <input  type="checkbox">
                            <span>Simboli</span>
                        </div>
                                      
                    </div>          
                </div>

                
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">INVIA</button>
                <button type="submit" class="btn btn-secondary">ELIMINA</button>
            </div>

                
            </div>
    
        </form>

    </main>
    
</body>
</html>