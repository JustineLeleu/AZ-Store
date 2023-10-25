const cartOpenButton = document.getElementById("checkout");
const cartCloseButton = document.getElementById("closeCartButton");
const cartDisplay = document.getElementById("shopping-cart");

cartOpenButton.addEventListener("click", () => {
    cartDisplay.classList.remove("hidden");
})

cartCloseButton.addEventListener("click", () => {
    cartDisplay.classList.add("hidden");
})