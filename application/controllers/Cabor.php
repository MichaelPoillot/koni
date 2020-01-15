<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cabor extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['cabor'] = $this->db->get('cabor')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('cabor/index', $data);
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
        $this->load->view('cabor/tambahdata', $data);
        $this->load->view('templates/footer',);
    }
    public function insert()
    {
        $data = [
            'nama_cabor' => $this->input->post('nama_cabor')
        ];
        $this->db->insert('cabor', $data);
        $this->session->set_flashdata('message', '
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
         <span class="badge badge-pill badge-success">Success</span>Data Berhasil Di Tambahkan !
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
           </button>
        </div>');
        redirect('cabor');
    }
    public function edit($id)
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['cabor'] =  $this->db->get_where('cabor', ['id_cabor' => $id])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('cabor/edit', $data);
        $this->load->view('templates/footer',);
    }
    public function hapus($id)
    {
        $this->db->where('id_cabor', $id);
        $this->db->delete('cabor');
        $this->session->set_flashdata('message', '
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
         <span class="badge badge-pill badge-success">Success</span>Data Berhasil Di Hapus !
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
           </button>
        </div>');
        redirect('cabor');
    }
    public function ubah()
    {
        $data = [
            'nama_cabor' => $this->input->post('nama_cabor')
        ];
        $this->db->where('id_cabor', $this->input->post('id'));
        $this->db->update('cabor', $data);
        $this->session->set_flashdata('message', '
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
         <span class="badge badge-pill badge-success">Success</span>Data Berhasil Di Ubah !
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
           </button>
        </div>');
        redirect('cabor');
    }
}
