<?php

class PlayerManager {

    static function getByTeamId($teamId) {
        global $con;
        $stmt = $con->prepare("SELECT * FROM player join team_has_player on team_has_player.player_id = player.id WHERE team_has_player.team_id = ? order by position asc");
        $stmt->bindvalue(1, $teamId);
        $stmt->execute();

        return $stmt->fetchall(PDO::FETCH_OBJ);
    }

}

?>