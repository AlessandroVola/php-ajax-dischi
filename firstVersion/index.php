<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>First-version</title>
</head>
<body>
    <h1>Vue-dischi Prima versione</h1>

    <?php
        include __DIR__ 'database.php';
        
    ?>

    <div class="album-container">
        <?php
            foreach ($database as $album){
                ?>
                    <div>
                        <div class="card">
                            <div>
                                <img src="<?=$album['poster']?>" alt="">
                            </div>
                            <h3><?=$album['title']?></h3>
                            <p><?=$album['year']?></p>
                            <p><?=$album['author']?></p>
                        </div>
                    </div>
                <?php
            };
        ?>
    </div>
</body>
</html>