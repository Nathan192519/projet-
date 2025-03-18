<?php
include BASE_PATH."nav.php";
include BASE_PATH. "header.php";?>
<form>
<fieldset>
    <legend>Contact Us</legend>
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
        <label for="mot-de-passe">Enter your password</label><br>
        <input type="password" id="mot-de-passe" name="password" placeholder="Password" required><br><br>
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
/texterea/
    <div>
        <button type="submit">Send your message</button>
    </div>
</fieldset>
</form>
<?php include"footer.php"?>