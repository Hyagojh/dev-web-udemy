<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php

    $num = 1;
        //repita enquanto num for menor que 10. Break e continue funcionam.
        while($num < 1000) {
            echo "$num <br>";
            $num++;
            /*
            if($num > 100) {
                break;
            }
            */
        }


    ?>
</body>
</html>