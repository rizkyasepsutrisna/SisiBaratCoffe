<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Sisi Barat Coffe';
        $this->load->view('templates/header', $data);
        $this->load->view('Dashboard/index');
        $this->load->view('templates/footer');
    }
}
