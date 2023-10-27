<?php
if (!isset($_SESSION["shoppingCart"]))
{
    session_start();
}

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
if (isset($_POST['deleteItem']))
{
    unset($_SESSION['shoppingCart'][$_POST['deleteItem']]);
}

$itemsCount = 0;
$totalPrice = 0;

if (isset($_SESSION['shoppingCart']))
{
    foreach ($_SESSION['shoppingCart']  as $value) 
    {
        $itemsCount += $value['count'];
        $totalPrice += $value['price'] * $value['count'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../dist/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AZ-Store</title>
</head>
<body>
    <div id="shopping-cart" class="w-full h-full fixed bg-gray-900 text-white">
        <div class="grid grid-cols-1 grid-rows-[1fr,4fr,1fr] h-full gap-0.5">
            <div class="self-center">
                <form action="/php/index.php">
                    <button class="fixed left-2 w-10 rotate-180"><img src="./../asset/img/arrow.png" alt="arrow"></button>
                </form>
                <form method="post">
                    <button name="deleteAll" class="fixed right-2 w-10"><img src="./../asset/img/delete-all.png" alt="delete all image"></button>
                </form>
                <h2 class="text-center text-3xl font-titleFont">Shopping cart</h2>
                <h3 class="text-center font-descFont text-lg"><?php echo $itemsCount." items"; ?></h3>
            </div>

            <div class="flex flex-col items-center gap-0.5 font-descFont text-lg overflow-auto no-scrollbar">

                <?php
                if (isset($_SESSION['shoppingCart']))
                {
                    foreach ($_SESSION['shoppingCart'] as $value) 
                    {
                        ?>
            
                        <div class="grid grid-cols-[2fr,3fr,1fr,1fr,1fr] w-full items-center justify-items-center bg-gray-200 text-black py-3 shadow-inner shadow-gray-400">
                            <img src="<?php echo $value['img']; ?>" alt="" class="w-20">
                            <h4><?php echo $value['name']; ?></h4>
                            <div class="flex items-center gap-2">
                                <div><?php echo $value['count']; ?></div>
                                <form method="post" class="flex flex-col">
                                    <button name="addItem" value="<?php echo $value['id']; ?>"><img src="./../asset/img/arrow-up.png" alt="arrow" class="w-4"></button>
                                    <button name="removeItem" value="<?php echo $value['id']; ?>"><img src="./../asset/img/arrow-down.png" alt="arrow" class="w-4"></button>
                                </form>
                            </div>
                            <div><?php echo $value['price']."€"; ?></div>
                            <form method="post">
                                <button name="deleteItem" class="w-6" value="<?php echo $value['id']; ?>"><img src="./../asset/img/delete.png" alt="delete image"></button>
                            </form>
                        </div>
            
                        <?php
                    } 
                }

                ?>
            </div>

            <div class="flex flex-col items-center self-center gap-4 bg-gray-200 py-4 shadow-inner shadow-gray-400">
                <div class="flex justify-between w-2/3 px-3 font-descFont text-black text-xl">
                    <p>Total:</p>
                    <div><?php echo $totalPrice."€"; ?></div>
                </div>
                <button class="bg-gray-900 text-white px-20 py-2 rounded-3xl font-btn text-lg">Checkout</button>
            </div>
        </div>
    </div>
</body>
</html>