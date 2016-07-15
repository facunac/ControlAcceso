<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class cpass extends CI_Controller {
     public function __construct()
     {
          parent::__construct();
          $this->load->helper('url');
          $this->load->database();
     }

     public function index()
     {
          //load the department_model
          $this->load->model('cpass_model');  
          //call the model function to get the department data
          $dataresult = $this->cpass_model->get_data();
          $data['cpasslist'] = $dataresult;
          //load the department_view
          $this->load->view('cpass_view',$data);
     }

     public function access_in($iCode)
     {
          $this->load->model('cpass_model');
          if($this->input->post('Ok') != ''){
              echo "OKOKOKOKOKOKOK";
              $data = array (
                'rut' => '1-9',
                'prueba' => 'SALTO',
                'colegio' => 'Maraino',
                'pulsera' => 16001,
                'fecha' => date("Y-m-d H:i:s"),
                'accion' => 'in');
              $this->cpass_model->evidencia_insert($data);
	  }else {
              $dataresult = $this->cpass_model->get_data($iCode);
              $data['cpasslist'] = $dataresult;
              $this->load->view('cpass_view',$data);
          }
     }
}

?>
