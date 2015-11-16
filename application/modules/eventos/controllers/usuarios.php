<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarios
 *
 * @author satellite
 */
class usuarios extends MX_Controller{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->database();
        
        $this->load->model('generic_model'); 
    }
    
    function index() {
        $res['lista_usuarios'] = $this->get_usuarios();
        $this->load->view('esctructura_lista_usuarios',$res);
    }
    
    function get_usuarios() {
        $datos =  $this->generic_model->get('usuarios');
        return $datos;
    }
    
    function edit_usuario($id_usuario) {
        // ojo tb hay que eliminar d e la tabla intermedia 
    }
    function delite_usuario($id_usuario) {
        
    }
}
