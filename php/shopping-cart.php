<div id="shopping-cart" class="w-3/4 h-full fixed right-0 top-0 bg-gray-200 hidden">
    <button id="closeCartButton" class="fixed">arrow</button>
    <h2 class="text-center">Shopping cart</h2>

    <div class="flex flex-col items-center gap-0.5">
        <h3>3 items</h3>
        <div class="flex justify-around w-full items-center bg-white py-3">
            <img src="./../asset/img/shoe_one.png" alt="" class="w-20">
            <h4>Nike Superstar</h4>
            <div class="flex items-center">
                <div>1</div>
                <div class="flex flex-col">
                    <button>up</button>
                    <button>down</button>
                </div>
            </div>
            <div>500€</div>
        </div>
        <div class="flex justify-around w-full items-center bg-white py-3">
            <img src="./../asset/img/shoe_one.png" alt="" class="w-20">
            <h4>Nike Superstar</h4>
            <div class="flex items-center">
                <div>1</div>
                <div class="flex flex-col">
                    <button>up</button>
                    <button>down</button>
                </div>
            </div>
            <div>500€</div>
        </div>
    </div>

    <div class="flex flex-col items-center">
        <div class="flex justify-between w-full px-3">
            <p>Total</p>
            <div>1000€</div>
        </div>
        <button class="bg-gray-900 text-white px-20 py-2 rounded-3xl">Checkout</button>
    </div>
</div>

<?php

function testOnClick()
{
    echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
}

?>