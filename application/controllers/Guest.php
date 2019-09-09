<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Desa Somongari';
        $this->load->view('templates/guest_header', $data);
        $this->load->view('guest/guest_index');
        $this->load->view('templates/guest_footer');
    }

    // Pemerintah Desa
    public function struktur()
    {
        $data['title'] = 'Desa Somongari';
        $this->load->view('templates/guest_header', $data);
        $this->load->view('guest/struktur');
        $this->load->view('templates/guest_footer');
    }
}
