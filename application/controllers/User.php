<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Controller {
 
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Crudusermodel');
    }

    public function index()
    {
        $data['user'] = $this->Crudusermodel->getAllUser();
        $data['admin1'] = $this->Crudusermodel->getAllAdminUser();
        $data['admin2'] = $this->Crudusermodel->getAllJadwal();
        $data['admin3'] = $this->Crudusermodel->getAllAsal();
        $data['admin4'] = $this->Crudusermodel->getAllTujuan();

        $this->load->view('userarea', $data);
    }
}
