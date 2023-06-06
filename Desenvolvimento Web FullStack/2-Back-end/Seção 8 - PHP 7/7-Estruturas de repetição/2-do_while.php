<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
</head>
<body>
    <?php

    $num = 1;
        //faça enquanto num for menor que 10. Break e continue funcionam.
        do {
            echo "$num <br>";
            $num++;
            /*
            if($num > 100) {
                break;
            }
            */
        } while($num <= 10) 


    ?>
</body>
</html>