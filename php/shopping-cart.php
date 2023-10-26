<div id="shopping-cart" class="w-3/4 h-full fixed right-0 top-0 bg-gray-200 text-black hidden">
    <button id="closeCartButton" class="fixed w-10"><img src="./../asset/img/arrow.png" alt="arrow"></button>
    <h2 class="text-center">Shopping cart</h2>

    <div class="flex flex-col items-center gap-0.5">
        <h3>3 items</h3>

        <?php
        
        foreach ($_SESSION['shoppingCart'] as $value) 
        {
            ?>

            <div class="flex justify-around w-full items-center bg-white py-3">
                <img src="<?php echo $value['img']; ?>" alt="" class="w-20">
                <h4><?php echo $value['name']; ?></h4>
                <div class="flex items-center">
                    <div><?php echo $value['count']; ?></div>
                    <div class="flex flex-col">
                        <button><img src="./../asset/img/arrow-up.png" alt="arrow" class="w-4"></button>
                        <button><img src="./../asset/img/arrow-down.png" alt="arrow" class="w-4"></button>
                    </div>
                </div>
                <div><?php echo $value['price']."€"; ?></div>
            </div>

            <?php
        }

        ?>
    </div>

    <div class="flex flex-col items-center">
        <div class="flex justify-between w-full px-3">
            <p>Total</p>
            <div>1000€</div>
        </div>
        <button class="bg-gray-900 text-white px-20 py-2 rounded-3xl">Checkout</button>
    </div>
</div>