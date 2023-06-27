<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rental_model');
    }

    public function index()
    {
        $pelanggan = $this->db->query("SELECT * FROM customer");
        $mobil = $this->db->query("SELECT * FROM mobil");
        $pesanan = $this->db->query("SELECT * FROM transaksi");
        $wisata = $this->db->query("SELECT * FROM wisata");
        $data['pelanggan'] = $pelanggan->num_rows();
        $data['mobil'] = $mobil->num_rows();
        $data['pesanan'] = $pesanan->num_rows();
        $data['wisata'] = $wisata->num_rows();
        $this->load->view('templates_admin/header');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}
