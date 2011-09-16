<?php

function check_credentials($name, $password)
{
    $dbh = new DB_Mysql_Prod();
    $cur = $dbh->execute("
        SELECT 
            userid, password, failures
        FROM
            user
        WHERE
            username = '$name'
    ");

    $row = $cur->fetch_assoc();

    if ($row) {
        if ($row['failures'] >= 3) {
            throw new TooManyAttemptsAuthException();
        }

        if ($password == $row['password']) {
            return $row['userid'];
        }
        else
        {
            $cur = $dbh->execute("
                UPDATE
                    user
                SET
                    failures = failures + 1,
                    last_failure = NOW()
                WHERE
                    username = '$name'
            ");
        }
    }

    throw new AuthException('User not found');
}
