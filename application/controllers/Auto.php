<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->model('auto_model');
	}

	public function index()
	{
		$data['contenido'] = "auto/index"; //envio contenido a la plantilla
		 $data['selMarca'] = $this->auto_model->selMarca();
		$data['listMarca'] = $this->auto_model->listMarca();
		$this->load->view('plantilla', $data);
	}

	 public function insert()
    {
        $datos = $this->input->post();
        if (isset($datos)) {
            $txtmarca     = $datos['txtMarca'];
            $txtModelo   = $datos['txtModelo'];
            $txtPatente = $datos['textPatente'];
           
            $this->auto_model->insertAuto($txtmarca, $txtModelo, $txtPatente);
        }
        redirect('auto/index');

    }	
     public function delete($id = NULL){
        if ($id != NULL) {
            $this->auto_model->deleteMarca($id);
            redirect('auto/index');
        }
    }

     public function edit($id = NUll){//nombre de la funcion igual a la vista
        if ($id != NULL) {
            $data['contenido'] = 'auto/edit';
           
            $data['datosMarca'] = $this->auto_model->editMarca($id);//llamamos a la funcion del modelo y lo alamacenamos
            $this->load->view('plantilla', $data);//llevamos los datos a la vista
        }else{
            redirect('');
        }
    }

    public function update(){
         $datos = $this->input->post();
        if (isset($datos)) {
            $txtidmarca   = $datos['idmarca'];
            $txtMarca     = $datos['txtMarca'];
           
            $this->auto_model->updateMarca($txtidmarca,$txtMarca);//llama al metodo en el modelo
    }
        redirect('auto/index');
    
}

    
}

/* End of file Auto.php */
/* Location: ./application/controllers/Auto.php */