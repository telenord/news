<?php

/**
 * Created by PhpStorm.
 * User: 222
 * Date: 27.11.2015
 * Time: 18:38
 */
abstract class AbstractModel implements IModel
{
    protected static $table ;
    protected static $class;

    public static function getAll(){
        $db = new DB();
     //   $sql = 'SELECT * FROM '. static::$table;

     //   return $db->query($sql);
    }

    public static function getOne($id){

      //  $db = new DB();
       // $sql = 'SELECT * FROM '. static::$table . ' WHERE id ='.$id;
       // return $db->queryOne($sql, static::$class);
    }
    public static function setOne($name, $text){

        //$db = new DB();
       // $sql = 'INSERT INTO '. static::$table . '('.$name .','. $text.') VALUES ('. $name .',' . $text . ')' ;

       // return $db->queryOne($sql, static::$class);
    }


}