<?php
class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }
    
    function userlist(){
        // $user_data = $this->User_model->get_all();

        $data = [
            'user_data' => $this->User_model->get_all()
        ];
        $this->load->view('user/user_list', $data);
    } 


    function user_add()
    {
        $this->load->view('user/user_tambah');
    }

    function user_input()
    {
        $nm_dpn= $this->input->post('nm_dpn');
		$nm_bk = $this->input->post('nm_bk');
		$no_wa = $this->input->post('no_wa');
        $da_sal = $this->input->post('da_sal');
        $tgl_lh = $this->input->post('tgl_lh');
        $kwg = $this->input->post('kwg');
        $alamat = $this->input->post('alamat');
 
		$data = array(
			'nm_dpn' => $nm_dpn,
			'nm_bk' => $nm_bk,
			'no_wa' => $no_wa,
            'da_sal' => $da_sal,
            'tgl_lh' => $tgl_lh,
            'kwg' => $kwg,
            'alamat' => $alamat
			);
		$this->User_model->insert($data,'tb_user');
		redirect('index');
    }

    }
?>