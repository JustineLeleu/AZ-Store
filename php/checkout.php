<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <link rel="stylesheet" href="../dist/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AZ-Store</title>
    <script defer src="../script/main.js"></script>
</head>
<body class="bg-gradient-to-b from-gray-900 text-white to-black">
        
<?php
require 'partials/nav.php';
?>
<section class="bg-white py-20 lg:py-[120px] overflow-hidden relative z-10">
   <div class="container">
      <div class="flex flex-wrap lg:justify-between -mx-4">
         <div class="w-full lg:w-1/2 xl:w-6/12 px-4">
            <div class="max-w-[570px] mb-12 lg:mb-0">
               <span class="block mb-4 text-base text-primary font-semibold">
               Contact Us
               </span>
               <h2
                  class="
                  text-dark
                  mb-6
                  uppercase
                  font-bold
                  text-[32px]
                  sm:text-[40px]
                  lg:text-[36px]
                  xl:text-[40px]
                  "
                  >
                  YOUR ORDER
               </h2>
               <p class="text-base text-body-color leading-relaxed mb-9">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eius tempor incididunt ut labore et dolore magna aliqua. Ut enim
                  adiqua minim veniam quis nostrud exercitation ullamco
               </p>
            </div>
         </div>
         <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
            <div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg">
               <form method="get" action="">
                  <div class="mb-6">
                     <input
                        type="text"
                        placeholder="Your Name"
                        class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-primary
                        "
                        name="firstName"
                        />
                  </div>
                  <div class="mb-6">
                     <input
                        type="text"
                        placeholder="Your Lastname"
                        class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-primary
                        "
                        name="lastName"
                        />
                  </div>
                  <div class="mb-6">
                     <input
                        type="email"
                        placeholder="Your Email"
                        class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-primary
                        "
                        name="email"
                        />
                  </div>
                  <div class="mb-6">
                     <input
                        type="text"
                        placeholder="Your Address"
                        class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-primary
                        "
                        name="address"
                        />
                  </div>
                  <div class="mb-6">
                     <input
                        type="text"
                        placeholder="Your City"
                        class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-primary
                        "
                        name="city"
                        />
                  </div>
                  <div class="mb-6">
                     <input
                        type="text"
                        placeholder="Your ZIP Code"
                        class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-primary
                        "
                        name="zip"
                        />
                  </div>
                  <div class="mb-6">
                     <input
                        type="text"
                        placeholder="Your Country"
                        class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-primary
                        "
                        name="country"
                        />
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 p-4">
                    <label>
                        <input type="radio" value="1" class="peer hidden" name="framework">
                        
                        <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
                            <h2 class="font-medium text-gray-700">Free delivery</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </label>

                    <label>
                        <input type="radio" value="2" class="peer hidden" name="framework">
                        
                        <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
                            <h2 class="font-medium text-gray-700">Premium Delivery + 14,99 €</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </label>
                </div>
                  <div class="mb-6">
                     <textarea
                        rows="6"
                        placeholder="Your Message for delivery"
                        class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        resize-none
                        outline-none
                        focus-visible:shadow-none
                        focus:border-primary
                        "
                        name="message"
                        ></textarea>
                  </div>
                  <div>
                     <button
                        type="submit"
                        class="
                        w-full
                        text-black
                        bg-primary
                        rounded
                        border border-primary
                        p-3
                        transition
                        hover:bg-opacity-90
                        "
                        name="submit"
                        >
                        ORDER
                     </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>

<?php

function requireField($input) {
    $errorMessage = "Please complete all fields of the form.";
    $successMessage = "Thank you for your order";

    if (empty($input)) {
        echo "<p class='errorMessage'>$errorMessage</p>";
    } else {
        echo "<p class='successMessage'>$successMessage</p>";
    }
}

function validateEmail($email) {
    $errorMessage = "Please enter a valid email address.";
    $successMessage = "Thank you for your order";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p class='errorMessage'>$errorMessage</p>";
    }
}

function valideZipCode($zip) {

    if (is_numeric($zip) && is_int($zip + 0)) {
        return true;
    } else {
        return false;
    }

}

if (isset($_GET["submit"])) {

    $firstName = isset($_GET["firstName"]) ? $_GET["firstName"] : "";
    $lastName = isset($_GET["lastName"]) ? $_GET["lastName"] : "";
    $email = isset($_GET["email"]) ? $_GET["email"] : "";
    $address = isset($_GET["address"])? $_GET["address"] : "";
    $city = isset($_GET["city"]) ? $_GET["city"] : "";
    $zip = isset($_GET["zip"]) ? $_GET["zip"] : "";
    $country = isset($_GET["country"]) ? $_GET["country"] : "";
    $message = isset($_GET["message"]) ? $_GET["message"] : "";

    requireField($firstName AND $lastName AND $email AND $address AND $city AND $zip AND $country AND $message);
    validateEmail($email);
    valideZipcode($zip);

    if (valideZipCode($zip) == false) {
        echo "<p class='errorMessage'>Please enter a valid zip code</p>";
    }
}

require 'partials/footer.php';
?>



