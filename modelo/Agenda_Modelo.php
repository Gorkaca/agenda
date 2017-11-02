<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class agenda{
    private $agenda;
    private $link;
    public function __construct()
    {
        $this->platillo = array();
        $this->link = new mysqli('localhost', 'root', '', 'agenda');
    }
      private function set_names() // funtzio honek ñ eta tildeak konpontzen ditu
    {                           //query baten emaitza funtzio honekin filtratzen da.  
        return $this->link->query("SET NAMES 'utf8'");
    }
//    HEMEN HASTEN DA KONSULTAK
    public function listar_contactos()
        {
        self::set_names();
//        KONTACTU GUZTIAK LISTATZEN DU
        $sql="select nombre, apellido,telefono from contactos ";  
        $result=$this->link->query($sql); // result-en jaso diren emaitzak filtratzen ditu
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $this->agenda[]=$row; // platillo array-an result-eko filak banan banan gordetzen dira. 
        }

        return $this->agenda;
        $result->free_result();
        $this->link->close();
    }
        
                
        
    
}
