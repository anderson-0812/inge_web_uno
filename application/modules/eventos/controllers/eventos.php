<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventos extends MX_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
        
        $this->load->model('generic_model'); 
        
    }
	public function index()
	{
            $res['evento']=  $this->get_evento();
		$this->load->view('welcome_message',$res);
	}
        function get_evento() {
            $evento = $this->generic_model->get('eventos');
            return $evento;
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */