<?php

Class Carro Extends Eloquent {
    protected $table = 'carros';
    
    protected $fillable = array('modelo', 'placa', 'ano');
    
}