<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function register($username,$password,$nama)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'nama'=>$nama
		);
		$this->db->insert('pengguna',$data_user);
	}
    function login_user($username,$password)
	{
        $query = $this->db->get_where('pengguna',array('username'=>$username));
        $remember = $this->input->post('remember_me');
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username',$username);
				$this->session->set_userdata('nama',$data_user->nama);
                if ($remember) {
                    $this->session->set_userdata('remember_me', TRUE);
                    }
                    $sess_data = array(
                    'username' => $username,
                    'password' => $password
                     );
                    $this->session->set_userdata('logged_in', $sess_data);
                    $this->session->set_userdata('is_login',TRUE);
                    return TRUE;
                    }
                return TRUE;
            } else {
                return FALSE;
            }
        }
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
        $this->load->view('userarea');
    }
}
?>