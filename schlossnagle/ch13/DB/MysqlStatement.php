<?php

class DB_MysqlStatement
{
    protected $result;
    protected $query;
    protected $dbh;

    public function __construct($dbh, $query, $result)
    {
        $this->query = $query;
        $this->dbh = $dbh;
        $this->result = $result;

        if (!is_resource($dbh)) {
            throw new Exception('No connection to database');
        }
    }

    public function fetch_row()
    {
        if (!$this->result) {
            throw new Exception('Query not performed');
        }
        return mysql_fetch_row($this->result);
    }

    public function fetch_assoc()
    {
        return mysql_fetch_assoc($this->result);
    }

    public function fetchall_assoc()
    {
        $retval = array();
        while ($rwo = $this->fetch_assoc()) {
            $retval[] = $row;
        }

        return $retval;
    }
}
