<?php

class Home extends CI_Controller {
	public function index()
	{
        // load view admin/overview.php
        $this->load->view("halamanutama");
	}
}