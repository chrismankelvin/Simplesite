<?php
require 'header.php'
?>
<div class="main">
    <div class="snd_rqst_container">
        <div class="holder">
            <form action="./inc/postman.php" method="POST">
                <p>Apply</p>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="error">Fill Out The Form</p>';
                    } elseif ($_GET['error'] == "noname") {
                        echo '<p class="error">Enter Your Name</p>';
                    } elseif ($_GET['error'] == "noemail") {
                        echo '<p class="error">Enter your E-mail</p>';
                    } elseif ($_GET['error'] == "nocountry") {
                        echo '<p class="error">Enter Your Location</p>';
                    } elseif ($_GET['error'] == "nophone") {
                        echo '<p class="error">Enter Your Phone</p>';
                    } elseif ($_GET['error'] == "noeducation") {
                        echo '<p class="error">Enter Your Educational Level</p>';
                    } elseif ($_GET['error'] == "nophone") {
                        echo '<p class="error">Enter Your Phone</p>';
                    } elseif ($_GET['error'] == "invalidemail") {
                        echo '<p class="error">Invalid E-mail</p>';
                    }elseif($_GET['error'] == "invalidenumber"){
                        echo '<p class="error">Invalid Number</p>';
                }
                }

                ?>
                <fieldset>
                    <label for="name">Enter Your Name</label> <br>
                    <label for="email">Enter Your E-Mail</label><br>
                    <label for="county">Enter Your Country</label><br>
                    <label for="phone">Phone Number</label><br>
                    <label for="education">Educational level</label>
                </fieldset>
                <input type="text" name="name" placeholder=" Full Name" autocomplete="on"> <br>
                <input type="text" name="email" placeholder=" E-Mail Address" autocomplete="on"> <br>
                <input type="text" name="country" placeholder=" Country Of Residence" autocomplete="on"><br>
                <input type="text" name="phone" placeholder=" International Format (+233242764213)" autocomplete="on"><br>
                <input type="text" name="education" placeholder=" Eg: Undergraduate / Post-Graduate" autocomplete="on"><br>
                <button name="submit" type="submit">
                    submit
                </button>
 
            </form>
        </div>

    </div>

</div>
