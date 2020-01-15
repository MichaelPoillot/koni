<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatih extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pelatih'] = $this->db->get('pelatih')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pelatih/index', $data);
        $this->load->view('templates/footer',);
    }
    public function tambahdata()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pelatih/tambahdata', $data);
        $this->load->view('templates/footer',);
    }
    public function edit($id)
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pelatih/edit', $data);
        $this->load->view('templates/footer',);
    }
    public function insert()
    {
        $data = [
            'no_anggota' => $this->input->post('no_anggota'),
            'foto' => $this->input->post('foto'),
            'nama_pelatih' => $this->input->post('nama_pelatih'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'id_cabor' => $this->input->post('id_cabor'),
            'lesensi' => $this->input->post('lesensi'),
            'status' => '1',
            'date' => time()
        ];
        $this->db->insert('pelatih', $data);
        $this->session->set_flashdata('message', '
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
         <span class="badge badge-pill badge-success">Success</span>Data Berhasil Di Tambahkan !
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
           </button>
        </div>');
        redirect('pelatih');
    }
}
