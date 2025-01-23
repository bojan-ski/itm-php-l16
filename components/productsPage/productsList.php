<?php require './models/getProductsList.php' ?>

<section class="products-list mt-5 mx-auto">
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
        <?php foreach ($getProductsListResult as $product): ?>
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title capitalize">
                        <?= $product['product_name'] ?>
                    </h2>
                    <p>
                        <?= $product['product_desc'] ?>
                    </p>
                    <div class="card-actions">
                        <a href="selected_product.php?id=<?= $product['id'] ?>" class="btn btn-primary">
                            See details
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>