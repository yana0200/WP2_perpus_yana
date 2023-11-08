<?php
class siswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-siswa');
    }
    public function cetak()
    {
            $data = [
                'nama' => $this->input->post('nama'),
                'nim' => $this->input->post('nim'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'alamat' => $this->input->post('alamat'),
                'agama' => $this->input->post('agama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'sks' => $this->input->post('sks'),
            ];

            $this->load->view('view-data-siswa', $data);
        }
    }