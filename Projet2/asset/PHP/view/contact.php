<?php

const BASE_PATH = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR;

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/nav.php';
?>
<form class="contact-us">
<fieldset>
    <legend class="contact"><h1>Contact Us</h1></legend>
    <div>
        <label for="option1">Mr.</label>
        <input type="radio" name="choix" value="option1" id="option1">
        <label for="option2">Mme.</label>
        <input type="radio" name="choix" value="option2" id="option2"><br><br>
    </div>
    <div>
        <label for="firsname">Enter your firsname*</label><br>
        <input type="text" id="firsname" name="user_firsname" placeholder="Firsname" required><br><br>
    </div>
    <div>
        <label for="name">Enter your name*</label><br>
        <input type="text" id="name" name="user_name" placeholder="Name" required><br><br>
    </div>
    <div>
        <label for="email">Enter your adress mail*</label><br>
        <input type="email" id="email" name="email" placeholder="abc@gmail.com" required><br><br>
    </div>
    <div>
        <label for="formation"> Do you want to contact which specialist...*</label><br>
        <select id="formation" name="formation" required><br><br>
            <option disabled and selected>Choose a specialist...</option>
            <option>accounting</option>
            <option>trainer</option>
            <option>veterinary</option>
            <option>Direction</option>
        </select><br><br>
    </div>
    <textarea id="message" name="message" rows="5" cols="30" placeholder="Write your message here..."></textarea><br>
    <div>
        <button type="submit">Send your message</button>
    </div>
</fieldset>
</form>
<?php include __DIR__ . '/partials/foot.php';?>

<style>
.contact-us{
    margin-top: 30px;
}
h1{
    font-family: "hades";
}
.contact{
    text-align: center;
}
</style>