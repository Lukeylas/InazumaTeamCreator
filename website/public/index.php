<?php
require_once "../private/autoloader.php";
?>

<?php 
$message = "";

if($_POST) {
    $success = UserManager::login($_POST['login'], $_POST['password']);
    if ($success) {
        header('location: home');
    }
    else {
        $message = 'Wrong Info';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inazuma - Login</title>
</head>
<body>
    <div class="bg-dark text-white position-absolute top-50 start-50 translate-middle" style="width: 400px" id="form-container">
        <div class="p-3 bg-danger">
            <div class="row">
                <div class="col">Login</div>
                <div class="col"><a class="btn btn-sm btn-warning" href="register.php">Register</a></div>
            </div>
        </div>
        <form method="POST" class="p-3 pb-0">
            <div class="form-group">
                <label for="email">Username: </label>
                <input type="text" placeholder="janalleman@gmail.com" name="login" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" placeholder="Geheim$123" name="password" class="form-control">
            </div>
            <br>
            <input class="btn btn-danger w-100 mb-2" type="submit" value="Submit">
            <br>
            <div class="row">
                <div class="col-8"></div>
            </div>
        </form>
        <?php echo "<div class='bg-light text-black'>$message</div>"?>
    </div>
</body>
</html>