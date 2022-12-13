<?php
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Genre.php";

$yourName = new Movie("Your Name", "yourname.jpg", new Genre("Romance"), "Shinkai", 380, 1);
$tangled = new Movie("Tangled", "tangled.jpg", new Genre("Musical"), "Disney", 592, 4);


$movies = [
    $yourName,
    $tangled
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row row-cols-4">
            <?php foreach ($movies as $movie) { ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $movie->poster; ?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo $movie->title ?>
                            </h4>
                            <p class="card-text">
                                <?php echo $movie->getDetails() ?>
                            </p>
                            <p class="card-text">
                                <?php echo $movie->genre->name ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>