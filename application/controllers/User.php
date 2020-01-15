<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer',);
    }
    public function tambahdata()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Pasword', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data User';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/tambahdata', $data);
            $this->load->view('templates/footer',);
        } else {

            if (isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
                /*-------------setting attachment upload -------------*/
                $config['upload_path'] = './uploads/profil/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 1024 * 8;
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file')) {
                    $data['file_name'] = null;
                    $json_data =  array(
                        "result" => FALSE,
                        "message" => array('head' => 'Failed', 'body' => $this->upload->display_errors('', '')),
                        "form_error" => 'file proof',
                        "redirect" => ''
                    );
                    print json_encode($json_data);
                    die();
                } else {
                    $data = $this->upload->data();
                }
            } else {
                $json_data =  array(
                    "result" => FALSE,
                    "message" => array('head' => 'Failed', 'body' => "Harus Mengupload icon "),
                    "form_error" => 'file proof',
                    "redirect" => ''
                );
                print json_encode($json_data);
                die();
            }

            $data = [
                'email' => $this->input->post('email'),
                'name' => $this->input->post('name'),
                'image' =>  $data['file_name'],
                'password' => $this->input->post('password'),
                'role_id' => '1',
                'is_active' => '1',
                'is_active' => '1',
                'date' => time(),
                'last_login' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
             <span class="badge badge-pill badge-success">Success</span>Data Berhasil Di Tambahkan !
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
            </div>');
            redirect('user');
        }
    }
}
