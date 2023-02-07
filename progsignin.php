<?php
require 'header.php'
?>
<div class="main">
    <div class="container">
        <div class="holder">
            <form action="./inc/postman.php" method="POST">
                <p>Send A request</p>
                <fieldset>
                    <label for="name">Enter Your Name</label> <br>
                    <label for="email">Enter Your E-Mail</label><br>
                    <label for="county">Enter Your Country</label><br>
                    <label for="grpname">Phone Number</label><br>
                    <label for="grplink">Educational level</label>
                </fieldset>
                <input type="text" name="name" placeholder=" Full Name" autocomplete="off"> <br>
                <input type="text" name="email" placeholder=" E-Mail Address" autocomplete="off"> <br>
                <input type="text" name="country" placeholder=" Country Of residence" autocomplete="off"><br>
                <input type="text" name="grpname" placeholder=" International Format" autocomplete="off"><br>
                <input type="text" name="grplink" placeholder=" Eg: Undergraduate" autocomplete="off"><br>
                <button name="submit" type="submit">
                    submit
                </button>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="error">Fill out the Form</p>';
                    } elseif ($_GET['error'] == "noname") {
                        echo '<p class="error">Enter your name</p>';
                    } elseif ($_GET['error'] == "noemail") {
                        echo '<p class="error">Enter your E-mail</p>';
                    } elseif ($_GET['error'] == "nocountry") {
                        echo '<p class="error">enter your location</p>';
                    } elseif ($_GET['error'] == "nogrpname") {
                        echo '<p class="error">Enter your Telegram group name</p>';
                    } elseif ($_GET['error'] == "nogrplink") {
                        echo '<p class="error">Enter the link to your group</p>';
                    } elseif ($_GET['error'] == "nogrplink") {
                        echo '<p class="error">Enter the link to your group</p>';
                    } elseif ($_GET['error'] == "invalidemail") {
                        echo '<p class="error">Invalid e-mail</p>';
                    }elseif($_GET['error'] == "invalidename"){
                        echo '<p class="error">Invalid name/p>';
                }
                }

                ?>
            </form>
        </div>

    </div>

</div>
<?php
require 'footer.php'

?>