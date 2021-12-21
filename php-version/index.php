<?php
    include_once __DIR__ . './partials/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <div class="container h-100">
            <img class="h-100 p-3" src="./img/logo.png" alt="Logo">
        </div>
    </header>

    <main class="py-5 flex-grow-1">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="row w-75">
                    <?php 
                        foreach ($database as $album) :
                    ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-3">

                        <div class="album d-flex flex-column text-center h-100">
                            <img class="w-100 px-5 py-4" src="<?php echo $album['poster']; ?>" alt="">
                            <div class="px-3">
                                <h3 class="h5">
                                    <?php echo $album['title']; ?>
                                </h3>
                                <div class="pb-1">
                                    <?php echo $album['author']; ?>
                                </div>
                                <div class="pb-1 fs-5">
                                    <?php echo $album['year']; ?>
                                </div>
                                <div class="pb-4">
                                    <?php echo $album['genre']; ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>