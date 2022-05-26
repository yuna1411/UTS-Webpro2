<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $data['bunga'] = $this->Florist_model->AllData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/templateindex', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_bunga(){
        $data['bunga'] = $this->Florist_model->AllData();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/tambah_bunga', $data);
        $this->load->view('templates/footer');
    }

    public function proses_tambah(){
        $this->Florist_model->proses_tambah();
        redirect('Home');
    }
}