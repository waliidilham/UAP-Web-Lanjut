<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields  = [
        'email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at', 'id_tps', 'foto',
    ];

    // Dates
    protected $useTimestamps = false;
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
    public function updateActiveStatus($data, $id)
    {
        return $this->update($id, $data);
    }
    public function getPemilih()
    {
        return $this->select('users.*, users.id_tps, tps.nama_tps')
            ->join('auth_groups_users', 'users.id=auth_groups_users.user_id')
            ->join('tps', 'users.id_tps = tps.id')
            ->where('auth_groups_users.group_id', 3)
            ->findAll();
    }
    public function getPetugas()
    {
        return $this->select('users.*, users.id_tps, tps.nama_tps')
            ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
            ->join('tps', 'users.id_tps = tps.id')
            ->where('auth_groups_users.group_id', 2)
            ->findAll();
    }
    public function countPetugas()
    {
        return $this->select('users.*')
            ->join('auth_groups_users', 'users.id=auth_groups_users.user_id')
            ->where('auth_groups_users.group_id', 2)
            ->findAll();
    }
    public function countDaerahPetugas()
    {
        return $this->select('COUNT(users.id_tps) AS daerah_asal')
            ->join('tps', 'tps.id=users.id_tps')
            ->join('auth_groups_users', 'users.id=auth_groups_users.user_id')
            ->where('auth_groups_users.group_id', 2)
            ->groupBy('users.id_tps')
            ->findAll();
    }
    public function countPemilih()
    {
        return $this->select('users.*')
            ->join('auth_groups_users', 'users.id=auth_groups_users.user_id')
            ->where('auth_groups_users.group_id', 3)
            ->findAll();
    }
    public function countDaerahPemilih()
    {
        return $this->select('COUNT(users.id_tps) AS daerah_asal')
            ->join('tps', 'tps.id=users.id_tps')
            ->join('auth_groups_users', 'users.id=auth_groups_users.user_id')
            ->where('auth_groups_users.group_id', 3)
            ->groupBy('users.id_tps')
            ->findAll();
    }
    public function deleteUser($id)
    {
        return $this->delete($id);
    }
}
