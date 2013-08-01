<?php

/**
* @author cesardluis
* @copyright 2013
*/

class tmpl{
    private $template;
    /**
    * [__construct description]
    * @param [template path] $file
    * @param array  $data [array associative with data]
    */
    public function __construct($file, $data=array()) {
        $this->inHtml($file, $data);
    }

    public function inHtml($file, $data){
        if ($this->template = file_get_contents($file)) {
            if(count($data) > 0){
                $vars = array();
                $values = array();
                foreach ($data as $key => $value) {
                    $vars[] = "{".$key."}";
                    $values[] = $value;
                }
                $this->template = str_replace ($vars, $values, $this->template);
                $this->template = preg_replace('#\{([a-z0-9\-_]*?)\}#is', '', $this->template);
            }            
        }else
            echo 'Error: '.$file;
    }

    public function display(){
        echo $this->template;
    }

    public function get(){
        return $this->template;
    }    
}

?>