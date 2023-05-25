<?php require_once 'links.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta description="Author" author="Anderson Nunes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $link_css?>">
    <link rel="shortcut icon" href="<?= $link_favicon?>" type="image/x-icon">

    <title><?= $título ?></title>
</head>
<body>
    <main>
        <section class="img-box">
            <img src="<?=$logo?>" alt="">
        </section>
        <section class="link-box">
            <?php
            foreach($links as $nome => $link){
                echo '<a class="btn-link" href="'.$link.'"target="_blank">'.$nome.'</a>';
            }
            
            ?>
        </section>     
        <section class="icons-box">
            <?php
            foreach($links_icons as $icon){
                echo '<a href="'.$icon[0].'" target="_blank"><img src="assets/icons/'.$icon[1].'" alt="icone do '.$icon[2].'"></a>';
            }
            
            ?>
        </section>
    </main>
    <footer>
        <div>
            <p><?= $footer ?></p>
        </div>
    </footer>
</body>
</html>