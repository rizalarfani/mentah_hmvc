<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Daftar extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $data['page'] = 'v_home';
        $this->load->view('template', $data);
    }

    public function form_daftar()
    {
        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $data['page'] = 'v_daftar';
        $this->load->view('template', $data);
    }

    public function about()
    {
        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $data['page'] = 'v_about';
        $this->load->view('template', $data);
    }
    public function contact()
    {
        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $data['page'] = 'v_contact';
        $this->load->view('template', $data);
    }

}