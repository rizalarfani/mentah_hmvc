<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Prodi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Datatables');
        $this->login 	= $this->session->userdata('log_admin')['is_logged_in'];
        $this->id		= $this->session->userdata('log_admin')['id_adm'];
        $this->level	= $this->session->userdata('log_admin')['level_adm'];
        $this->username	= $this->session->userdata('log_admin')['username_adm'];
        if (empty($this->login) && ($this->level != 1 || $this->level != 2)) {
            redirect('Admin_login', 'refresh');
        }
        $this->logout   = base_url('Admin_login/logout');
        $this->u2		= $this->uri->segment(2);
        $this->u3		= $this->uri->segment(3);
        $this->u4		= $this->uri->segment(4);
        $this->u5		= $this->uri->segment(5);
        $this->u6		= $this->uri->segment(6);
        $this->load->model('M_Universal');
        $this->load->model('Prodi_model','prodi');
        $data = $this->M_Universal->getOne(array("id_adm" => $this->id), "admin");
        if (file_exists('upload/profil/'.$data->foto_adm)) {
            $this->foto = base_url('upload/profil/'.$data->foto_adm);
        } else {
            $this->foto = base_url('assets/admin/images/avatar/avatar5.png');
        }
        $this->load->helper(array('file', 'resize'));
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

    public function index()
    {
        if($this->u2 == "request_data"){
            $list = $this->prodi->get_datatables();
            echo $list;
        } else if ($this->u2 == "create") {
            $config_rules = [
                array(
                    'field' => 'kode_prodi',
                    'label' => 'Kode Prodi',
                    'rules' => 'required|trim|numeric|min_length[5]|max_length[5]'
                ),
                array(
                    'field' => 'nama_prodi',
                    'label' => 'Nama Prodi',
                    'rules' => 'required|trim'
                ),
            ];
            $this->load->library('form_validation');
            $this->form_validation->set_rules($config_rules);
            $cekKd_prodi = $this->prodi->getOne(['kd_prodi' => $this->input->post('kode_prodi',true)],'prodi');
            if($cekKd_prodi == false){
                if($this->form_validation->run() == true){
                    $post = [
                        'kd_prodi' => htmlspecialchars($this->input->post('kode_prodi',true)),
                        'nama' => htmlspecialchars($this->input->post('nama_prodi',true))
                    ];
                    $insert			 = $this->prodi->insert($post, 'prodi');
                    ($insert) ?  $this->notifikasi->suksesAdd("") : $this->notifikasi->gagalAdd();
                    redirect(base_url('prodi'), 'refresh');
                }else {
                    $this->notifikasi->gagalAdd(validation_errors());
                    redirect('prodi','refresh');
                }   
            }else {
                $this->notifikasi->gagalAdd("Maaf kode prodi sudah ada!");
                redirect('prodi','refresh');
            }
        } else if($this->u2 == "delete") {
            $kd_prodi = $this->input->post('kd_prodi',true);
            $delete = $this->prodi->delete(['kd_prodi' => $kd_prodi],'prodi');
            $this->input->post($this->security->get_csrf_token_name(),true);
            $response['token'] = $this->security->get_csrf_hash();
            if($delete){
                $response = [
                    'status' => true,
                    'messege' => "Berhasil hapus prodi",
                    'token' => $this->security->get_csrf_hash()
                ];
            }else {
                $response = [
                    'status' => false,
                    'messege' => "Gagal hapus Prodi",
                    'token' => $this->security->get_csrf_hash()
                ];
            }
            echo json_encode($response,true);
        }else {
            $params = [
                'title' => "Prodi",
                'page' => 'v_prodi'
            ];
            $this->template($params);
        }
    }

}
/* End of file Prodi.php */
