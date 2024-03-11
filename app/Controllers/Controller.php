<?php

namespace App\Controllers;

class Controller{
    public function view($route, $data = []){

        //Destructurar el array para poder acceder a las variables
        extract($data);
        //return $name;

        $route = str_replace('.', '/', $route);
        $route = "../resources/views/{$route}.php";
        
        if(file_exists($route)){
            
            ob_start();//Toma el contenido del archivo y lo guarda en un buffer
            require_once($route);//Requiere el archivo y lo ejecuta
            $content = ob_get_clean();//Toma el contenido del buffer y lo guarda en una variable
            return $content;//Retorna el contenido
        } else {
            return '404 - Not Found';
        }
    }
}