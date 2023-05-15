
<?php
include 'database_connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $education = $_POST['education'];

    if (empty($name) || empty($email) || empty($country) || empty($phone) || empty($education)) {
        header("location: ../SendRequest.php?error=emptyfields");
        exit();
    } elseif (empty($name)) {
        header("location: ../SendRequest.php?error=noname");
        exit();
    } elseif (empty($email)) {
        header("location: ../SendRequest.php?error=noemail");
        exit();
    } elseif (empty($country)) {
        header("location: ../SendRequest.php?error=nocountry");
        exit();
    } elseif (empty($phone)) {
        header("location: ../SendRequest.php?error=nophone");
        exit();
    } elseif (empty($education)) {
        header("location: ../SendRequest.php?error=noeducation");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../SendRequest.php?error=invalidemail");
        exit();
    } elseif (!preg_match('/^\+(?:[0-9] ?){6,14}[0-9]$/', $phone)) {
        header("location: ../SendRequest.php?error=invalidenumber");
        exit();
    }else {

    // $file = fopen("data.txt", "a");
    // fwrite($file, $name . "," . $email . "," . $country . "," . $grpname . "," . $grplink . "\n");
    // fclose($file);
    // header("location: ../success.php?signin=success");

    $sql = "INSERT INTO rec_appointments (user_name, user_email, user_country, user_phone, user_education)
    VALUES ('$name', '$email', '$country', '$phone', '$education')";

mysqli_query($conn, $sql);
    
    header("Location: ../success.php?signup=success");
}
}