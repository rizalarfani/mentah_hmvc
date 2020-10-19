<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Prodi_model extends CI_Model {    
    public function get_datatables($kd_prodi = null)
    {
        if(empty($kd_prodi)){
            $this->datatables->select('kd_prodi,nama,date_created,update_created');
            $this->datatables->from('prodi');
            $this->datatables->add_column('view','<a href="javascript:void(0)" data-id="$1" class="btn btn-warning"><i class="fa fa-edit"></i>&nbsp;
            Edit</a>&nbsp;&nbsp;<a href="javascript:void(0)" id="btn_hapus_prodi" data-id="$1" class="btn btn-danger"><i class="fa fa-trash-o"></i>&nbsp;
            Hapus</a>','kd_prodi');
            return $this->datatables->generate();
        }
    }
    public function getOne($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }

        $data = $this->db->get($tabel)->row();
        return (count( (array)$data) > 0) ? $data : false;
    }

    public function getMulti($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        $data = $this->db->get($tabel)->result();
        return (count( (array)$data) > 0) ? $data : false;
    }
    
    public function update($data, $where, $tabel)
    {
        $this->db->where($where);
        $update = $this->db->update($tabel, $data);
        return ($update) ? true : false;
    }

    public function insert($data, $tabel)
    {
        return ($this->db->insert($tabel, $data)) ? true : false ;
    }

    public function delete($where, $tabel)
    {
        return ($this->db->where($where)->delete($tabel)) ? true : false ;
    }

}
/* End of file Prodi_model.php */
