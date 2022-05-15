<?php declare(strict_types = 1);

namespace Controllers;

use Model\Proyecto;
use Model\Tarea;

class ApiController{

    public static function Civilizacion(){
        
    include_once __DIR__ . "../../API/Civilitationz.json";
        
    }

    public static function Unidades(){
        
    include_once __DIR__ . "../../API/Unidades.json";
        
    }
    public static function Tecnologias(){
        
    include_once __DIR__ . "../../API/Tecnologias.json";
        
    }

}
