<?php

class User {

    public static function Login($data)
    {
        @$_SESSION['user_id'] = $data['user_id'];
        @$_SESSION['user_username'] = $data['user_username'];
        @$_SESSION['user_email'] = $data['user_email'];
        @$_SESSION['user_rank'] = $data['user_rank'];
    }
    public static function V_Login($data)
    {
        @$_SESSION['user_id'] = 'veli';
        @$_SESSION['user_username'] = $data['veli_email'];
        @$_SESSION['user_email'] = $data['veli_email'];
        @$_SESSION['user_rank'] = 4;
    }

    public static function userExist($usernameormail)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE user_username = :username || user_email = :email');
        $query->execute([
            'username' => $usernameormail,
            'email' => $usernameormail
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function veliExist($mail)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM veliler WHERE veli_email = :email');
        $query->execute([
            'email' => $mail
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

}
