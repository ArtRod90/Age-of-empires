<?php declare(strict_types = 1);

namespace Controllers;

use Model\Proyecto;
use Model\Usuarios;
use MVC\Router;

class DashboardController{

    public static function index(Router $router){
        
        
    
    $router->render("dashboard/index", [
        "titulo" => "Civilizaciones",
        "pagina" => "Civilizaciones"  
    ]); 

    }
    public static function civilizacion(Router $router){
        
        
        $alertas = [];
        $civilizacionNombre = $_GET["nombre"];
    $router->render("dashboard/civilizacion", [
        "titulo" => $civilizacionNombre ,
        "pagina" => $civilizacionNombre    
    ]); 

    }

    public static function unidades(Router $router){
        
    $router->render("dashboard/Unidades", [
        "titulo" => "Unidades",
        "pagina" => "Unidades",
            
    ]); 

    }
    public static function tecnologias(Router $router){
        
    $router->render("dashboard/Tecnologias", [
        "titulo" => "Tecnologias",
        "pagina" => "tecnologias",
            
    ]); 

    }

    

}