<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        $paragraph = 'ciao sono proprio un bravo programmatore che non dice mai 404 e poi 404 e ancora di più 404';
        
        echo $paragraph;
        
        //?censura=404
        $subs = $_GET['censura']; 
        ?>
    </h1>

    <h1>
        Censurato:
        <?php
        $paragraph2 = str_replace($subs,'***',$paragraph);
        echo $paragraph2;
        ?>
    </h1>
</body>
</html>