<?php
require_once "../private/autoloader.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inazuma - Home</title>
    <script>
        function goToTeam(teamName) {

        }
    </script>
</head>
<body>
    <h1>Public Teams</h1>
    <?php
        $teams = TeamManager::getAllPublic();
        foreach ($teams as $team) {
            echo '<a class="btn btn-primary" href="team?id='.$team->id.'">'.$team->name.'</a>';
        }
    ?>
</body>
</html>