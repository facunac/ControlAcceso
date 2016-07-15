<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cpass_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_data($iCode)
     {
	  
          $sql = "select rut, nombre, apellido_p, apellido_m, colegio, prueba, fecha_desde, fecha_hasta, if ( sign(fecha_desde - now()) = sign(fecha_hasta - now()),'FALSO','OK') estado from control_acceso where pulsera = ".$iCode;
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;
     }

     function evidencia_insert($data)
     {
         $this->db->insert('control_log', $data);
     }   
}

?>
