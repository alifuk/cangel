<html>
    <head>
        <meta charset="UTF-8">
        <title>title</title>
    </head>
    <body>
        <?php
        require_once '../connect.php';
        $obsah = "";
        if (isset($_POST['nazev'])) {

            $stmt = $conn->prepare('INSERT INTO detaily (nazev, obsah)
VALUES (?,?)');
            $stmt->bind_param('ss', $nazev, $obsah);

            $nazev = $_POST['nazev'];
            $obsah = $_POST['obsah'];
            $stmt->execute();
            echo "1";
        }

        if (isset($_GET['nazev'])) {

            $stmt = $conn->prepare('SELECT obsah FROM detaily WHERE nazev = ?');
            $stmt->bind_param('s', $nazev);

            $nazev = $_GET['nazev'];
            $stmt->execute();

            $stmt->bind_result($obsah);
            
            while ($stmt->fetch()) {
                //echo $obsah;
            }
            $stmt->close();
        }
        ?>








        <form method="POST" action="sluzbyInsert.php">

            <input type="text" name="nazev" value="<?php 
            if(isset($_GET['nazev'])){
                echo $_GET['nazev']; 
            }
            
            ?>">
            <textarea name="obsah">
                
                <?php echo $obsah; ?>
            </textarea>
            <input type="submit">




        </form>
    </body>
</html>

