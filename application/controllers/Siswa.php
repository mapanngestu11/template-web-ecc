<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_siswa');
        $this->load->model('M_jadwal');
        $this->load->library('upload');

        // if ($this->session->userdata('masuk') != TRUE) {
        //     $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
        //     $url = base_url('Login');
        //     redirect($url);
        // }
    }

    public function index()
    {
        $data['siswa'] = $this->M_siswa->tampil_data();
        $this->load->view('List.siswa.php', $data);
    }
    public function tambah()
    {
        $data['jadwal'] = $this->M_jadwal->get_hari();
        $this->load->view('Tambah.siswa.php',$data);
    }

    function get_jam(){
        $hari=$this->input->post('hari');
        $data=$this->M_jadwal->get_jam($hari);
        echo json_encode($data);
    }

    public function add()
    {
       date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/file/foto_siswa/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 1000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {

                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto_siswa/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 640;
                $config['height'] = 407;
                $config['new_image'] = './assets/foto_siswa/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];

                $no_pendaftar   = $this->input->post('no_pendaftar');
                $nama_lengkap   = $this->input->post('nama_lengkap');
                $tempat_lahir   = $this->input->post('tempat_lahir');
                $tgl_lahir      = $this->input->post('tgl_lahir');
                $asal           = $this->input->post('asal');

                $jenis_kelamin  = $this->input->post('jenis_kelamin');
                $no_hp          = $this->input->post('no_hp');
                $nama_ayah      = $this->input->post('nama_ayah');
                $nama_ibu       = $this->input->post('nama_ibu');
                $alamat         = $this->input->post('alamat');

                $program_kursus = $this->input->post('program_kursus');
                $hari_pertama   = $this->input->post('hari_pertama');
                $jam_pertama    = $this->input->post('jam_pertama');
                $hari_kedua     = $this->input->post('hari_kedua');
                $jam_kedua      = $this->input->post('jam_kedua');

                $hari_ketiga    = $this->input->post('hari_ketiga');
                $jam_ketiga     = $this->input->post('jam_ketiga');
                $username       = $this->input->post('username');
                $password       = md5($this->input->post('password'));

                $validasi_data  = $this->input->post('validasi_data');


                $data = array(
                    'no_pendaftar'  => $no_pendaftar,
                    'nama_lengkap'  => $nama_lengkap,
                    'tempat_lahir'  => $tempat_lahir,
                    'tgl_lahir'     => $tgl_lahir,
                    'asal'          => $asal,
                    'jenis_kelamin' => $jenis_kelamin,
                    'no_hp'         => $no_hp,
                    'nama_ayah'     => $nama_ayah,
                    'nama_ibu'      => $nama_ibu,
                    'alamat'        => $alamat,
                    'program_kursus'=> $program_kursus,
                    'hari_pertama'  => $hari_pertama,
                    'jam_pertama'   => $jam_pertama,
                    'hari_kedua'    => $hari_kedua,
                    'jam_kedua'     => $jam_kedua,
                    'hari_ketiga'   => $hari_ketiga,
                    'jam_ketiga'    => $jam_ketiga,
                    'validasi_data' => $validasi_data,
                    'foto'          => $gambar,
                    'username'      => $username,
                    'password'      => $password
                );

                $this->M_siswa->input_data($data, 'tbl_siswa');
                echo $this->session->set_flashdata('msg', 'success-img');
                redirect('Siswa');

            } else {
             echo $this->session->set_flashdata('msg', 'danger');
             redirect('Siswa');
         }
     } else {

       $no_pendaftar   = $this->input->post('no_pendaftar');
       $nama_lengkap   = $this->input->post('nama_lengkap');
       $tempat_lahir   = $this->input->post('tempat_lahir');
       $tgl_lahir      = $this->input->post('tgl_lahir');
       $asal           = $this->input->post('asal');

       $jenis_kelamin  = $this->input->post('jenis_kelamin');
       $no_hp          = $this->input->post('no_hp');
       $nama_ayah      = $this->input->post('nama_ayah');
       $nama_ibu       = $this->input->post('nama_ibu');
       $alamat         = $this->input->post('alamat');

       $program_kursus = $this->input->post('program_kursus');
       $hari_pertama   = $this->input->post('hari_pertama');
       $jam_pertama    = $this->input->post('jam_pertama');
       $hari_kedua     = $this->input->post('hari_kedua');
       $jam_kedua      = $this->input->post('jam_kedua');

       $hari_ketiga    = $this->input->post('hari_ketiga');
       $jam_ketiga     = $this->input->post('jam_ketiga');
       $username       = $this->input->post('username');
       $password       = md5($this->input->post('password'));

       $validasi_data  = $this->input->post('validasi_data');

       $data = array(
        'no_pendaftar'  => $no_pendaftar,
        'nama_lengkap'  => $nama_lengkap,
        'tempat_lahir'  => $tempat_lahir,
        'tgl_lahir'     => $tgl_lahir,
        'asal'          => $asal,
        'jenis_kelamin' => $jenis_kelamin,
        'no_hp'         => $no_hp,
        'nama_ayah'     => $nama_ayah,
        'nama_ibu'      => $nama_ibu,
        'alamat'        => $alamat,
        'program_kursus'=> $program_kursus,
        'hari_pertama'  => $hari_pertama,
        'jam_pertama'   => $jam_pertama,
        'hari_kedua'    => $hari_kedua,
        'jam_kedua'     => $jam_kedua,
        'hari_ketiga'   => $hari_ketiga,
        'jam_ketiga'    => $jam_ketiga,
        'validasi_data' => $validasi_data,
        'username'      => $username,
        'password'      => $password
    );

       $this->M_siswa->input_data($data, 'tbl_siswa');
       echo $this->session->set_flashdata('msg', 'success-no-img');
       redirect('Siswa');

   }
}
public function delete($id)
{
    $id = $this->input->post('id');
    $this->M_siswa->delete_data($id);
    echo $this->session->set_flashdata('msg', 'success-hapus');
    redirect('Siswa');
}
public function edit($no_pendaftar)
{
 $data['jadwal']  = $this->M_jadwal->get_hari();
 $data['siswa']   = $this->M_siswa->get_siswa_by_no_pendaftar($no_pendaftar);
 $this->load->view('Edit.siswa.php',$data);   
}

