<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registro
 *
 * @author satellite
 */
class registro extends MX_Controller{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->database();
        
        $this->load->model('generic_model'); 
        
    }
    public function index($id_evento)
	{
//        echo "sadsd";
            $res['evento']=  $this->get_evento();
            $res['pago'] = $this->get_pago_tipo();
		$this->load->view('estructura_registro',$res);
	}
    function get_evento() {
        $evento = $this->generic_model->get('eventos');
        return $evento;
    }
    function get_pago_tipo() {
        $evento = $this->generic_model->get('tipos_pago');
        return $evento;
    }
    function save_register() {
        $this->db->trans_begin();
        
        $cedula = $this->input->post('cedula_usuario');
        $nombre= $this->input->post('nombre_usuario');
        $apellido = $this->input->post('apellido_usuario');
        $fech_facimiento = $this->input->post('fech_facimiento');
        $email_usuario= $this->input->post('email_usuario');
        $tel_usuario= $this->input->post('tel_usuario');
        $direccion_usuario = $this->input->post('direccion_usuario');
        $tipo_pago = $this->input->post('tipo_pago');
        
        $evento_id = $this->input->post('evento_id');
        
        // Guardo los usuarios 
        $data = array('cedula' => $cedula,
            'nombres_usuario'=>$nombre,
            'apellidos_usuario'=>$apellido,
            'correo'=>$email_usuario,
            'fecha_nacimiento'=>$fech_facimiento,
            'direccion_usuario'=>$direccion_usuario,
            'telefono'=>$tel_usuario,
            'forma_pago'=>$tipo_pago);
        $save = $this->generic_model->save($data,'usuarios');
        
        
        if ($save) {
            // guardo en la ytabla intermedia 
            $data1 = array('id_evento'=>$evento_id,
            'id_usuario'=>$save);
        
            $save1 = $this->generic_model->save($data1,'evento_usuarios');
            if($save1){
                
                echo success_msg(' <br> Se guardo con exito');
            }else{
                echo error_msg('No se ha guardado en la base de datos revise sus entradas');
            $this->db->trans_rollback(); // regresa la base de datosa un estado correcto antes del beging
            die(); // mata el proceso
            }
        } else {
            echo error_msg('No se ha guardado en la base de datos revise sus entradas');
            $this->db->trans_rollback(); // regresa la base de datosa un estado correcto antes del beging
            die(); // mata el proceso
        }
        // verifico que todo elproceso en si este bien ejecutado
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo error_msg('Algo salio mal en el proceso de guardar datos');
        } else {
            $this->db->trans_commit(); // finaliza la transaccion de beging 
        }
    }
    
}

