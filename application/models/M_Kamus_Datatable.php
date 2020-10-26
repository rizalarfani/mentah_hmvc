<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_DataTableUMKM extends CI_Model
{
    public $table = 'umkm';
    public $column_order = array('','nm_u', 'nik_u','umkm_u','nama_ju', 'kec_u','kel_u','alamat_u','email_u','cp_u','omset_u', 'nama_qr','nama_adm','lat_u','time_u','');
    public $column_search = array('nm_u', 'nik_u','umkm_u', 'kec_u','kel_u','alamat_u','nama_qr','nama_adm','time_u' );
    public $order = array('umkm.id_u' => 'asc');

    private function _get_datatables_query()
    {
        $this->db->from($this->table);
        $this->db->join('admin', 'admin.id_adm = umkm.id_adm', 'inner');
        $this->db->join('kecamatan', 'kecamatan.id_kec = umkm.kec_u', 'inner');
        $this->db->join('kelurahan', 'kelurahan.id_kel = umkm.kel_u', 'inner');
        $this->db->join('jenis_usaha', 'jenis_usaha.id_ju = umkm.lingkup_u', 'inner');
        $this->db->join('produk', 'produk.id_u = umkm.id_u', 'inner');
        $i = 0;

        foreach ($this->column_search as $item) {
            if ($_POST['search']['value']) {
                if ($i===0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) {
                    $this->db->group_end();
                }
            }
            $i++;
        }

        if ($this->level == 2) {
            $this->db->where('umkm.id_adm', $this->id);
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } elseif (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
        $this->db->group_by('umkm.id_u');
    }

    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        $this->db->join('admin', 'admin.id_adm = umkm.id_adm', 'inner');
        $this->db->join('kecamatan', 'kecamatan.id_kec = umkm.kec_u', 'inner');
        $this->db->join('kelurahan', 'kelurahan.id_kel = umkm.kel_u', 'inner');
        if ($this->level == 2) {
            $this->db->where('umkm.id_adm', $this->id);
        }
        return $this->db->count_all_results();
    }


    public function count_margadana()
    {
        $this->db->from($this->table);
        $this->db->where('kec_u', 4);
        return $this->db->count_all_results();
    }
    public function count_timur()
    {
        $this->db->from($this->table);
        $this->db->where('kec_u', 3);
        return $this->db->count_all_results();
    }
    public function count_selatan()
    {
        $this->db->from($this->table);
        $this->db->where('kec_u', 2);
        return $this->db->count_all_results();
    }
    public function count_barat()
    {
        $this->db->from($this->table);
        $this->db->where('kec_u', 1);
        return $this->db->count_all_results();
    }

    public function count_per_kelurahan()
    {
        // SELECT count(id_u),nama FROM `kelurahan` left join umkm on kelurahan.id_kel = umkm.kel_u  GROUP by id_kel

        $this->db->select('count(id_u) as jumlah,nama');
        $this->db->join('umkm', 'umkm.kel_u = kelurahan.id_kel', 'left');
        $this->db->group_by('id_kel');
        return $this->db->get('kelurahan')->result();
    }


    public function getDownload($kecamatan, $start, $limit)
    {
        $this->db->where('id_kec', $kecamatan);
        
        if ($limit != "no") {
            $this->db->limit($limit, $start);
        }
        return $this->db->get('qrcode');
    }
}
