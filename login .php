<!-- login.html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="post">

        username: <input type="text" id="name">
        <br> password: <input type="password" name="" id="pass">
        <br>
        <input type="submit" value="submit">




    </form>


</body>

</html>

<!-- //login.php -->

<?php
session_start();

?>

<?php


if (isset($_POST['username'])) {

    $username = $_POST['name'];
    $password = $_POST['pass'];

}


if ($username == "user" && $password == "passw") {
    echo "successfuly logged in";
    $_SESSION['loggedin'] = true;
    $_SESSION['expirein'] = time() + (86400 * 20);

    header('location:welcome.php');
    exit;
} else {
    echo "cant login mate wtf";
    header('location:login.html');

}



?>


<!-- //welcome.php -->
<?php


session_start();

if (($_SESSION['expiredin']) > time()) {
    echo "session expired ";
    header('location:login.html');

} else {
    echo "welcome mate";
}


?>