<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Belakang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->login 	= $this->session->userdata('log_admin')['is_logged_in'];
        $this->id		= $this->session->userdata('log_admin')['id_adm'];
        $this->level	= $this->session->userdata('log_admin')['level_adm'];
        $this->username	= $this->session->userdata('log_admin')['username_adm'];
        if (empty($this->login) && ($this->level != 1 || $this->level != 2)) {
            redirect('Admin_login', 'refresh');
        }
        $this->logout   = base_url('Admin_login/logout');
        $this->u3		= $this->uri->segment(3);
        $this->u4		= $this->uri->segment(4);
        $this->u5		= $this->uri->segment(5);
        $this->u6		= $this->uri->segment(6);
        $this->load->model('M_Universal');
        $data = $this->M_Universal->getOne(array("id_adm" => $this->id), "admin");
        if (file_exists('upload/profil/'.$data->foto_adm)) {
            $this->foto = base_url('upload/profil/'.$data->foto_adm);
        } else {
            $this->foto = base_url('assets/adminto/assets/images/users/avatar-1.jpg');
        }
        $this->load->helper(array('file', 'resize'));
    }
    public function index()
    {
        $params = array(
            'title'	=> 'Dashboard',
            'page'	=> 'admin/dashboard');
        $this->template($params);
    }
    public function prodi()
    {
        if($this->u3 == "reg_data"){
            $list = $this->M_Universal->get_datatables($this->id);
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $al) {
                $no++;
                $row = array();
                $row[] = $no++;
                $row[] = $al->kd_prodi;
                $row[] = $al->nama;
                $row[] = '<a class="btn btn-info" href="'.base_url().'Panel/peserta/detail?id='.$al->id_peserta.'" target="_blank">Lihat</a>';
                $data[] = $row;
            }
             $output = array(
                "data" => $data
            );
            // $output = array(
            //     "draw" => (!isset($_POST['draw']))? 1:$_POST['draw'],
            //     "recordsTotal" => $this->M_admin->count_all($this->id),
            //     "recordsFiltered" => $this->M_admin->count_filtered($this->id),
            //     "data" => $data
            // );
            echo json_encode($output);
        } else if ($this->u4 == "tambah") {
            $config_rules = [
                array(
                    'field' => 'kode_prodi',
                    'label' => 'Kode Prodi',
                    'rules' => 'required|trim|numeric'
                ),
                array(
                    'field' => 'nama_prodi',
                    'label' => 'Nama Prodi',
                    'rules' => 'required|trim'
                ),
            ];
            $this->load->library('form_validation');
            $this->form_validation($config_rules);
            if($this->form_validation->run() == true){
                $post = [
                    'kd_prodi' => $this->input->post('kode_prodi',true),
                    'nama_prodi' => $this->input->post('nama_prodi',true)
                ];
                $insert			 = $this->M_Universal->insert($post, 'admin');
                ($insert) ?  $this->notifikasi->suksesAdd("tambah data baru") : $this->notifikasi->gagalAdd();
                redirect(base_url('prodi'), 'refresh');
            }
        }else {
            $params = [
                'title' => "Prodi",
                'page' => 'admin/prodi/v_prodi'
            ];
            $this->template($params);
        }
    }
    public function template($params = array())
    {
        if (count( (array)$params) > 0) {
            if ($this->level == 1) {
                $params['menu']	= 'menu/menu';
            } elseif ($this->level == 2) {
                $params['menu']	= 'menu/menu_adm';
            } else {
                redirect('warning', 'refresh');
            }
            $this->load->view('admin/template', $params);
        } else {
            redirect('warning', 'refresh');
        }
    }
    public function profil()
    {
        if ($this->u3 == 'update_post') {
            $data['nama_adm']				= $this->input->post('nama');
            $data['alamat_adm']				= $this->input->post('alamat');
            $data['email_adm']				= trim($this->input->post('email'));
            $data['cp_adm']					= trim($this->input->post('phone'));
            if ($_FILES['userfile']['size'] > 0) {
                $config['upload_path']		= './upload/profil/';
                $config['allowed_types']	= 'gif|jpg|png|bmp';
                $config['detect_mime']	  = true;
                $config['encrypt_name'] = true;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('userfile')) {
                    $photo 			= $this->upload->data();
                    $data['foto_adm']	= $photo['file_name'];
                    $fileSblumnya   = $this->M_Universal->getOne(array("id_adm" => $this->id), "admin");
                    @unlink('./upload/profil/'.$fileSblumnya->foto_adm);
                    $sukses =	$this->notifikasi->suksesEdit("Dengan Foto");
                } else {
                    $gagal =$this->notifikasi->gagalEdit("Kesalahan Pada Saat Upload File");
                }
            } else {
                $sukes = $this->notifikasi->suksesEdit("Tanpa Foto");
            }
            $this->db->where('id_adm', $this->id);
            $update = $this->db->update('admin', $data);
            ($update) ? $sukes : $gagal ;
            redirect(base_url('Belakang/profil'));
        } elseif ($this->u3 == 'password') {
            if ($this->u4 =='post') {
                $this->form_validation->set_rules('password', 'password', 'required|matches[re_password]|min_length[6]');
                $this->form_validation->set_rules('re_password', 'Retype password', 'required');
                $pass =$this->input->post('password');
                $data['pass_adm']	= password_hash($pass, PASSWORD_BCRYPT);
                if ($this->form_validation->run()) {
                    $this->M_Universal->update($data, array("id_adm" => $this->id), 'admin');
                    $this->notifikasi->suksesEdit();
                    redirect('Belakang/profil/password');
                } else {
                    $this->notifikasi->gagalEdit(validation_errors());
                    redirect('Belakang/profil/password');
                }
            } else {
                $data = $this->M_Universal->getOne(array('id_adm' => $this->id), 'admin');
                $params = array(
                    'title'	=> 'Password Akun',
                    'data' => $data,
                    'page'	=> 'admin/v_user_password'
                );
                $this->template($params);
            }
        } else {
            $data = $this->M_Universal->getOne(array('id_adm' => $this->id), 'admin');
            $params = array(
                'title'	=> 'Akun',
                'data' => $data,
                'page'	=> 'admin/v_user_detail'
            );
            $this->template($params);
        }
    }
    public function check_username($str)
    {
        if ($this->user_model->check_username($str) == 0) {
            return true;
        } else {
            $this->form_validation->set_message('check_username', 'Username sudah terpakai');
            return false;
        }
    }
    public function cek_password()
    {
        $pass = $this->input->post('password');
        echo $this->get_login($this->username, $pass, null);
    }
    public function get_login($arg, $arg2, $typ)
    {
        $data     = $this->db->get_where('admin', array('username_adm like binary' => $arg))->result();
        if (count( (array)$data) === 1) {
            if (password_verify($arg2, $data[0]->pass_adm)) {
                return 1;
            } else {
                return 0;
            }
            return 0;
        }
    }
    public function upload_file($name,$lokasi,$tipe, $maxsize){
        $config['upload_path']    = './upload/'.$lokasi;
        $config['allowed_types']  = $tipe;
        $config['detect_mime']	  = true;
        $config['encrypt_name']   = true;
        $config['allowed_types']  = $tipe;
        $config['max_size']       = $maxsize;
        $this->load->library('upload', $config);
        if (!empty($_FILES[$name]['tmp_name'])) {
            if (! $this->upload->do_upload($name)) {
               return array(
                    'ket' => 'gagal',
                    'file' => $this->upload->display_errors()
                );
            } else {
                return array(
                    'ket' => 'sukses',
                    'file' => $this->upload->data('file_name')
                );
            }
        }
    }
    function enkrip($string){
        $bumbu = md5(str_replace("=", "", base64_encode("bunghasta.com")));
        $katakata = false;
        $metodeenkrip = "AES-256-CBC";
        $kunci = hash('sha256', $bumbu);
        $kodeiv = substr(hash('sha256', $bumbu), 0, 16);
        
        $katakata = str_replace("=", "", openssl_encrypt($string, $metodeenkrip, $kunci, 0, $kodeiv));
        $katakata = str_replace("=", "", base64_encode($katakata));
        
        return $katakata;
    }
    function dekrip($string){
        $bumbu = md5(str_replace("=", "", base64_encode("bunghasta.com")));
        $katakata = false;
        $metodeenkrip = "AES-256-CBC";
        $kunci = hash('sha256', $bumbu);
        $kodeiv = substr(hash('sha256', $bumbu), 0, 16);
        
        $katakata = openssl_decrypt(base64_decode($string), $metodeenkrip, $kunci, 0, $kodeiv);
        return $katakata;
    }
}
/* End of file Belakang.php */
/* Location: ./application/controllers/Belakang.php */
