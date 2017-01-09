<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();//carga base de datos
		//Do your magic here
	}
	public function selMarca(){

		$query = $this->db->query("select * from marca");
		return $query->result();
	}

	public function listMarca(){
		$query = $this->db->query("select * from marca");
		return $query->result();
	}

	public function insertAuto($idmarca, $modelo, $patente)
    {
        $arrayDatos = array(
            'idmarca'  => $idmarca,
            'modelo'   => $modelo,
            'patente'  => $patente,
        );
        $this->db->insert('autos', $arrayDatos);
    }

      public function deleteMarca($id){
        $this->db->where('idmarca', $id);//campo id y el que trae por parametro
        $this->db->delete('marca');//nombre de la tabla
}

 public function editMarca($id){
        $query = $this->db->query("select * from marca m where m.idmarca = $id");//compara el id
        return $query->result();
    }

     public function updateMarca($txtidmarca,$txtnombre	)
    {
        $array = array(
        	'idmarca'  => $txtidmarca,
            'nombre'   => $txtnombre,
                      );
         $this->db->where('idmarca', $txtidmarca);
        $this->db->update('marca', $array);
    }
}
/* End of file Auto_model.php */
/* Location: ./application/models/Auto_model.php */