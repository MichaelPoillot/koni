<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Juri extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('juri/index', $data);
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
        $this->load->view('juri/tambahdata', $data);
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
        $this->load->view('juri/edit', $data);
        $this->load->view('templates/footer',);
    }
}
