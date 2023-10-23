<?php
require __DIR__  . '/Models/Product.php';
require __DIR__  . '/Models/Food.php';
require __DIR__  . '/Models/Toy.php';
require __DIR__  . '/Models/Kennel.php';
require __DIR__  . '/Models/Category.php';


require __DIR__  . '/db.php';


?>

<!doctype html>
<html lang="en">

<head>
    <title>PetShop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>


    <main>
        <div class="container">
            <div class="row my-4">
                <?php foreach ($prodotti as $prodotto) : ?>
                    <div class="col-6 col-md-4 my-3 text-center ">
                        <div class="card h-100">
                            <div class="card-header d-flex flex-column justify-content-between bg-light h-25">
                                <h4 class="text-uppercase mt-4"><?= $prodotto->product_name; ?></h4>
                                <span><?= get_class($prodotto) ?></span>
                            </div>
                            <div class="card-body text-center h-50">
                                <img class="h-75 img-fluid" src="<?= $prodotto->product_img ?>" alt="">
                                <p class="mt-3"><?= $prodotto->getDetails(); ?></p>
                            </div>
                            <div class="card-footer   text-center">

                                <h2 class="text-info m-4"><?= $prodotto->product_price; ?> €</h2>
                                <h2 class="text-info m-4">
                                    <?= $prodotto->product_quantity; ?>
                                    <?php if ($prodotto->product_quantity > 0) : ?>
                                        <span>disponibili</span>
                                    <?php endif; ?>
                                </h2>



                                <span>
                                    <?= $prodotto->product_cat->getCat(); ?>

                                </span>


                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>