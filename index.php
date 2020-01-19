<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset= utf-8">
        <title>Ejercicio del vector</title>
    
    </head>
    <body>
    
     <?php
        $vector = " 157 125 1295 268 279 192 781 395 57 413 1223 821 272 544 1048 810 
        466 610 711 893 1141 243 945 849 174 620 945 233 15 42 1197 163 
        158 1192 422 428 83 1193 813 130 305 736 942 567 1270";

        $vector = explode(" ",$vector);
        $suma = 0;

        foreach($vector as $valores){
            $suma = $suma + $valores;
        }
     
     echo $suma;
     
     
     
     ?>
     
    </body>
</html>