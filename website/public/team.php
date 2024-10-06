<?php
require_once "../private/autoloader.php";
?>

<?php
if (isset($_GET['id'])) {
    $team = TeamManager::getAllInfo($_GET['id']);
    $players = PlayerManager::getByTeamId($_GET['id']);
} else {
    header('location: home');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inazuma - <?php echo $team->name ?></title>
    <style>
        #teamInfo {
            float: left;
        }
    </style>
</head>

<body>
    <div id="teamInfo">
        <h1><?php echo $team->name ?></h1>

        <?php
        foreach ($players as $player) {
            echo $player->position . '. ' . $player->firstname . ' ' . $player->lastname . '</br>';
        }
        ?>
    </div>

    <?php
    require_once "formations/f-basic.php"
    ?>
</body>
</html>