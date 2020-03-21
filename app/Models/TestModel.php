<?php namespace App\Models;

use CodeIgniter\Model;


class TestModel extends Model
{
        protected $db;

        public function __construct()
        {
                $this->db = db_connect();
                
        }
      
    
        public function createNewProject($data)
        {
                $builder = $this->db->table('cert');
                $builder->insert($data);
                return TRUE;
        }

        public function viewData()
        {
                $builder = $this->db->table('cert');
                $query   = $builder->get();
                return $query->getResult();     
        }



        public function deleteit($id)
        {
                $builder = $this->db->table('cert');
                $builder->where('id', $id);
                $builder->delete();
                return TRUE;
        }

        public function viewSlide()
        {
                $builder = $this->db->table('slide');
                $query   = $builder->get();
                return $query->getResult();     
        }

        public function show($id)
        {
                $builder = $this->db->table('cert');
                $builder->where('id', $id);
                $query   = $builder->get();
                return $query->getRow();

        }

        public function viewSingleData($id)
        {
                $builder = $this->db->table('cert');
                $builder->where('id', $id);
                $query = $builder->get();
                return $query->getRow();
        }

        public function updateTheData($data, $id)
        {
                $builder = $this->db->table('cert');
                $builder->where('id', $id);
                $builder->update($data);
                return TRUE;
        }

 

}