<?php 

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>

    <h1>PASSWORD:</h1> 
    <div> <?php echo $_SESSION['password']; ?></div>
    
</body>
</html>