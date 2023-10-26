const cartOpenButton = document.getElementById("checkout");
const cartCloseButton = document.getElementById("closeCartButton");
const cartDisplay = document.getElementById("shopping-cart");
const addToCartButtons = document.querySelectorAll(".addToCartButton");

cartOpenButton.addEventListener("click", () => {
    cartDisplay.classList.remove("hidden");
})

cartCloseButton.addEventListener("click", () => {
    cartDisplay.classList.add("hidden");
})

addToCartButtons.forEach(button => {
    button.addEventListener("click", () => {
        let id = button.value;
        // fetch("shopping-cart.php", {
        //     method: 'post',
        //     body: post,
        //     headers: {
        //         'Accept': 'application/json',
        //         'Content-Type': 'application/json'
        //     }
        // }).then((response) => {
        //     return response.json()
        // }).then((res) => {
        //     if (res.status === 201) {
        //         console.log("Post successfully created!")
        //     }
        // }).catch((error) => {
        //     console.log(error)
        // });
        // ajax({
        //     type:"post",
        //     url:"shopping-cart.php",
        //     data: 
        //     {  
        //     'id' :id
        //     },
        //     cache:false,
        //     success: function (html) 
        //     {
        //         alert('Data Send');
        //         $('#msg').html(html);
        //     }
        // });
    })
});