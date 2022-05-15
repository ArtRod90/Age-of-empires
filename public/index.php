<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ApiController;
use Controllers\DashboardController;
use MVC\Router;
$router = new Router();
  
    
//ZONA DE PROYECTOS
$router->get("/", [DashboardController::class, "index"]);
$router->get("/civilizacion", [DashboardController::class, "civilizacion"]);
$router->get("/civilizacion", [DashboardController::class, "civilizacion"]);
$router->get("/unidades", [DashboardController::class, "unidades"]);
$router->get("/tecnologias", [DashboardController::class, "tecnologias"]);

$router->get("/api/civilizacion", [ApiController::class, "Civilizacion"]);
$router->get("/api/unidades", [ApiController::class, "Unidades"]);
$router->get("/api/tecnologias", [ApiController::class, "Tecnologias"]);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();