<?php
session_start();

class usuario
{
    private $usuario;
    private $link;
    
    public function __construct()
    {
        $this->usuario = array();
        $this->link = new mysqli('localhost', 'root', '', 'agenda');
    }
     private function set_names() // funtzio honek ñ eta tildeak konpontzen ditu
    {                           //query baten emaitza funtzio honekin filtratzen da.  
        return $this->link->query("SET NAMES 'utf8'");
    }
    
}
