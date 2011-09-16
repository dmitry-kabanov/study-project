<?php

class DB_Mysql_Prod extends DB_Mysql
{
    protected $user = 'root';
    protected $pass = 'mysql';
    protected $dbhost = 'localhost';
    protected $dbname = 'schlossnagle';
    
    public function __construct() {}
}
