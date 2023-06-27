<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan extends CI_Controller
{

    public function index()
    {
        $dari       = $this->input->post('dari');
        $sampai     = $this->input->post('sampai');
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('admin/filter_laporan');
            $this->load->view('templates_admin/footer');
        } else {
            $data['laporan'] = $this->db->query("SELECT transaksi.*, mobil.*, customer.*, wisata.nama as nama_wisata, wisata.harga as harga_paket
            FROM transaksi
            JOIN mobil on mobil.id_mobil = transaksi.id_mobil
            JOIN customer on customer.id_customer = transaksi.id_customer
            LEFT JOIN wisata on wisata.id_wisata = transaksi.id_wisata 
            WHERE date(tanggal_rental) >= '$dari' 
            AND date(tanggal_rental) <= '$sampai'")->result();
            $this->load->view('templates_admin/header');
            $this->load->view('admin/tampilkan_laporan', $data);
            $this->load->view('templates_admin/footer');
        }
    }

    public function export()
    {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');
        $trx = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil = mb.id_mobil AND tr.id_customer = cs.id_customer AND date(tanggal_rental) >= '$dari' AND  date(tanggal_rental) <= '$sampai'")->result();
        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Transaction ID')
            ->setCellValue('C1', 'Customer ID')
            ->setCellValue('D1', 'Mobil Tipe ID')
            ->setCellValue('E1', 'Nama Pelanggan')
            ->setCellValue('F1', 'Alamat')
            ->setCellValue('G1', 'No Hp')
            ->setCellValue('H1', 'No KTP')
            ->setCellValue('I1', 'Merk Mobil')
            ->setCellValue('J1', 'Teknis Rental')
            ->setCellValue('K1', 'Tgl Rental')
            ->setCellValue('L1', 'Tgl Kembali')
            ->setCellValue('M1', 'Harga')
            ->setCellValue('N1', 'Denda')
            ->setCellValue('O1', 'Total Bayar')
            ->setCellValue('P1', 'Tgl Selesai')
            ->setCellValue('Q1', 'Bukti Pembayaran')
            ->setCellValue('R1', 'Status Rental');

        $kolom = 2;
        $nomor = 1;
        foreach ($trx as $pengguna) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $kolom, $nomor)
                ->setCellValue('B' . $kolom, 'TRSC-' . $pengguna->id_rental)
                ->setCellValue('C' . $kolom, 'CST-' . $pengguna->id_customer)
                ->setCellValue('D' . $kolom, $pengguna->kode_type)
                ->setCellValue('E' . $kolom, $pengguna->nama)
                ->setCellValue('F' . $kolom, $pengguna->alamat)
                ->setCellValue('G' . $kolom, $pengguna->no_telepon)
                ->setCellValue('H' . $kolom, $pengguna->no_ktp)
                ->setCellValue('I' . $kolom, $pengguna->merk)
                ->setCellValue('J' . $kolom, $pengguna->opsi)
                ->setCellValue('K' . $kolom, date('j F Y', strtotime($pengguna->tanggal_rental)))
                ->setCellValue('L' . $kolom, date('j F Y', strtotime($pengguna->tanggal_kembali)))
                ->setCellValue('M' . $kolom, number_format($pengguna->harga))
                ->setCellValue('N' . $kolom, number_format($pengguna->total_denda))
                ->setCellValue('O' . $kolom, number_format($pengguna->harga + $pengguna->total_denda))
                ->setCellValue('P' . $kolom, date('j F Y', strtotime($pengguna->tanggal_pengembalian)))
                ->setCellValue('Q' . $kolom, $pengguna->bukti_pembayaran)
                ->setCellValue('R' . $kolom, $pengguna->status_rental);
            $kolom++;
            $nomor++;
        }

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Transaksi Pesanan ' . date("j F Y") . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
