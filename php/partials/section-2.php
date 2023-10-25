<section id="section-2">
    <h2><span>Our</span> last products</h2>

    <div id="products-container">
        
            <?php

            $productsJson = file_get_contents('./../data/products.json');
            $products = json_decode($productsJson, true);

            foreach ($products as $product) 
            {
                ?>

                <div>

                    <img src="<?php echo $product['image_url']; ?>" alt="shoe image">
                    <div>
                        <div>
                            <h3><?php echo $product['product']; ?></h3>
                            <p><?php echo $product['price'].'€'; ?></p>
                        </div>
                        <button>Add to card</button>
                    </div>

                </div>
                
                <?php
            }
            ?>
    </div>
</section>