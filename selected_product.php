<?php
require './components/htmlStart.php';
require './models/getSelectedProduct.php';
?>

<main class="selected-product-page">
    <div class="container mx-auto mt-20">

        <div class="flex justify-between align-center mb-10">
            <a href="products.php" class="btn btn-warning">
                Back
            </a>
            <p>
                <?= $getSelectedProductResult['product_delivery_date'] ?>
            </p>
        </div>

        <div class="selected-product-data">
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title capitalize">
                        <?= $getSelectedProductResult['product_name'] ?>
                    </h2>

                    <p class="border-b pb-3">
                        <?= $getSelectedProductResult['product_desc'] ?>
                    </p>

                    <div class="flex">
                        <p>
                            Price: <?= $getSelectedProductResult['product_price'] ?>
                        </p>
                        <p class="text-right">
                            Quantity: <?= $getSelectedProductResult['product_quantity'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</main>

<?php require './components/htmlEnd.php' ?>