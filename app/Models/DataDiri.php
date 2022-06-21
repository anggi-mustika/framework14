<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDiri extends Model
{

	protected $table = 'identitas';
	protected $allowedFields = ['nama','ttl','alamat', 'hobi'];

	public function getIdentitas($id = false)
	{
		if ($id === false) {
			return $this->findAll();
		}else{
			return $this->getWhere(['id' => $id]); 
		}
	}

	public function editIdentitas($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        return $builder->update($data);
    }
 
}