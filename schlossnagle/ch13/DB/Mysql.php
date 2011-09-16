<?php

class DB_Mysql
{
    protected $user;
    protected $pass;
    protected $dbhost;
    protected $dbname;
    protected $dbh;

    public function __construct($user, $pass, $dbhost, $dbname)
    {
        $this->user = $user;
        $this->pass = $pass;
        $this->dbhost = $dbhost;
        $this->dbname = $dbname;
    }

    protected function connect()
    {
        $this->dbh = mysql_pconnect($this->dbhost, $this->user, $this->pass);
        if (!is_resource($this->dbh)) {
            throw new Exception;
        }
        if (!mysql_select_db($this->dbname, $this->dbh)) {
            throw new Exception;
        }
    }

    public function execute($query)
    {
        if (!$this->dbh) {
            $this->connect();
        }

        $ret = mysql_query($query, $this->dbh);

        if (!$ret) {
            throw new Exception(mysql_error());
        }
        else if (!is_resource($ret)) {
            return true;
        }
        else {
            $stmt = new DB_MysqlStatement($this->dbh, $query, $ret);
            return $stmt;
        }
    }
}
