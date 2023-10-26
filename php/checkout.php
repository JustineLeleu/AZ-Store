<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../dist/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AZ-Store</title>
    <script defer src="../script/main.js"></script>
</head>
<body class="bg-gradient-to-b from-gray-900 text-white to-black"> 

<?php
require 'partials/nav.php';
?>
<form class="formContainer" method="get" action="">
    <div id="name">
        <label for="firstName">First name</label>
        <input type="text" placeholder="First name" name="firstName">
    </div>
    <div id="last">
        <label for="lastName">Last name</label>
        <input type="text" placeholder="Last name" name="lastName">
    </div>
    <div id="email">
        <label for="email">Email</label>
        <input type="text" placeholder="Email" name="email">
    </div>
    <div id="address">
        <label for="address">Address</label>
        <input type="text" placeholder="Address" name="address">
    </div>
    <div id="city">
        <label for="city">City</label>
        <input type="text" placeholder="City" name="city">
    </div>
    <div id="zipCode">
        <label for="state">Zip code</label>
        <input type="text" placeholder="Zip" name="zip">
    </div>
    <div id="country">
        <label for="country">Country</label>
        <input type="text" placeholder="Country" name="country">
    </div>
    <div id="shipping">
        <label for="shipping">Shipping</label>
        <select name="shipping">
            <option value="standard">Standard [ FREE ]</option>
            <option value="express">Express [ + 14,99$]</option>
        </select>
    </div>
    <input type="submit" name="submit" value="Checkout" id="checkoutBtn">
</form>

<?php

function requireField($input) {
    $errorMessage = "Please complete all fields of the form.";
    $successMessage = "Thank you for your order";

    if (empty($input)) {
        echo `<script>alert($errorMessage)</script>`;
    } else {
        echo `<script>alert($successMessage)</script>`;
    }
}

function validateEmail($email) {
    $errorMessage = "Please enter a valid email address.";
    $successMessage = "Thank you for your order";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo `<script>alert($errorMessage)</script>`;
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

    requireField($firstName AND $lastName AND $email AND $address AND $city AND $zip AND $country);
    validateEmail($email);
    valideZipcode($zip);

    if (valideZipCode($zip) == false) {
        $errorMessage = "Please enter a valid zip code";
        echo "<script> alert($errorMessage)</script>";
    }
}

?>

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
<section class="bg-gradient-to-b from-gray-900 text-white to-black py-20 lg:py-[120px] overflow-hidden relative z-10">
   <div class="container">
      <div class="flex flex-wrap lg:justify-between -mx-4">
         <div class="w-full lg:w-1/2 xl:w-6/12 px-4">
            <div class="max-w-[570px] mb-12 lg:mb-0">
               <h2
                  class="
                  text-white
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
               <section>
                <div class="px-3 md:w-5/12">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 text-gray-800 font-light mb-6">
                        <div class="w-full p-3 border-b border-gray-200">
                            <div class="mb-5">
                                <label for="type1" class="flex items-center cursor-pointer">
                                    <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type1" checked>
                                    <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-6 ml-3">
                                </label>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Name on card</label>
                                    <div>
                                        <input class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="John Smith" type="text"/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Card number</label>
                                    <div>
                                        <input class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="0000 0000 0000 0000" type="text"/>
                                    </div>
                                </div>
                                <div class="mb-3 -mx-2 flex items-end">
                                    <div class="px-2 w-1/4">
                                        <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Expiration date</label>
                                        <div>
                                            <select class="form-select w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                                <option value="01">01 - January</option>
                                                <option value="02">02 - February</option>
                                                <option value="03">03 - March</option>
                                                <option value="04">04 - April</option>
                                                <option value="05">05 - May</option>
                                                <option value="06">06 - June</option>
                                                <option value="07">07 - July</option>
                                                <option value="08">08 - August</option>
                                                <option value="09">09 - September</option>
                                                <option value="10">10 - October</option>
                                                <option value="11">11 - November</option>
                                                <option value="12">12 - December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="px-2 w-1/4">
                                        <select class="form-select w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                        </select>
                                    </div>
                                    <div class="px-2 w-1/4">
                                        <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Security code</label>
                                        <div>
                                            <input class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="000" type="text"/>
                                        </div>
                                    </div>
               </section>
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
                        <input type="radio" value="1" class="peer hidden" name="delivery">
                        
                        <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
                            <h2 class="font-medium text-gray-700">Free delivery</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </label>

                    <label>
                        <input type="radio" value="2" class="peer hidden" name="delivery">
                        
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
require 'partials/footer.php'; 
?>



