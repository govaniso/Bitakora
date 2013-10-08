<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of proyectos
 *
 * @author Govani
 */
class ProyectosController extends AppController {

    public function index() {
        Load::model("Proyectos");
        $Proyectos = new Proyectos();
        $this->proyectos = $Proyectos->find();
    }
    
    public function nuevo(){
        Load::model("Complejidad");
        $Complejidad = new Complejidad();
        $this->complejidades = $Complejidad->find();
    }
            

}

