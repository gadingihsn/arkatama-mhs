<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    public function getDataMahasiswa()
    {
        $this->db->select('*');
        $this->db->from('tbl_mhs');
        $this->db->join('tbl_fakultas', 'tbl_fakultas.id_fakultas = tbl_mhs.jurusan', 'left');
        $data = $this->db->get()->result();
        return $data;
    }

    public function simpan_data($data)
    {
        $this->db->insert('tbl_mhs', $data);
        return $this;
    }

    public function hapus_data($data)
    {
        $this->db->delete('tbl_mhs', array('id_mhs' => $data['id_mhs']));
    }
}
