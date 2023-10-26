<?php

if (isset($_POST['addItem']))
{
    $_SESSION['shoppingCart'][$_POST['addItem']]['count']++;
}
if (isset($_POST['removeItem']))
{
    $_SESSION['shoppingCart'][$_POST['removeItem']]['count']--;

    if ($_SESSION['shoppingCart'][$_POST['removeItem']]['count'] == 0)
    {
        unset($_SESSION['shoppingCart'][$_POST['removeItem']]);
    }
}
if (isset($_POST['deleteAll']))
{
    unset($_SESSION['shoppingCart']);
}

$itemsCount = 0;
$totalPrice = 0;

if (isset($_SESSION['shoppingCart']))
{
    foreach ($_SESSION['shoppingCart']  as $value) 
    {
        $itemsCount += $value['count'];
        $totalPrice += $value['price'];
    }
}

?>

<div id="shopping-cart" class="w-3/4 h-full fixed right-0 top-0 bg-gray-200 text-black hidden">
    <div class="grid grid-cols-1 grid-rows-[1fr,4fr,1fr] h-full">
        <div class="self-center">
            <button id="closeCartButton" class="fixed w-10"><img src="./../asset/img/arrow.png" alt="arrow"></button>
            <form method="post">
                <button name="deleteAll" class="fixed right-0 w-6"><img src="./../asset/img/delete.png" alt="delete image"></button>
            </form>
            <h2 class="text-center">Shopping cart</h2>
        </div>

        <div class="flex flex-col items-center gap-0.5">
            <h3><?php echo $itemsCount." items"; ?></h3>

            <?php
            if (isset($_SESSION['shoppingCart']))
            {
                foreach ($_SESSION['shoppingCart'] as $value) 
                {
                    ?>
        
                    <div class="flex justify-around w-full items-center bg-white py-3">
                        <img src="<?php echo $value['img']; ?>" alt="" class="w-20">
                        <h4><?php echo $value['name']; ?></h4>
                        <div class="flex items-center">
                            <div><?php echo $value['count']; ?></div>
                            <form method="post" class="flex flex-col">
                                <button name="addItem" value="<?php echo $value['id']; ?>"><img src="./../asset/img/arrow-up.png" alt="arrow" class="w-4"></button>
                                <button name="removeItem" value="<?php echo $value['id']; ?>"><img src="./../asset/img/arrow-down.png" alt="arrow" class="w-4"></button>
                            </form>
                        </div>
                        <div><?php echo $value['price']."€"; ?></div>
                    </div>
        
                    <?php
                }   
            }

            ?>
        </div>

        <div class="flex flex-col items-center self-center">
            <div class="flex justify-between w-full px-3">
                <p>Total</p>
                <div><?php echo $totalPrice."€"; ?></div>
            </div>
            <button class="bg-gray-900 text-white px-20 py-2 rounded-3xl">Checkout</button>
        </div>
    </div>
</div>