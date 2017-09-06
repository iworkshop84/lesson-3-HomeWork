<?php


class View

{

    protected $data = [];

    // Убрать
    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function render($url)
    {
        foreach ($this->data as $key => $val) {
            $$key = $val;
        }
        ob_start();
        include __DIR__ . '/../views/' . $url;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;

    }

    public function display($template){
         echo $this->render($template);
    }


    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }
}
