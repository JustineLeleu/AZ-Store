<?php

$productsJson = file_get_contents('./../data/products.json');
$products = json_decode($productsJson, true);

?>

<section id="section-2" class="p-4 mx-20 border-t border-gray-800 border-opacity-90" >
    <h2 class="font-titleFont text-xl"><span class= 'text-blue-600 '>Our</span> last products</h2>


    
    <div id="products-container" class="flex flex-row justify-around overflow-auto no-scrollbar">
        
            <?php

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
                    <form method="post">
                        <button class="addToCartButton bg-blue-500  px-4 py-2 mt-2 rounded-lg font-btn" name="addToCart" value="<?php echo $product['id']; ?>">Add to cart</button>
                    </form>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>

<?php

if (isset($_POST["addToCart"]))
{
    if (isset($_SESSION['shoppingCart']))
    {
        $item = array_search($_POST["addToCart"], array_column($_SESSION['shoppingCart'], 'id'));
        
        if ($item === false)
        {
            $key = array_search($_POST["addToCart"], array_column($products, 'id'));
            $newItem = array(
                'id' => $_POST["addToCart"],
                'img' => $products[ $key ]['image_url'],
                'name'=> $products[ $key ]['product'],
                'price'=> $products[ $key ]['price'],
                'count'=> 1
            );
            $_SESSION['shoppingCart'][$_POST["addToCart"]] = $newItem;
        }
        else
        {
            $_SESSION['shoppingCart'][$_POST["addToCart"]]['count']++;
        }
    }
    else
    {
        $key = array_search($_POST["addToCart"], array_column($products, 'id'));
        $newItem = array(
            'id' => $_POST["addToCart"],
            'img' => $products[ $key ]['image_url'],
            'name'=> $products[ $key ]['product'],
            'price'=> $products[ $key ]['price'],
            'count'=> 1
        );
        $_SESSION['shoppingCart'][$_POST["addToCart"]] = $newItem;
    }
}

?>
