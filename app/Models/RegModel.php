<?php namespace App\Models;

use CodeIgniter\Model;

class RegModel extends Model
{
protected $db;

public function __construct()
{
    $this->db = db_connect();
}

public function regUser($data)
{
    $builder = $this->db->table('login');
    $builder->insert($data);
    return TRUE;
}

public function checkcert($user)
{
    $builder = $this->db->table('cert');
    $builder->where('cert_number', $user);
    $query = $builder->get();
    return $query->getRow();
    
    ;
}

public function viewSession($sess)
{
    $builder = $this->db->table('cert');
    $builder->where('cert_number', $sess);
    $query = $builder->get();
    return $query->getRow();
}

}