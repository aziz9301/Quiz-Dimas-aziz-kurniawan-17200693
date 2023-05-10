<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('user_add');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama siswa',
            'required',
            [
                'required' => 'nama wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'nis',
            'nis',
            'required|min_length[3]',
            [
                'required' => 'nis wajib di isi',
                'min_length' => 'nis minimal 3 karakter'
            ]
        );
        $this->form_validation->set_rules(
            'k',
            'k',
            'required',
            [
                'required' => 'kelas wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'ultah',
            'ultah',
            'required',
            [
                'required' => 'Tanggal Lahir wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'tl',
            'tempat lahir',
            'required',
            [
                'required' => 'Tempat lahir wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'alamat',
            'required',
            [
                'required' => 'alamat wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'jk',
            'jk',
            'required',
            [
                'required' => 'Pilih Jenis Kelamin'
            ]
        );
        $this->form_validation->set_rules(
            'agama',
            'agama',
            'required',
            [
                'required' => 'agama wajib di isi'
            ]
        );
        if ($this->form_validation->run() !=true){
            $this->load->view('user_add');
        }else{

            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'k'=> $this->input->post('k'),
                'ultah' => $this->input->post('ultah'),
                'tl' => $this->input->post('tl'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                // 'p' => $this->input->post('p'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('view-data-siswa', $data);
        }
    }
}
