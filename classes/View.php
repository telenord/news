<?php


class View implements Iterator
{
    protected $data = array();
    private $position = 0 ;


    public function __set($k,$v){
        $this->data[$k] = $v;
    }

    public function __get($k){
       return  $this->data[$k];
    }

    public function display($template){
        foreach ($this->data as $key=> $val ) {
            $$key = $val;
        }
        include __DIR__ . '/../views/' . $template;
    }



    public function current()
    {
       return $this->data[$this->position];
    }


    public function next()
    {
         return $this->data[++$this->position];

    }


    public function key()
    {
       return $this->position;

    }


    public function valid()
    {
        return isset($this->data[$this->position]);
    }


    public function rewind()
    {
        $this->position = 0;
    }
}