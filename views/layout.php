<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AOE2 | <?php echo $titulo ?? ""?></title>       
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Open+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">   
    <link rel="shortcut icon" href= "/build/img/logo.jpg">
    
</head>
<body>

    <?php echo $contenido; ?>
    <?php echo $script ?? ''; ?>

</body>
</html>