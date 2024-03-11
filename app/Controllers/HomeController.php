<?php

namespace App\Controllers;  //Se agrega el namespace

use App\Models\Contact; //Se agrega el use

class HomeController extends Controller {
    public function index(){

        $contactModel = new Contact(); //Se instancia la clase Contact

        return $contactModel->query(); //Se llama al método query

        return $this->view('home', [
            'name' => 'Carlos',
            'age' => 25
        ]);
    }
    
}