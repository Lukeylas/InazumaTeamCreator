<?php
class UserManager {

    static function login($login, $password) {
        global $con;

        // check if user exists
        $user = self::getByUsername($login);
        if ($user) {
            // check if passowrd is correct
            $verified = password_verify($password, $user->password_hash);

            if ($verified) {
                // login
                $_SESSION['userId'] = $user->id;
                return $verified;
            }
        }
        // false info
        return false;
    }

    static function register($login, $password) {
        global $con;

        // check if user exists
        $user = self::getByUsername($login);
        var_dump($user);
        if (!$user) {
            $stmt = $con->prepare('INSERT INTO user (login, password_hash) VALUES (?, ?)');
            $stmt->bindvalue(1, htmlspecialchars($login));
            $stmt->bindvalue(2, password_hash($password, PASSWORD_DEFAULT));
            $stmt->execute();

            return true;
        }

        // username in use
        return false;
    }

    // Get a user by their username
    static function getByUsername($login) {
        global $con;
        $stmt = $con->prepare("SELECT * FROM user where login = ?");
        $stmt->bindValue(1, htmlspecialchars($login));
        $stmt->execute();

        return $stmt->fetchObject();
    }
} 

?>