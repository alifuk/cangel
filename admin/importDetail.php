<?php

$file = fopen("../Produkty.csv", "r");


require_once '../connect.php';
fgets($file);
fgets($file);
while (!feof($file)) {
    
    
    $line = explode(";", fgets($file));
    
    
    $stmt = $conn->prepare("INSERT INTO detaily (nazev, obsah, foto, nadpis, kodProduktu, material,podkategorie, rozmery, foto2, foto3, foto4) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssssssss', $nazev, $obsah, $foto, $nadpis,$kodProduktu,$material,$podKategorie,$rozmery,$foto2,$foto3,$foto4);
    
    $nazev = $line[0];
    $nadpis = $line[1];
    $podKategorie = $line[2];
    $kodProduktu = $line[3];
    $material = $line[4];
    $rozmery = $line[5];
    $obsah = $line[6];
    $foto= $line[7];
    $foto2= $line[8];
    $foto3= $line[9];
    $foto4= $line[10];
    
    
    $stmt->execute();

    echo $stmt->error;
    $stmt->close();
    



    /*if (count($line) >= 4 && trim($line[3]) != "") {

        $stmt = $conn->prepare("SELECT Id FROM kategorie WHERE nazev = ?");
        $stmt->bind_param('s', $nazev);
        $nazev = $line[3];

        $stmt->execute();

        $stmt->bind_result($kategorieId);
        $existuje = false;
        while ($stmt->fetch()) {
            $existuje = true;
        }
        $stmt->close();



        if (!$existuje) {

            //nalezení id nadkategorie
            $stmt = $conn->prepare("SELECT Id FROM kategorie WHERE nazev = ?");
            $stmt->bind_param('s', $nazev);
            $nazev = $line[2];

            $stmt->execute();

            $stmt->bind_result($kategorieId);
            $idNadkategorie = 0;
            while ($stmt->fetch()) {
                $idNadkategorie = $kategorieId;
            }
            $stmt->close();



            if ($idNadkategorie != 0) {

                $stmt = $conn->prepare("INSERT INTO kategorie (nazev, nadkategorie) VALUES(?,?)");
                $stmt->bind_param('si', $nazev, $nadkategorie);
                $nazev = $line[3];
                $nadkategorie = $idNadkategorie;
                $stmt->execute();

                $stmt->close();



                echo "přidáno " . $line[3] . " k " . $line[2] . "<br>";
            }
        }
    }
     * 
     * 
     */
}
?>