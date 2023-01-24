<?php
require 'header.php'
?>
<div class="main">
    <div class="container">
    <div class="holder">
        <form action="./scripts/signup.php" method="post">
            <p>SIGN IN</p>
            <fieldset>
                <label for="name">Enter Your Name</label> <br>
                <label for="email">Enter Your E-Mail</label><br>
                <label for="county">Enter Your Country</label><br>
                <label for="grpname"> Enter Group's Name</label><br>
                <label for="grplink">Enter Group Link</label>
            </fieldset>
            <input type="text" name="name" placeholder="Full Name" autocomplete="off"> <br>
            <input type="text" name="email" placeholder="E-Mail Address" autocomplete="off"> <br>
            <input type="text" name="country" placeholder="Your Country" autocomplete="off"><br>
            <input type="text" name="grpname" placeholder="Group's Name" autocomplete="off"><br>
            <input type="text" name="grplink" placeholder="Group's Link" autocomplete="off"><br>
            <button name="submit" type="submit">
                submit
            </button>
        </form>
    </div>

    </div>

</div>
<?php
require'footer.php'

?>