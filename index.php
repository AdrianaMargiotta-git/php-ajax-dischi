<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <?php
        require_once "data.php";
    ?>
</head>
<body>

    <div id="app">

        <?php
            foreach ($database as $dischi){
        ?> 
            <div class="album">
                <div class="prova">
                    <div class="copertina">
                        <img src="<?php echo $dischi["poster"] ?>" alt="immagine di copertina non disponibile">
                    </div>
                    <h2 class="titolo"><?php echo $dischi["title"] ?></h2>
                    <h3 class="autore"><?php echo $dischi["author"] ?></h3>
                    <h3 class="anno"><?php echo $dischi["year"] ?></h3>
                </div>
                
            </div>
        <?php
            }
        ?>
        
    </div>
    
</body>
</html>