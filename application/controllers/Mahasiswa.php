<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }

    public function index()
    {
        $this->data['title'] = 'mahasiswa';
        $this->data['mahasiswa'] = $this->mahasiswa_model->getDataMahasiswa();
        $this->load->view('mahasiswa/mahasiswa_list', $this->data);
    }

    public function add()
    {
        $this->data['title'] = 'Tambah Mahasiswa';
        $this->load->view('mahasiswa/mahasiswa_add', $this->data, array('error' => ' '));
    }

    public function add_process()
    {
        $file_name = date("Ymd") . '_' . time();

        $config['upload_path']          = FCPATH . '/upload/fotoprofil/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['file_name']            = $file_name;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('inputFotoProfil')) {
            $error = array(
                'error' => $this->upload->display_errors()
            );
            $this->load->view('mahasiswa/mahasiswa_add', $error);
        } else {
            $uploaded_data = $this->upload->data();

            $data = array(
                'nama'              => $this->input->post('inputNama'),
                'nim'               => $this->input->post('inputNim'),
                'no_hp'             => $this->input->post('inputNoHp'),
                'email'             => $this->input->post('inputEmail'),
                'jurusan'           => $this->input->post('inputJurusan'),
                'alamat'            => $this->input->post('inputAlamat'),
                'foto_profil'       => $this->upload->data("file_name")
            );

            $this->mahasiswa_model->simpan_data($data);

            return redirect('mahasiswa');
        }
    }

    public function delete_process($id_mhs)
    {

        $data = [
            'id_mhs'    => $id_mhs,
        ];

        $this->mahasiswa_model->hapus_data($data);
        return redirect('mahasiswa');
    }

    public function update_process()
    {
        $file_name = date("Ymd") . '_' . time();

        $config['upload_path']          = FCPATH . '/upload/fotoprofil/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['file_name']            = $file_name;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('inputFotoProfil')) {
            $error = array(
                'error' => $this->upload->display_errors()
            );
            $this->load->view('mahasiswa/mahasiswa_add', $error);
        } else {
            $uploaded_data = $this->upload->data();

            $data = array(
                'nama'              => $this->input->post('inputNama'),
                'nim'               => $this->input->post('inputNim'),
                'no_hp'             => $this->input->post('inputNoHp'),
                'email'             => $this->input->post('inputEmail'),
                'jurusan'           => $this->input->post('inputJurusan'),
                'alamat'            => $this->input->post('inputAlamat'),
                'foto_profil'       => $this->upload->data("file_name")
            );

            $this->mahasiswa_model->simpan_data($data);

            return redirect('mahasiswa');
        }
    }
}
