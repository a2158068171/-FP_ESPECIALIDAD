<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $multi = 1;
    for ($i = 1; $i <= 20; $i ++){
        $multi *= $i;
    }
    echo $multi;
    ?>
</body>
</html>