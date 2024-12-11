<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day1 Part2</title>
</head>
<body>
    <?php
        $file = fopen("input.txt", "r") or die("Impossibile aprire file");              //inizialmente al posto che input.txt avevo usato prova.txt
        $col1 = []; $col2 = [];                 

        while(!feof($file)){
            $riga = fgets($file);
            $ex_riga = explode("   ", $riga);
            $col1[] = $ex_riga[0];
            $col2[] = $ex_riga[1];
        }

        //controllo
        //print_r($col1); echo "<br>";
        //print_r($col2); echo "<br><br>";

        $scoreTot = 0;              
        //quante volte un numero di col1 compare in col2
        for($i = 0; $i < count($col1); $i++){
            $ind = 0;           //indice che mi indica quante volte il num è ripetuto in col2
            for($j = 0; $j < count($col2); $j++){
                if($col1[$i] == $col2[$j]){
                    $ind++;
                }
                $score = $col1[$i] * $ind;
                //echo ("<br>score: " . $score);
            }
            $scoreTot = $scoreTot + $score;
        }
            
        echo ("<br><br>scoreTot: " . $scoreTot);
    ?>
</body>
</html>