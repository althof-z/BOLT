<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Rental_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_where($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id_mobil($id)
    {
        $hasil = $this->db->where('id_mobil', $id)->get('mobil');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function chart()
    {
        $data = $this->db->query("SELECT mobil.merk, transaksi.harga 
        from transaksi 
        join mobil on mobil.id_mobil = transaksi.id_mobil
        WHERE transaksi.id_customer
        group by mobil.merk");
        return $data->result();
    }

    public function chart_mobil()
    {
        $data = $this->db->query("SELECT status_rental, count(*) as qty from transaksi group by status_rental");
        return $data->result();
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('transaksi');

        return $this->db->get();
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
            ->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('customer');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    public function update_password($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function downloadPembayaran($id)
    {
        $query = $this->db->get_where('transaksi', array('id_rental' => $id));
        return $query->row_array();
    }
}