public function update($no_pendaftar)
{
    date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/file/foto_siswa/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 1000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {

                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto_siswa/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 640;
                $config['height'] = 407;
                $config['new_image'] = './assets/foto_siswa/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];

                $no_pendaftar   = $this->input->post('no_pendaftar');
                $nama_lengkap   = $this->input->post('nama_lengkap');
                $tempat_lahir   = $this->input->post('tempat_lahir');
                $tgl_lahir      = $this->input->post('tgl_lahir');
                $asal           = $this->input->post('asal');

                $jenis_kelamin  = $this->input->post('jenis_kelamin');
                $no_hp          = $this->input->post('no_hp');
                $nama_ayah      = $this->input->post('nama_ayah');
                $nama_ibu       = $this->input->post('nama_ibu');
                $alamat         = $this->input->post('alamat');

                $program_kursus = $this->input->post('program_kursus');
                $hari_pertama   = $this->input->post('hari_pertama');
                $jam_pertama    = $this->input->post('jam_pertama');
                $hari_kedua     = $this->input->post('hari_kedua');
                $jam_kedua      = $this->input->post('jam_kedua');

                $hari_ketiga    = $this->input->post('hari_ketiga');
                $jam_ketiga     = $this->input->post('jam_ketiga');
                $username       = $this->input->post('username');
                $password       = md5($this->input->post('password'));

                $validasi_data  = $this->input->post('validasi_data');


                $data = array(
                    'no_pendaftar'  => $no_pendaftar,
                    'nama_lengkap'  => $nama_lengkap,
                    'tempat_lahir'  => $tempat_lahir,
                    'tgl_lahir'     => $tgl_lahir,
                    'asal'          => $asal,
                    'jenis_kelamin' => $jenis_kelamin,
                    'no_hp'         => $no_hp,
                    'nama_ayah'     => $nama_ayah,
                    'nama_ibu'      => $nama_ibu,
                    'alamat'        => $alamat,
                    'program_kursus'=> $program_kursus,
                    'hari_pertama'  => $hari_pertama,
                    'jam_pertama'   => $jam_pertama,
                    'hari_kedua'    => $hari_kedua,
                    'jam_kedua'     => $jam_kedua,
                    'hari_ketiga'   => $hari_ketiga,
                    'jam_ketiga'    => $jam_ketiga,
                    'validasi_data' => $validasi_data,
                    'foto'          => $gambar,
                    'username'      => $username,
                    'password'      => $password
                );

                $where = array(
                    'no_pendaftar' => $no_pendaftar
                );


                $this->M_siswa->update_data($where, $data, 'tbl_siswa');
                echo $this->session->set_flashdata('msg', 'info-update');
                redirect('Siswa');

            } else {
             echo $this->session->set_flashdata('msg', 'danger');
             redirect('Siswa');
         }
     } else {

       $no_pendaftar   = $this->input->post('no_pendaftar');
       $nama_lengkap   = $this->input->post('nama_lengkap');
       $tempat_lahir   = $this->input->post('tempat_lahir');
       $tgl_lahir      = $this->input->post('tgl_lahir');
       $asal           = $this->input->post('asal');

       $jenis_kelamin  = $this->input->post('jenis_kelamin');
       $no_hp          = $this->input->post('no_hp');
       $nama_ayah      = $this->input->post('nama_ayah');
       $nama_ibu       = $this->input->post('nama_ibu');
       $alamat         = $this->input->post('alamat');

       $program_kursus = $this->input->post('program_kursus');
       $hari_pertama   = $this->input->post('hari_pertama');
       $jam_pertama    = $this->input->post('jam_pertama');
       $hari_kedua     = $this->input->post('hari_kedua');
       $jam_kedua      = $this->input->post('jam_kedua');

       $hari_ketiga    = $this->input->post('hari_ketiga');
       $jam_ketiga     = $this->input->post('jam_ketiga');
       $username       = $this->input->post('username');
       $password       = md5($this->input->post('password'));

       $validasi_data  = $this->input->post('validasi_data');

       $data = array(
        'no_pendaftar'  => $no_pendaftar,
        'nama_lengkap'  => $nama_lengkap,
        'tempat_lahir'  => $tempat_lahir,
        'tgl_lahir'     => $tgl_lahir,
        'asal'          => $asal,
        'jenis_kelamin' => $jenis_kelamin,
        'no_hp'         => $no_hp,
        'nama_ayah'     => $nama_ayah,
        'nama_ibu'      => $nama_ibu,
        'alamat'        => $alamat,
        'program_kursus'=> $program_kursus,
        'hari_pertama'  => $hari_pertama,
        'jam_pertama'   => $jam_pertama,
        'hari_kedua'    => $hari_kedua,
        'jam_kedua'     => $jam_kedua,
        'hari_ketiga'   => $hari_ketiga,
        'jam_ketiga'    => $jam_ketiga,
        'validasi_data' => $validasi_data,
        'username'      => $username,
        'password'      => $password
    );

       $where = array(
        'no_pendaftar' => $no_pendaftar
    );


       $this->M_siswa->update_data($where, $data, 'tbl_siswa');
       echo $this->session->set_flashdata('msg', 'info-update');
       redirect('Siswa');
   }
}
}
