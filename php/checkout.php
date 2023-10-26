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

    requireField($firstName AND $lastName AND $email AND $address AND $city AND $zip AND $country);
    validateEmail($email);
    valideZipcode($zip);

    if (valideZipCode($zip) == false) {
        echo "<p class='errorMessage'>Please enter a valid zip code</p>";
    }
}
 require 'partials/footer.php';
?>



