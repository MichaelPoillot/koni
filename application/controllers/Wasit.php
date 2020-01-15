<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wasit extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('wasit/index', $data);
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
        $this->load->view('wasit/tambahdata', $data);
        $this->load->view('templates/footer',);
    }
    public function edit()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('wasit/edit', $data);
        $this->load->view('templates/footer',);
    }
}
