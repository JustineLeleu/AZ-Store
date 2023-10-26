<?php

session_start();

$productsJson = file_get_contents('./../data/products.json');
$products = json_decode($productsJson, true);

?>

<section id="section-2" class="p-4">
    <h2 class=""><span>Our</span> last products</h2>


    
    <div id="products-container" class="flex flex-wrap">
        
            <?php

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
                    <form method="post">
                        <button class="addToCartButton bg-blue-500  px-4 py-2 mt-2" name="addToCart" value="<?php echo $product['id']; ?>">Add to cart</button>
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
