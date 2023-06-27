<?php

class Dashboard extends CI_Controller
{

     public function index()
     {
          $customer = $this->session->userdata('id_customer');
          $data['mobil'] = $this->db->query("SELECT * FROM mobil where opsi ='Dengan Sopir'")->result();
          $data['mobil2'] = $this->db->query("SELECT * FROM mobil where opsi ='Lepas Kunci'")->result();
          $active = $this->db->query("SELECT * FROM mobil WHERE status ='1'");
          $inactive = $this->db->query("SELECT * FROM mobil WHERE status ='0'");
          $pesanan = $this->db->query("SELECT * FROM transaksi WHERE status_rental ='Selesai' and id_customer = '$customer'");
          $data['active'] = $active->num_rows();
          $data['inactive'] = $inactive->num_rows();
          $data['done'] = $pesanan->num_rows();
          $this->load->view('templates_customer/header');
          $this->load->view('dashboard', $data);
          $this->load->view('templates_customer/footer');
     }

     public function detail_mobil($id)
     {
          $data['detail'] = $this->rental_model->ambil_id_mobil($id);
          $this->load->view('templates_customer/header');
          $this->load->view('detail_mobil', $data);
          $this->load->view('templates_customer/footer');
     }
}
