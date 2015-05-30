<html>
    <head>
        <meta charset="UTF-8">
        <title>Editace produktů</title>
    </head>
    <body>
        <?php
        require_once '../connect.php';
        $obsah = "";
        if (isset($_POST['nazev'])) {
            $nazev = $_POST['nazev'];
            $nadpis = $_POST['nadpis'];
            $obsah = $_POST['obsah'];
            $stmt = $conn->prepare('SELECT obsah FROM detaily WHERE nazev =?');
            $stmt->bind_param('s', $nazev);
            $stmt->execute();

            $stmt->bind_result($obsah);
            $existuje = false;
            while ($stmt->fetch()) {
                $existuje = true;
            }
            
            $nazev = $_POST['nazev'];
            $nadpis = $_POST['nadpis'];
            $obsah = $_POST['obsah'];
            $material = $_POST['material'];
            $podKategorie = $_POST['podKategorie'];
            $kodProduktu = $_POST['kodProduktu'];
            
            if ($existuje) {

                $stmt = $conn->prepare('UPDATE detaily SET nadpis=?, obsah=?, material = ?, podKategorie = ?, kodProduktu = ?  WHERE nazev = ?');
                $stmt->bind_param('ssssis', $nadpis, $obsah, $material, $podKategorie, $kodProduktu, $nazev);
                $stmt->execute();
            } else {
                $stmt = $conn->prepare('INSERT INTO detaily (nazev, obsah, nadpis, material, podKategorie, kodProduktu) VALUES (?,?,?,?,?,?)');
                $stmt->bind_param('sssssi', $nazev, $obsah, $nadpis, $material, $podKategorie, $kodProduktu);
                $stmt->execute();
            }
        }


        $stmt = $conn->prepare('SELECT obsah, nazev, nadpis, material, podKategorie, kodProduktu FROM detaily');
        $stmt->execute();
        
        $stmt->bind_result($obsah, $nazev, $nadpis, $material, $podKategorie, $kodProduktu);

        while ($stmt->fetch()) {

            include './insertForm.php';
        }
        $stmt->close();


        ?>



    </body>
</html>

