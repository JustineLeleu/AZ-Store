<section id="section-2" class="p-4">
    <h2 class=""><span>Our</span> last products</h2>


    
    <div id="products-container" class="flex flex-wrap">
        
            <?php

            $productsJson = file_get_contents('./../data/products.json');
            $products = json_decode($productsJson, true);

            foreach ($products as $product) 
            {
                ?>
            <div class="product-card bg-gradient-to-b from-blue-900 to-black  p-4 m-4">
                <img class="img-item h-40" src="<?php echo $product['image_url']; ?>" alt="shoe image">
                <div class="items flex flex-row justify-between ">
                    <div class="cart">
                        <h3 class="product "><?php echo $product['product']; ?></h3>
                        <p class="price "><?php echo $product['price'].'€'; ?></p>
                    </div>
                    <button class="addToCartButton bg-blue-500  px-4 py-2 mt-2" value="<?php echo $product['id']; ?>">Add to cart</button>
                    <!-- <form method="post">
                        <input type="submit" name="addToCart" value="Add to cart" class="bg-blue-500  px-4 py-2 mt-2">
                    </form> -->
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>
