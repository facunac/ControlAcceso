<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cpass_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_data()
     {
	  var_dump($this->input->get('search'));
	  
          $sql = 'select rut, nombre, apellido_p, apellido_m, ano, colegio from atleta '.($this->input->get('search') == NULL?'limit 10':'where id = '.$this->input->get('search'));
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;
     }
}

?>
