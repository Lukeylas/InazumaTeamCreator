<?php

Class TeamManager {
    static function getAllPublic() {
        global $con;
        $stmt = $con->prepare('SELECT * FROM Team WHERE public = 1');
        $stmt->execute();

        return $stmt->fetchall(PDO::FETCH_OBJ);
    }

    static function getAllInfo($id) {
        global $con;
        $stmt = $con->prepare('SELECT * FROM team WHERE team.id = ?');
        $stmt->bindvalue(1, $id);
        $stmt->execute();
        
        return $stmt->fetchobject();
    }
}

?>