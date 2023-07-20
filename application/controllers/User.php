<?php
class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('pagination');
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
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nm_dpn', 'Nama Depan', 'required', ['required' => 'Nama Depan harus diisi']);
        $this->form_validation->set_rules('nm_bk', 'Nama Belakang', 'required', ['required' => 'Nama Belakang harus diisi']);
        $this->form_validation->set_rules('no_wa', 'Nomor WA', 'required|is_natural', ['required' => 'Nomor WA harus diisi']);
        $this->form_validation->set_rules('da_sal', 'Daerah Asal', 'required', ['required' => 'Asal Daerah harus diisi']);
        $this->form_validation->set_rules('tgl_lh', 'Tanggal Lahir', 'required', ['required' => 'Tanggal Lahir harus diisi']);
        $this->form_validation->set_rules('kwg', 'Kewarganegaraan', 'required', ['required' => 'Kewarganegaraan harus diisi']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'ALamat harus diisi']);

        if ($this->form_validation->run() == FALSE){
            echo validation_errors('<div class="error">', '</div>');
        }else{
            $nm_dpn= $this->input->post('nm_dpn', TRUE);
            $nm_bk = $this->input->post('nm_bk', TRUE);
            $no_wa = $this->input->post('no_wa', TRUE);
            $da_sal = $this->input->post('da_sal', TRUE);
            $tgl_lh = $this->input->post('tgl_lh', TRUE);
            $kwg = $this->input->post('kwg', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
     
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
            redirect('user/userlist');
        }

        
    }

    function user_lihat()
    {
        $this->load->view('user/user_detail');
    }

    }
?>