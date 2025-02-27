<?php
session_start();
$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h4 class="mt-4">La tua password è : <?php echo $password  ?></h4>
    </div>
</body>

</html>