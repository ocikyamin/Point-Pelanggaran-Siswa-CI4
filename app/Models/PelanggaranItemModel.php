<?php

namespace App\Models;

use CodeIgniter\Model;

class PelanggaranItemModel extends Model
{
    protected $table            = 'pelanggaran_item';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];


    public function JenisPelanggaran()
    {
       return $this->db->table('pelanggaran_jenis')->get()->getResultArray();
    }

    public function PelanggaranByJenis($jenis)
    {
       return $this->db->table('pelanggaran_item')->where('jenis_id', $jenis)->get()->getResultArray();
    }

    public function PointItemPelanggaran($id)
    {
       return $this->db->table('pelanggaran_item')
       ->select('poin')
       ->where('id', $id)->get()->getRow();
    }

}
