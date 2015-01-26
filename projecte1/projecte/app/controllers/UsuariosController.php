<?php

class UsuariosController extends BaseController{
    public function mostrarUsuarios() {
        $usuarios = Usuario::all();
        // Con el método all() le estamos pidiendo al modelo de Usuario
        // que busque todos los registros contenidos en esa tabla y los devuelva en un Array
        
        return View::make('usuarios.lista', array('usuarios' => $usuarios));    
            // El método make de la clase View indica cual vista vamos a mostrar al usuario
        //y también pasa como parámetro los datos que queramos pasar a la vista.
        // En este caso le estamos pasando un array con todos los usuarios
    }
    
    //Crear nuevo usuario
    public function nuevoUsuario() {
        return View::Make('usuarios.crear');
    }
    
    public function crearUsuario() {
        
          Usuario::create(Input::all());
          
          
          return Redirect::to('usuarios');
    }
    
    /*
     * Ver usuario con id 
     */
    
    public function verUsuario($id) {
        
        $usuario = Usuario::find($id);
          // para buscar al usuario utilizamos el metido find que nos proporciona Laravel
        // este método devuelve un objete con toda la información que contiene un usuario
        
        return View::Make('usuarios.ver', array('usuario' => $usuario));
        
    }
    
}