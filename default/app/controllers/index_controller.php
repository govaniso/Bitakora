<?php

/**
 * Controller por defecto si no se usa el routes
 * 
 */
class IndexController extends AppController
{

    public function index()
    {
        Load::model("Usuarios");
        $Usuarios = new Usuarios();
        $users = $Usuarios->find();
       
    }

}
