<section id="section-2" class="p-4 mx-20" >
    <h2 class="font-titleFont"><span class= 'text-blue-600'>Our</span> last products</h2>


    
    <div id="products-container" class="flex flex-row justify-around">
        
            <?php

            $productsJson = file_get_contents('./../data/products.json');
            $products = json_decode($productsJson, true);

            foreach ($products as $product) 
            {
                ?>
            <div class="product-card bg-gradient-to-b from-gray-900 to-black  p-4 m-4">
                <img class="img-item h-40 p-4 " src="<?php echo $product['image_url']; ?>" alt="shoe image">
                <div class="items flex flex-row justify-between ">
                    <div class="cart">
                        <h3 class="product font-descFont"><?php echo $product['product']; ?></h3>
                        <p class="price font-descFont"><?php echo $product['price'].'€'; ?></p>
                    </div>
                    <button class="bg-blue-500  px-4 py-2 mt-2 rounded-lg font-btn">Add to cart</button>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>
