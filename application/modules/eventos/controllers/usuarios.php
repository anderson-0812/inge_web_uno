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
    
    function get_pago_tipo() {
        $evento = $this->generic_model->get('tipos_pago');
        return $evento;
    }
    
    
    function edit_usuario_formulario($id_usuario) {
        // ojo tb hay que eliminar d e la tabla intermedia 
        $datos_usuario = $this->generic_model->get('usuarios',array('id'=>$id_usuario));
        $res['datos_usuario']=$datos_usuario;
        $res['pago']=  $this->get_pago_tipo();
        
        $this->load->view('editar_usuarios',$res);
        
    }
    function edit_usuario() {
        // ojo tb hay que eliminar d e la tabla intermedia 
        $this->db->trans_begin();
        
        $cedula = $this->input->post('cedula_usuario');
        $nombre= $this->input->post('nombre_usuario');
        $apellido = $this->input->post('apellido_usuario');
        $fech_facimiento = $this->input->post('fech_facimiento');
        $email_usuario= $this->input->post('email_usuario');
        $tel_usuario= $this->input->post('tel_usuario');
        $direccion_usuario = $this->input->post('direccion_usuario');
        $tipo_pago = $this->input->post('tipo_pago');
        $id_usuario = $this->input->post('id_usuario');
        // editar datos 
       $data = array('cedula' => $cedula,
            'nombres_usuario'=>$nombre,
            'apellidos_usuario'=>$apellido,
            'correo'=>$email_usuario,
            'fecha_nacimiento'=>$fech_facimiento,
            'direccion_usuario'=>$direccion_usuario,
            'telefono'=>$tel_usuario,
            'forma_pago'=>$tipo_pago);
        $affectado = $this->generic_model->update('usuarios', $data, array('id'=>$id_usuario));
        if($affectado>0){
            echo '<br><div class="alert alert-success">La actualización de datos tuvo exito</div>';
        }else{
            echo '<br><div class="alert alert-danger">No se ha actualizadopor favor vuelva a intentarlo</div>';
//                echo error_msg('No se ha guardado en la base de datos revise sus entradas');
                $this->db->trans_rollback(); // regresa la base de datosa un estado correcto antes del beging
                die(); // mata el proceso
        }
        
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<div class="alert alert-danger">Algo salio mal en el proceso de guardar datos</div>';
//            echo error_msg('Algo salio mal en el proceso de guardar datos');
        } else {
            $this->db->trans_commit(); // finaliza la transaccion de beging 
        }
        
    }
    function delete_usuario($id_usuario) {
        
    }
}
