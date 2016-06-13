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
}

?>
