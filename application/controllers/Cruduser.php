<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cruduser extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crudusermodel');
    }

    public function index()
    {
        $data['user'] = $this->Crudusermodel->getAllUser();
        $this->load->view('ticketing', $data);
    }
}