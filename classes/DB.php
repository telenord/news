<?php

class DB
{
    private $dbh;

    public function __construct()
    {


        $this->dbh = new PDO('mysql: dbname =articles; host = localhost', 'root', '');

    }

    public function query($sql, $params = array())
    {

        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
       return $sth->fetchAll(PDO::FETCH_OBJ);


//        $link = mysqli_connect( $host, 'root', '', $db, 3306, 'TCP/IP');
//        $res = mysqli_query( $link,$sql);
//
//        if(false === $res){return false;}
//
//        $ret = array();
//        while($row = mysqli_fetch_object($res,$class)) {
//            $ret[] = $row;
//        }
//               return $ret;
    }
    public function queryOne($sql, $class = 'stdClass')
    {
        $host = 'localhost';
        $db = 'articles';
        $link = mysqli_connect( $host, 'root', '', $db, 3306, 'TCP/IP');
        $res = mysqli_query( $link,$sql);

        if(false === $res){return false;}

        $ret = array();
        while($row = mysqli_fetch_object($res,$class)) {
            $ret[] = $row;
        }
        return $ret [0];
    }

}