<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day1 Part1</title>
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

        //sort(riordina l'array in ordine crescente)
        sort($col1);
        sort($col2);
        //print_r($col1); echo "<br>";
        //print_r($col2);

        $diffTot = 0;
        for($i = 0; $i < count($col1); $i++){
            //differenza tra i due    [potrebbe essere più ottimale ma vabbeee]
            if($col1[$i] <= $col2[$i]){
                $diff = $col2[$i] - $col1[$i]; 
                //echo ("<br>diff: " . $diff);            
            }else if($col1[$i] >= $col2[$i]){
                $diff = $col1[$i] - $col2[$i];     
                //echo ("<br>diff: " . $diff);        
            }else if($col1[$i] == $col2[$i]){
                $diff = 0;
                //echo ("<br>diff: " . $diff);
            }

            $diffTot = $diffTot + $diff;
        }  

        echo ("<br><br>diffTot: " . $diffTot);
    ?>
</body>
</html>