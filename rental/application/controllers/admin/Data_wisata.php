<?php

class Data_wisata extends CI_Controller
{

     public function index()
     {
          $data['wisata'] = $this->rental_model->get_data('wisata')->result();
          $this->load->view('templates_admin/header');
          $this->load->view('admin/data_wisata', $data);
          $this->load->view('templates_admin/footer');
     }

     public function tambah_wisata()
     {
          $this->load->view('templates_admin/header');
          $this->load->view('admin/form_tambah_wisata');
          $this->load->view('templates_admin/footer');
     }

     public function tambah_wisata_aksi()
     {
          $this->_rules();

          if ($this->form_validation->run() == FALSE) {
               $this->tambah_wisata();
          } else {
               $nama                   = $this->input->post('nama');
               $harga                  = $this->input->post('harga');
               $buka                   = $this->input->post('buka');
               $tutup                  = $this->input->post('tutup');

               $data = array(
                    'nama'    => $nama,
                    'harga'   => $harga,
                    'buka'    => $buka,
                    'tutup'   => $tutup
               );

               $this->rental_model->insert_data($data, 'wisata');
               $this->session->set_flashdata('berhasil', 'Objek wisata berhasil di tambahkan');
               redirect('admin/data_wisata');
          }
     }

     public function update_wisata($id)
     {
          $where = array('id_wisata' => $id);
          $data['wisata'] = $this->db->query("SELECT * FROM wisata WHERE id_wisata='$id'")->result();
          $this->load->view('templates_admin/header');
          $this->load->view('admin/form_update_wisata', $data);
          $this->load->view('templates_admin/footer');
     }

     public function update_wisata_aksi()
     {
          $this->_rules();

          if ($this->form_validation->run() == FALSE) {
               $this->update_wisata_aksi();
          } else {
               $id             = $this->input->post('id_wisata');
               $nama           = $this->input->post('nama');
               $harga          = $this->input->post('harga');
               $buka           = $this->input->post('buka');
               $tutup          = $this->input->post('tutup');

               $data = array(
                    'nama'    => $nama,
                    'harga'   => $harga,
                    'buka'    => $buka,
                    'tutup'   => $tutup
               );

               $where = array(
                    'id_wisata' => $id
               );

               $this->rental_model->update_data('wisata', $data, $where);
               $this->session->set_flashdata('berhasil', 'Objek wisata berhasil di ubah');
               redirect('admin/data_wisata');
          }
     }

     public function _rules()
     {
          $this->form_validation->set_rules('nama', 'Nama', 'required');
          $this->form_validation->set_rules('buka', 'Buka', 'required');
          $this->form_validation->set_rules('tutup', 'Tutup', 'required');
     }

     public function delete_wisata($id)
     {
          $where = array('id_wisata' => $id);
          $this->rental_model->delete_data($where, 'wisata');
          $this->session->set_flashdata('berhasil', 'Objek wisata berhasil di hapus');
          redirect('admin/data_wisata');
     }
}
