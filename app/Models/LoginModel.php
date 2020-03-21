<?php namespace App\Models;

use CodeIgniter\Model;


class LoginModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function passGate($user, $pass)
    {
        $builder = $this->db->table('login');
        $builder->where('user', $user);
        $query = $builder->get();
        $password = $query->getRow(2)->pass;
       

        if(password_verify($pass, $password))
        {
            return $query->getRow()->id;  
        } else{
            return FALSE;
        }

    }
}