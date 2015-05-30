<form method="POST" action="sluzbyInsert.php">

    nazev: <input type="text" name="nazev" value="<?php echo $nazev; ?>">
    nadpis: <input type="text" name="nadpis" value="<?php echo $nadpis; ?>">
    obsah: <textarea name="obsah" rows="7" cols="40">                
        <?php echo $obsah; ?>
    </textarea>
    
    material: <input type="text" name="material" value="<?php echo $material; ?>">  
    podKategorie: <input type="text" name="podKategorie" value="<?php echo $podKategorie; ?>">      
    kodProduktu: <input type="text" name="kodProduktu" value="<?php echo $kodProduktu; ?>">
    <input type="submit">


</form>