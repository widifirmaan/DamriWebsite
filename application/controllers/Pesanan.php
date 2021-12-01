<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

	public function index()
	{
	}

	public function save()
	{
		$datapesan['username'] = $this->input->post('username');
		$datapesan['asal'] = $this->input->post('asal');
		$datapesan['tujuan'] = $this->input->post('tujuan');
		$datapesan['jenis'] = $this->input->post('jenis');
		$datapesan['tanggal'] = $this->input->post('tanggal');
        $datapesan['jumtik'] = $this->input->post('jumtik');
        $this->db->insert('ticketing',$datapesan);
        $this->session->set_flashdata('pesan_success', 'Pesan Tiket Berhasil');
        
			redirect("/","refresh");

	}
}