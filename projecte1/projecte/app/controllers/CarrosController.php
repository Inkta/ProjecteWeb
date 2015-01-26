<?php

class CarrosController extends BaseController{
    public function mostrarCoches() {
        
        $coches = Carro::all();
        
        return View::make('coches.lista', array('coches' => $coches));    
      
    }
    
    public function crearCoches() {
        $input = array(
        'modelo' =>'Honda Civic',
        'placa' => 'HFU 88J',
        'ano' => 2010
        );
        
        Carro::create($input);
 
        return Redirect::to('coches');
    }
}