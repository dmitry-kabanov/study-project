<?php

class Authentication
{
    public static function checkCredentials($name, $password)
    {
        $dbh = new DB_Mysql_Prod();
        $cur = $dbh->execute("
            SELECT
                userid
            FROM
                user
            WHERE
                username = '$name'
                AND password = '$password'
        ");
        $row = $cur->fetch_assoc();

        if ($row) {
            return $row['userid'];
        }
        else {
            throw new AuthException('User not recognised');
        }
    }
}
