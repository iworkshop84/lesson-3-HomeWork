<?php


class View
{

    protected $data = [];

    public function assign($name, $value){

        $this->data[$name] = $value;
    }

    public function display($url){

        foreach ($this->data as $key=>$val){
            $$key = $val;
        }

        include __DIR__ . '/../views/'. $url;


    }
}