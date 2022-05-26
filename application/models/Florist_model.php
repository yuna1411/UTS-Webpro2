<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Florist_model extends CI_Model {
    public function AllData()
    {
        return $this->db->get('bunga')->result_array();

    }

    public function proses_tambah(){
        $data = [
            "kode" => $this->input->post('kode'),
            "nama" => $this->input->post('nama'),
            "kategori" => $this->input->post('kategori'),
            "jenis" => $this->input->post('jenis'),
            "harga" => $this->input->post('harga'),
            "tangkai" => $this->input->post('tangkai'),
            "warna" => $this->input->post('warna'),
            "deskripsi" => $this->input->post('deskripsi')
        ];

        $this->db->insert('bunga', $data);
    }

}
?>