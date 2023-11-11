<?php

namespace App\Models;

use CodeIgniter\Model;

class PemiluModel extends Model
{
    protected $table            = 'pemilu';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_users', 'id_paslon', 'id_tps'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function getPemilu()
    {
        return $this->select('pemilu.*, users.username, calon.nama as nama_calon, tps.nama_tps')
            ->join('users', 'users.id=pemilu.id_users')
            ->join('calon', 'calon.id=pemilu.id_paslon')
            ->join('tps', 'tps.id=pemilu.id_tps')->findAll();
    }
}
