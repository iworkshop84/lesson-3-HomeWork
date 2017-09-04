<?php


class View
{
    public function display($url, $items=null){
        include __DIR__ . '/../views/news/'. $url;
    }
}